<?php
/**
 * Quick Payment By UPI
 **/
    defined( 'ABSPATH' ) || exit;

        return array(
			    'enabled'     => array(
				'title'       => __( 'Enable/Disable', 'qpayment' ),
				'type'        => 'checkbox',
				'label'       => __( 'Enable UPI Payment Gateway', 'qpayment' ),
				'default'     => 'no',
			     ),
			     
		        'my_version'  => array(
		        'title'       => __( 'Select Version', 'qpayment' ),
		        'type'        => 'select',
		        'class'       => 'wc-enhanced-select',
		        'description' => __( 'Select plugin version to use. This is a basic free version.', 'qpayment' ),
		        'default'     => 'basic',
		        'desc_tip'    => true,
		        'options'     => array(
			        'basic'   => __( 'Basic Version', 'qpayment' ),
			        'pro'     => __( 'Pro Version', 'qpayment' ),
			        'premium' => __( 'Premium Version', 'qpayment' ),
		         )),
		         
			    'title'       => array(
				'title'       => __( 'Title', 'qpayment' ),
				'type'        => 'text',
				'description' => __( 'This controls the title which the user sees during checkout.', 'qpayment' ),
				'default'     => _x( 'UPI Payment', 'UPI Payment', 'qpayment' ),
				'desc_tip'    => true,
			     ),
			     
				'payees_name' => array(
				'title'       => __( 'Your Shop/Store Name', 'qpayment' ),
				'type'        => 'text',
				'description' => __( 'Enter Your Shop/Store Name Here.', 'qpayment' ),
				'default'     => '',
				'desc_tip'    => true,
			     ),
			     
				'upi_id'      => array(
				'title'       => __( 'UPI ID', 'qpayment' ),
				'type'        => 'email',
				'id'          => 'upi_id',
				'name'        => 'upi_id',
				'description' => __( 'Enter Your UPI ID Here.', 'qpayment' ),
				'default'     => '',
				'desc_tip'    => true,
			     ),
			     
			    'description' => array(
				'title'       => __( 'Gateway Description', 'qpayment' ),
				'type'        => 'textarea',
				'description' => __( 'Payment method description that the customer will see on your checkout.', 'qpayment' ),
				'default'     => __( 'Pay using Google Pay, PhonePe, WhatsApp, BHIM App, Paytm etc or any other UPI enabled Banking App.', 'qpayment' ),
				'desc_tip'    => true,
			     ),
			     
                array(
	            'title'       => __('Pro Version','qpayment'),
	            'type'        => 'title',
	            'desc'        => '',
	            'id'          => 'pro_settings'
	             ),
	             
                'sample_id20' => array(
				'title'       => __( '10 Digit WhatsApp Number (without +91 or 0)', 'qpayment' ),
				'type'        => 'tel',
				'description' => __( 'Enter Your WhatsApp Business Here to Receive Payment Notification from your Customers/Users.', 'qpayment' ),
				'default'     => '',
				'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
			     ),
			     
		        'sample_id18' => array(
                'title'       =>__( 'Reduce Stock Auto on Every New Order.', 'qpayment' ), 
                'type'        => 'checkbox',
                'label'       => __('Reduce stock auto','qpayment'),
                'description' => __('Minus order quantity from available quantities for every order automatic.','qpayment'), 
				'class'       => 'disabled',
                'desc_tip'    => true,
                 ), 
                 
		        'sample_id17' => array(
				'title'       => __( 'Default Order Status After Checkout', 'qpayment' ),
				'type'        => 'select',
				'options'     => '',
				'description' => __( 'The Defult order status for UPI orders.', 'qpayment' ),
				'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
			     ),
			     
	            'sample_id16' => array(
				'title'       => __( 'Set Minimum Order Amount Limit', 'qpayment' ),
				'type'        => 'number',
				'description' => __( 'Set order minimum amount for UPI Gateway.', 'qpayment' ),
				'default'     =>  0,
				'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
			     ),
			     
				'sample_id15'=> array(
				'title'       => __( 'Calculate Minimum On Cart Total', 'qpayment' ),
				'type'        => 'checkbox' ,
				'description' => __( 'Minimum order amount calculated on subtotal(default), excluded any custom charges or discounts.', 'qpayment' ),
				'default'     => 'no',
				'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
	             ),
	             
		        'sample_id14'  => array(
				'title'       => __( 'Custom Discount on Cart Total (in %)', 'qpayment' ),
				'type'        => 'number',
				'description' => __( 'Offer Custom Fix Discount to Customers, Will Apply on Total Cart Value at Rounded for All Available Gateways in Your Store.', 'qpayment' ),
				'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
	             ), 
	             
	            'sample_id13' => array(
				'title'       => __( 'Add Custom Charges', 'qpayment' ),
				'type'        =>'checkbox' ,
				'label'       => __('Enable Custom Charges','qpayment'),
				'description' => __( 'You can add any of additional extra custom chages.', 'qpayment' ),
				'default'     => 'no',
				'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
			     ),
			     
	            'sample_id12' =>    array(
	            'css'         => 'width:105px;pointer-events: none;',
				'title'       => __( 'Add Custom Charges (in ₹)', 'qpayment' ),
				'type'        =>'number' ,
				'description' => __( 'You can add any of additional extra custom gateway charges for all available gateways (exept UPI).', 'qpayment' ),
				'default'     => 0,
				'class'       => 'disabled',
				'desc_tip'    => true,
			     ),	
			     
		        'sample_id11' => array(
		        'id'          => 'sample_id11',
	            'css'         => 'width:300px;pointer-events: none;',
			    'title'       => __( 'Charges Name', 'qpayment' ),
			    'type'        =>'text' ,
			    'description' => __( 'Specify custom charges name.', 'qpayment' ),
                'placeholder' => 'Additional Charges',
                'class'       => 'disabled',
			    'desc_tip'    => true,
			     ),
			     
                'sample_id10' => array(
				'title'       => __( 'Show/Hide UPI Payment in iOs Devices', 'qpayment' ),
				'type'        => 'checkbox',
				'label'       => __( 'Show UPI Payments in iOs Devices.', 'qpayment' ),
			    'description' => __( 'Show or hide UPI option in iOs devices like iPhone and iPad. UPI Does not work in iOs devices, because there is no default app in ios for execute UPI command.', 'qpayment' ),
				'default'     => 'no',
				'css'         =>  'pointer-events: none;',
			    'class'       => 'disabled',
				'desc_tip'    => true,
			     ),
			     
		        'sample_id9'  => array(
		        'title'       => __('Show/Hide Payment Confirmation Button','qpayment'), 
                'type'        => 'checkbox',
                'label'       => __('Show payment  confirmation button','qpayment'), 
                'description' => __('Show or Hide payment  confirmation button on order received page for customers for send WhatsApp to seller when payment done by him.','qpayment'),
                'default'     => 'no',
                'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
                'desc_tip'    => true,
                 ),
                 
                'sample_id8'  => array(
				'title'       => __( 'Show/Hide Goto My Account Button','qpayment'),
				'type'        => 'checkbox',
				'label'       => __( 'Show goto my account button', 'qpayment'),
				'description' => __( 'Show or Hide My Account Button after Payment Confirmation Button.', 'qpayment' ),
				'default'     => 'no',
				'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
                 ),
                 
				'sample_id7'  => array(
				'title'       => __( 'Show/Hide User Meta', 'qpayment' ),
				'type'        => 'checkbox',
				'label'       => __( 'Show user meta', 'qpayment' ),
				'description' => __( 'Show or hide user information like First name, Phone and Email id on order received page.', 'qpayment' ),
				'default'     => 'no',
				'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
				 ),
				 
                'sample_id6'  => array(
				'title'       => __( 'Show/Hide User Device Type', 'qpayment' ),
				'type'        => 'checkbox',
				'label'       => __( 'Show user device type name', 'qpayment' ),
				'description' => __( 'Show or hide user device information on order received page.', 'qpayment' ),
				'default'     => 'no',
				'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
                 ),
                 
                'sample_id5'  => array(
				'title'       => __( 'Enable/Disable WhatsApp Chat at Checkout','qpayment'),
				'type'        => 'checkbox',
				'label'       => __( 'Add option for contact you via whatsapp'),
				'description' => __( 'Enable or disable WhatsApp option at checkout page for any query of customers.', 'qpayment' ),
				'default'     => 'no',
				'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
                 ),
                 
                 array(
	            'title'       => __('Premium Version','qpayment'),
	            'type'        => 'title',
	            'description' => '',
	            'css'         => 'color:blue;',
	            'id'          => 'premium_settings'
	             ),
	             
	            'sample_id300'=> array(
				'title'       => __( 'Add Order Shipping Module','qpayment'),
				'type'        => 'checkbox',
				'label'       => __( 'Enable this to add order tracking details module'),
			    'description' => __( 'Enabble this to add shipping module to orders page for provide shipping details to customers for tracking courier details and tracking.', 'qpayment' ),
				'default'     => 'no',
			    'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
                ),
                 
	            'sample_id301'=> array(
				'title'       => __( 'Add Custom Order Statuses','qpayment'),
				'type'        => 'checkbox',
				'label'       => __( 'Enable this to add custom order statuses'),
			    'description' => __( 'Enable this to add 2 new custom order statuses to store like Shipped and Delivered.', 'qpayment' ),
				'default'     => 'no',
			    'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
                 ),
                 
                'sample_id302'=> array(
				'title'       => __( 'Add Custom Order Emails','qpayment'),
				'type'        => 'checkbox',
				'label'       => __( 'Enable this to add custom order emails'),
			    'description' => __( 'Enable this to add new custom order mails like Shipped and Delivered to store.', 'qpayment' ),
				'default'     => 'no',
			    'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
                 ),
                 
                'sample_id303'=> array(
				'title'       => __( 'Custom Payment Button','qpayment'),
				'type'        => 'checkbox',
				'label'       => __( 'Enable this to add custom amount upi button'),
			    'description' => __( 'Enable this to add new custom amount button with customized styles for collect upi payments,you can place button anywhere in the posts.', 'qpayment' ),
				'default'     => 'no',
			    'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
                 ),
                 
                'sample_id4'  => array(
				'title'       => __( 'Enable/Disable Payment link sharing','qpayment'),
				'type'        => 'checkbox',
				'label'       => __( 'Enable payment link sharing options'),
			    'description' => __( 'Enable or disable Payment link sharing at order received page by sms,email or whatsapp.', 'qpayment' ),
				'default'     => 'no',
				'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
                 ),
                 
                'sample_id3'  => array(
				'title'       => __( 'Show/Hide Sold Quantity','qpayment'),
				'type'        => 'checkbox',
				'label'       => __( 'Show sold quantity at single product page'),
			    'description' => __( 'Show or hide total product sold quantity at single product page.', 'qpayment' ),
				'default'     => 'no',
			    'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
                 ),
                 
                'sample_id2'  => array(
				'title'       => __( 'Show/Hide Product Availability','qpayment'),
				'type'        => 'checkbox',
				'label'       => __( 'Show product availability at single product page'),
				'description' => __( 'Show or hide procuct availability at product page and also add to cart button will be hide,when this option is enabled and product is set to not available from product meta.', 'qpayment' ),
				'default'     => 'no',
				'css'         =>  'pointer-events: none;',
				'class'       => 'disabled',
				'desc_tip'    => true,
                 ),
                 
                'sample_id1'  => array(
				'title'       => __( 'Block List - Add Email Id or Phone Number or IP Address', 'qpayment' ),
				'type'        => 'textarea',
				'css'         => 'width:450px;pointer-events: none;',
				'description' => __( 'Add customer\'s email id and or phone  number and or ip address,separated by comma(,), which you want to blocked for new order\'s.', 'qpayment' ),
				'default'     => '',
				'class'       => 'disabled',
				'desc_tip'    => true,

			)
		);

