<?php
/*
Plugin Name: WinOrder - WPPizza Connector
Plugin URI: 
Description: This plugin connects your WinOrder POS to WPPizza 
Version: 1.6.14
Author: PixelPlanet GmbH
Author URI: https://www.winorder.com/ 
*/


/***************************
  Access to WPPizza options
 ***************************/

function winorder_wppizza_getOptions_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    $wppizza_options = get_option('wppizza');
    return json_encode((array)$wppizza_options, JSON_PRETTY_PRINT);
}

function winorder_wppizza_setOptions_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    // The second param "true" makes sure we get an associative array
    // instead of an object.
    $wppizza_options = json_decode($args[2], true);
	update_option('wppizza', $wppizza_options);	
	// return saved value
    $wppizza_options = get_option('wppizza');
    return json_encode($wppizza_options, JSON_PRETTY_PRINT);
}

/***************************
  Access to WPPizza additional ingredients
 ***************************/

function winorder_wppizza_getAddIngredients_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    $wppizza_add_ingedients = get_option('wppizza_addingredients');
    return json_encode((array)$wppizza_add_ingedients, JSON_PRETTY_PRINT);
}

function winorder_wppizza_setAddIngredients_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    // The second param "true" makes sure we get an associative array
    // instead of an object.
    $wppizza_add_ingedients = json_decode($args[2], true);
	update_option('wppizza_addingredients', $wppizza_add_ingedients);	
	// return saved value
    $wppizza_add_ingedients = get_option('wppizza_addingredients');
    return json_encode($wppizza_add_ingedients, JSON_PRETTY_PRINT);
}

/***************************
     WPPizza deliver by ZIP/postcode
 ***************************/

function winorder_wppizza_getDeliverByZIP_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    $wppizza_deliver_by_zip = get_option('wppizza_dbp');
    return json_encode((array)$wppizza_deliver_by_zip, JSON_PRETTY_PRINT);
}

function winorder_wppizza_setDeliverByZIP_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    // The second param "true" makes sure we get an associative array
    // instead of an object.
    $wppizza_deliver_by_zip = json_decode($args[2], true);
	update_option('wppizza_dbp', $wppizza_deliver_by_zip);	
	// return saved value
    $wppizza_deliver_by_zip = get_option('wppizza_dbp');
    return json_encode($wppizza_deliver_by_zip, JSON_PRETTY_PRINT);
}

/***************************
     WPPizza pickup prices
 ***************************/

function winorder_wppizza_getPickupPrices_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    $wppizza_pickup_prices = get_option('wppizza_pickup_prices');
    return json_encode((array)$wppizza_pickup_prices, JSON_PRETTY_PRINT);
}

function winorder_wppizza_setPickupPrices_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    // The second param "true" makes sure we get an associative array
    // instead of an object.
    $wppizza_pickup_prices = json_decode($args[2], true);
	update_option('wppizza_pickup_prices', $wppizza_pickup_prices);	
	// return saved value
    $wppizza_pickup_prices = get_option('wppizza_pickup_prices');
    return json_encode($wppizza_pickup_prices, JSON_PRETTY_PRINT);
}


/***************************
     WPPizza preorder
 ***************************/

function winorder_wppizza_getPreOrder_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    $wppizza_preorder = get_option('wppizza_preorder');
    return json_encode((array)$wppizza_preorder, JSON_PRETTY_PRINT);
}

function winorder_wppizza_setPreOrder_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    // The second param "true" makes sure we get an associative array
    // instead of an object.
    $wppizza_preorder = json_decode($args[2], true);
	update_option('wppizza_preorder', $wppizza_preorder);	
	// return saved value
    $wppizza_preorder = get_option('wppizza_preorder');
    return json_encode($wppizza_preorder, JSON_PRETTY_PRINT);
}

/***************************
     WPPizza stock management
 ***************************/

function winorder_wppizza_getStockManagement_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    $wppizza_stock = get_option('wppizza_stockmanagement');
    return json_encode((array)$wppizza_stock, JSON_PRETTY_PRINT);
}

function winorder_wppizza_setStockManagement_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    // The second param "true" makes sure we get an associative array
    // instead of an object.
    $wppizza_stock = json_decode($args[2], true);
	update_option('wppizza_stockmanagement', $wppizza_stock);	
	// return saved value
    $wppizza_stock = get_option('wppizza_stockmanagement');
    return json_encode($wppizza_stock, JSON_PRETTY_PRINT);
}


