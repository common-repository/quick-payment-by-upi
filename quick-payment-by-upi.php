<?php
/**
 * Plugin Name: Quick Payment By UPI
 * Plugin URI: http://demo.rhkshop.in/
 * Description: Collect Payments by UPI from your clients using Paytm, GooglePay, PhonePe, TrueCaller, MobiKwik, FreeCharge or any Bank UPI App.
 * Version: 1.2
 * Author: quickupi
 * Author URI: http://demo.rhkshop.in/contact-us/
 * Copyright: © 2021 quickupi
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 **/
 
/** SPECIAL THANKS TO KIASA **
 * 
 * who inspired me to making such a nice upi payment plugin with more 
 * functionalities and customized features(for Pro and Premium Versions) 
 * for receiving payments by upi for Woocommerce stores.
 **/
 
/** This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */
 
 

    defined( 'ABSPATH' ) || exit;

    add_action( 'plugins_loaded', 'wc_upi_extends');

    function wc_upi_extends(){
    class upi_extends_to_woocommerce extends WC_Payment_Gateway {

	public function __construct() {

		$this->id                 = 'upi_extend';		
		$this->has_fields         = false;
		$this->my_version         = $this->get_option('my_version');
		$this->order_button_text  = __( 'Place order', 'woocommerce' );
		$this->method_title       = __( 'Quick UPI Payment','woocommerce' );
		$this->method_description = __( 'Receive Quick Payments from your Clients By UPI, Will be credited in your UPI Account.', 'woocommerce' );
		$this->set_upi_fields();
		$this->init_settings();
		$this->upi_id 		      = $this->get_option( 'upi_id' );
		$this->title              = $this->get_option( 'title' );
		$this->description        = $this->get_option( 'description' );
		$this->payees_name 	      = $this->get_option( 'payees_name' );


		
		add_action( 'woocommerce_update_options_payment_gateways_' . $this->id, array( $this, 'process_admin_options' ) );
		add_action( 'woocommerce_thankyou_upi_extend', array( $this, 'wc_order_done' ) );
	}
 
	//order done
    public function wc_order_done($order_id) {
	   		
	        $order = wc_get_order($order_id);
	        $encoded_upi = urlencode($this->upi_id);
	    
	        $order_id = $order->get_id();
	        $cool_order_total = $order->get_total();
            $set_paying_address_url = "upi://pay?pa=$encoded_upi&amp;pn=$this->payees_name&amp;tn=OrderID:$order_id&amp;am=$cool_order_total&amp;cu=INR";

		echo '<div align="center" style="width:100%!important;margin:auto!important;">';
	    if (!wp_is_mobile()){
		    echo '<b><p>==You Can Pay Only By Mobile Phones==</P></b>';
            }
            
	    if ( $this->description && $this->upi_id && wp_is_mobile()) {
            echo wp_kses_post( wpautop( wptexturize( '<p>' . $this->description . '</p>' ) ) );	
            echo '<h4>'.__('Payment Pending!').'</h4>';
        ?>
            <p class="woocommerce-thankyou-order-success-actions">
                <a href="<?php echo $set_paying_address_url; ?> " class="button"><?php _e('Make Payment', 'woocommerce'); ?> </a><br>
       <?php
		    echo '</br>';
	    }
    }  

   
    public function set_upi_fields(){
        
		$this->form_fields = include 'includes/qp-required-fields.php';
		
		$jvq ="
        jQuery('#woocommerce_upi_extend_0').css({'color':'#F5B041'});		 
        var chk = jQuery('.disabled');
        chk.prop('disabled', true);
        chk.css({'outline': '1px solid gray'});
        jQuery('#woocommerce_upi_extend_1').css({'color':'#5DADE2'});";
      
      	if ( function_exists( 'wc_enqueue_js' ) ) {
			wc_enqueue_js( $jvq );
		} else {
			WC()->add_inline_js( $jvq );
		}
      
	}
	
	public function process_payment( $order_id ) {

	    $order = wc_get_order( $order_id );
	    
        if ( $order->get_total() > 0 ) {
            $order->update_status( apply_filters( 'woocommerce_upi_extend_process_payment_order_status', 'on-hold', $order ), _x( 'Awaiting UPI Payments', 'UPI Payment Method', 'woocommerce' ) );
            } else {
            $order->payment_complete();
	    }
            WC()->cart->empty_cart();
		        return array(
			        'result'   => 'success',
			        'redirect' => $this->get_return_url( $order ),
                );
        }
    }
    
    add_filter('woocommerce_payment_gateways', 'woocommerce_add_gateway_upi_extend_gateway' );
    function woocommerce_add_gateway_upi_extend_gateway($woo_gateways) {
		
		$woo_gateways[] = 'upi_extends_to_woocommerce';
		return $woo_gateways;
    }
    
	
	//setup link to wp
	add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'quick_settings' );
	function quick_settings( $upi_setsup ) {
	    $upi_setups = array(
        '<a href="'. admin_url( 'admin.php?page=wc-settings&tab=checkout&section=upi_extend' ) .'">' . __( 'UPISetup', 'woocommerce' ) . '</a>',
        '<a href="' . esc_url( 'http://demo.rhkshop.in/' )                                     . '">' . __( 'Pro Demo', 'woocommerce' ) . '</a>'

        );
            return array_merge( $upi_setups, $upi_setsup );
    }

    
    }//endofclass
    