/***************************
     WPPizza coupons and discounts
 ***************************/

function winorder_wppizza_getCouponsDiscounts_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    $wppizza_cad = get_option('wppizza_cad');
    return json_encode((array)$wppizza_cad, JSON_PRETTY_PRINT);
}

function winorder_wppizza_setCouponsDiscounts_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    // The second param "true" makes sure we get an associative array
    // instead of an object.
    $wppizza_cad = json_decode($args[2], true);
	update_option('wppizza_cad', $wppizza_cad);	
	// return saved value
    $wppizza_cad = get_option('wppizza_cad');
    return json_encode($wppizza_cad, JSON_PRETTY_PRINT);
}


/***************************
     WPPizza coupons 
 ***************************/
function winorder_wppizza_getCoupons_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    $wppizza_cad_coupons = get_option('wppizza_cad_coupons');
    return json_encode((array)$wppizza_cad_coupons, JSON_PRETTY_PRINT);
}

function winorder_wppizza_setCoupons_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    // The second param "true" makes sure we get an associative array
    // instead of an object.
    $wppizza_cad_coupons = json_decode($args[2], true);
	update_option('wppizza_cad_coupons', $wppizza_cad_coupons);	
	// return saved value
    $wppizza_cad_coupons = get_option('wppizza_cad_coupons');
    return json_encode($wppizza_cad_coupons, JSON_PRETTY_PRINT);
}


/***************************
     WPPizza discounts 
 ***************************/

function winorder_wppizza_getDiscounts_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    $wppizza_cad_discounts = get_option('wppizza_cad_discounts');
    return json_encode((array)$wppizza_cad_discounts, JSON_PRETTY_PRINT);
}

function winorder_wppizza_setDiscounts_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    // The second param "true" makes sure we get an associative array
    // instead of an object.
    $wppizza_cad_discounts = json_decode($args[2], true);
	update_option('wppizza_cad_discounts', $wppizza_cad_discounts);	
	// return saved value
    $wppizza_cad_discounts = get_option('wppizza_cad_discounts');
    return json_encode($wppizza_cad_discounts, JSON_PRETTY_PRINT);
}

 

/***************************
     WPPizza gateway COD 
 ***************************/

function winorder_wppizza_getGatewayCOD_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    $wppizza_gateway_cod = get_option('wppizza_gateway_cod');
    return json_encode((array)$wppizza_gateway_cod, JSON_PRETTY_PRINT);
}

function winorder_wppizza_setGatewayCOD_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    // The second param "true" makes sure we get an associative array
    // instead of an object.
    $wppizza_gateway_cod = json_decode($args[2], true);
	update_option('wppizza_gateway_cod', $wppizza_gateway_cod);	
	// return saved value
    $wppizza_deliver_by_zip = get_option('wppizza_dbp');
    return json_encode($wppizza_gateway_cod, JSON_PRETTY_PRINT);
}


/***************************
     WPPizza gateway PayPal 
 ***************************/
function winorder_wppizza_getGatewayPayPal_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    $wppizza_gateway_paypal = get_option('wppizza_gateway_paypal');
    return json_encode((array)$wppizza_gateway_paypal, JSON_PRETTY_PRINT);
}

function winorder_wppizza_setGatewayPayPal_JSON($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    // The second param "true" makes sure we get an associative array
    // instead of an object.
    $wppizza_gateway_paypal = json_decode($args[2], true);
	update_option('wppizza_gateway_paypal', $wppizza_gateway_paypal);	
	// return saved value
    $wppizza_deliver_by_zip = get_option('wppizza_gateway_paypal');
    return json_encode($wppizza_gateway_paypal, JSON_PRETTY_PRINT);
}

/***************************
     WPPizza order status
 ***************************/

function winorder_wppizza_setTrackingStatus($args) {
    $username = $args[0];
    $password = $args[1];
 
    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

	$blogid = $args[2];
	$ordersid = $args[3];
	/**distinct blogid set**/
	if($blogid!='' ){
		$wpdb->prefix=$wpdb->prefix.$blogid.'_';
	}

	$orderstatus = $args[4];
	/**
		update db including setting current time as order_update

		specifically set timestamp for people that can't ( or can't be bothered)
		to set the right timezone in the php.ini
	**/
	$ts=current_time('timestamp');
	$updateTimeStamp=date("Y-m-d H:i:s",$ts);

	$orderstatus = $args[4];
	$notes = $args[5];

    global $wpdb;
	/**update db including setting current time as order_update */
	$wpdb->query("UPDATE ".$wpdb->prefix . "wppizza_orders SET order_status='".$orderstatus."' , order_update='".$updateTimeStamp."' , notes='".$notes."' WHERE id=".(int)$ordersid." ");
	$res= $wpdb->get_row("SELECT order_status FROM ".$wpdb->prefix . "wppizza_orders WHERE id=".(int)$ordersid." ");
	// return saved oderstatus
    return $res->order_status;
}


/***************************
     WPPizza preparation/delivery time 
 ***************************/
function winorder_wppizza_getPreparationTime($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    $wppizza_options = get_option('wppizza');
	$preparation_time = $wppizza_options["order_settings"]["order_pickup_preparation_time"];
    return json_encode($preparation_time, JSON_PRETTY_PRINT);
}



function winorder_wppizza_setPreparationTime($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    $wppizza_options = get_option('wppizza');
	// set preparation time for pickup
	$wppizza_options['order_settings']['order_pickup_preparation_time'] = $args[2];
	// set order delivery time
	$wppizza_options['order_settings']['order_delivery_time'] = $args[3];
	update_option('wppizza', $wppizza_options);	
    return $wppizza_options['order_settings']['order_pickup_preparation_time'];
}


/***************************
     WPPizza preparation/delivery time 
 ***************************/
function winorder_wppizza_getStoreClosed($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    $wppizza_options = get_option('wppizza');
	$close_shop_now = $wppizza_options["openingtimes"]["close_shop_now"];
    return json_encode($close_shop_now, JSON_PRETTY_PRINT);
}

function winorder_wppizza_setStoreClosed($args) {

    $username = $args[0];
    $password = $args[1];

    global $wp_xmlrpc_server;

    if (!$user = $wp_xmlrpc_server->login($username, $password)) {
        echo '<div class="updated redmsg"><p>' . $wp_xmlrpc_server->error . '</p></div>';
    }

    $wppizza_options = get_option('wppizza');
	// set preparation time for pickup
	if ($args[2] == "true")  {
		$wppizza_options['openingtimes']['close_shop_now'] = true;
	} else {
		$wppizza_options['openingtimes']['close_shop_now'] = false;
	};
	// set order delivery time
	update_option('wppizza', $wppizza_options);	
    return $wppizza_options['openingtimes']['close_shop_now'];
}


// add XML-RPC methods
add_filter('xmlrpc_methods', 'winorder_wppizza_xmlrpc_methods_wppizza');

function winorder_wppizza_xmlrpc_methods_wppizza($methods) {

    // wppizza options remote access
    $methods['wppizza.getOptionsJSON'] = 'winorder_wppizza_getOptions_JSON';
    $methods['wppizza.setOptionsJSON'] = 'winorder_wppizza_setOptions_JSON';
	
    // wppizza additional ingredients remote access
    $methods['wppizza.getAddIngredientsJSON'] = 'winorder_wppizza_getAddIngredients_JSON';
    $methods['wppizza.setAddIngredientsJSON'] = 'winorder_wppizza_setAddIngredients_JSON';
	
    // wppizza deliver by zip/postcode remote access
    $methods['wppizza.getDeliverByZipJSON'] = 'winorder_wppizza_getDeliverByZIP_JSON';
    $methods['wppizza.setDeliverByZipJSON'] = 'winorder_wppizza_setDeliverByZIP_JSON';

    // wppizza pickup prices remote access
    $methods['wppizza.getPickupPricesJSON'] = 'winorder_wppizza_getPickupPrices_JSON';
    $methods['wppizza.setPickupPricesJSON'] = 'winorder_wppizza_setPickupPrices_JSON';
	
    // wppizza preorder remote access
    $methods['wppizza.getPreOrderJSON'] = 'winorder_wppizza_getPreOrder_JSON';
    $methods['wppizza.setPreOrderJSON'] = 'winorder_wppizza_setPreOrder_JSON';
	
    // wppizza stock management remote access
    $methods['wppizza.getStockManagementJSON'] = 'winorder_wppizza_getStockManagement_JSON';
    $methods['wppizza.setStockManagementJSON'] = 'winorder_wppizza_setStockManagement_JSON';
                      
    // wppizza coupons and discounts remote access
    $methods['wppizza.getCouponsDiscountsJSON'] = 'winorder_wppizza_getCouponsDiscounts_JSON';
    $methods['wppizza.setCouponsDiscountsJSON'] = 'winorder_wppizza_setCouponsDiscounts_JSON';
    $methods['wppizza.getCouponsJSON'] = 'winorder_wppizza_getCoupons_JSON';
    $methods['wppizza.setCouponsJSON'] = 'winorder_wppizza_setCoupons_JSON';
    $methods['wppizza.getDiscountsJSON'] = 'winorder_wppizza_getDiscounts_JSON';
    $methods['wppizza.setDiscountsJSON'] = 'winorder_wppizza_setDiscounts_JSON';
	
    // wppizza gateway COD
    $methods['wppizza.getGatewayCODJSON'] = 'winorder_wppizza_getGatewayCOD_JSON';
    $methods['wppizza.setGatewayCODJSON'] = 'winorder_wppizza_setGatewayCOD_JSON';
	
    // wppizza gateway PayPal
    $methods['wppizza.getGatewayPayPalJSON'] = 'winorder_wppizza_getGatewayPayPal_JSON';
    $methods['wppizza.setGatewayPayPalJSON'] = 'winorder_wppizza_setGatewayPayPal_JSON';
	
	// send tracking status
    $methods['wppizza.sendTrackingStatus'] = 'winorder_wppizza_setTrackingStatus';
	
    // wppizza preparation time
    $methods['wppizza.getPreparationTime'] = 'winorder_wppizza_getPreparationTime';
    $methods['wppizza.setPreparationTime'] = 'winorder_wppizza_setPreparationTime';
	
	// wppizza store open/closed status
    $methods['wppizza.getStoreClosed'] = 'winorder_wppizza_getStoreClosed';
    $methods['wppizza.setStoreClosed'] = 'winorder_wppizza_setStoreClosed';

    return $methods;
}

add_filter('wppizza_filter_mail_attachments', 'winorder_wppizza_add_attachment', 10, 4);

function winorder_wppizza_add_attachment($wp_mail_attachments, $recipient_key, $email_settings, $order_formatted)
{
    if($recipient_key == 'shop'){
	  if ( version_compare( WPPIZZA_VERSION, '3.9',  '>='  )) {
	    // WPPizza >= 3.9
        $data = array();
        $data = $order_formatted["sections"];
        $data["localization"] = $order_formatted["localization"];		
      } else {		
	    // WPPizza < 3.9
        $data = $order_formatted;
      }	
	  // not needed:
      unset($data['blog_info']);	  
      unset($data['blog_options']);	  
      unset($data['date_format']);	  
      unset($data['localization']);	  
      $order_id = $data['ordervars']['order_id']['value'];
      $json_data = json_encode($data, JSON_PRETTY_PRINT);
      $uploads = wp_upload_dir();
      $file_path = trailingslashit($uploads['path']).'order'.$order_id.'.json';
      file_put_contents($file_path, $json_data);
      $wp_mail_attachments[]=$file_path;
	}
    return $wp_mail_attachments;
}

add_action('wppizza_on_email_sent', 'winorder_wppizza_unlink_attachment', 10, 4);

function winorder_wppizza_unlink_attachment($recipient_key, $email_settings, $order_formatted)
{
    if($recipient_key == 'shop'){
      $uploads = wp_upload_dir();
	  if ( version_compare( WPPIZZA_VERSION, '3.9',  '>='  )) {
	    // WPPizza >= 3.9
        $order_id = $order_formatted["sections"]['ordervars']['order_id']['value'];
      } else {		
	    // WPPizza < 3.9
        $order_id = $order_formatted['ordervars']['order_id']['value'];
      }				
      $file_path = trailingslashit($uploads['path']).'order'.$order_id.'.json';
      unlink($file_path);    
    }
return;
}



/**
 * Add 'show_on_front' and 'page_on_front' to the list of XML-RPC writeable options.
 */
add_filter( 'xmlrpc_blog_options', function( $blog_options ) 
{
    if( is_array( $blog_options ) )
    { 
        $blog_options['show_on_front'] = array(
            'desc'     => __( 'Show on front' ),
            'readonly' => false,
            'option'   => 'show_on_front'
        );
        $blog_options['page_on_front'] = array(
            'desc'     => __( 'Page on front' ),
            'readonly' => false,
            'option'   => 'page_on_front'
        );
    }
    return $blog_options; 
});



?>