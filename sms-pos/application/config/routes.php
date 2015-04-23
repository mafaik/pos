<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
//$route['translate_uri_dashes'] = FALSE;

$route['purchase-order'] = "purchase_order/PurchaseOrder";
$route['purchase-order/detail'] = "purchase_order/PurchaseOrder/insertPOD";
$route['purchase-order/delete'] = "purchase_order/PurchaseOrder/resetPO";
$route['purchase-order/detail/update/(:num)/(:num)'] = "purchase_order/PurchaseOrder/updatePOD/$1/$2";
$route['purchase-order/detail/delete/(:num)'] = "purchase_order/PurchaseOrder/deletePOD/$1";
$route['purchase-order/save'] = "purchase_order/PurchaseOrder/savePO";
$route['purchase-order/invoice/(:num)'] = "purchase_order/Invoice/index/$1";

$route['card-stock'] = "card_stock/CardStock";
$route['card-stock/detail/(:num)'] = "card_stock/CardStock/detailCS/$1";
$route['card-stock/invoice/(:num)'] = "card_stock/CardStock/invoice/$1";

$route['product-conversion'] = "product_conversion/Conversion";
$route['product-conversion/add/(:num)'] = "product_conversion/Conversion/addConversion/$1";
$route['product-conversion/save'] = "product_conversion/Conversion/save";
$route['product-conversion/invoice/(:num)'] = "product_conversion/Conversion/invoice/$1";
$route['product-conversion/detail/delete/(:num)'] = "product_conversion/Conversion/deleteDetail/$1";

$route['credit'] = "Credit";
$route['credit/bill/(:num)'] = "Credit/bill/$1";
$route['credit/detail/(:num)'] = "Credit/detailBayar/$1";

$route['product-distribution'] = "product_distribution/Distribution";
$route['product-distribution/detail/delete/(:num)'] = "product_distribution/Distribution/deleteDetail/$1";
$route['product-distribution/save'] = "product_distribution/Distribution/save";
$route['product-distribution/invoice/(:num)'] = "product_distribution/Distribution/invoice/$1";

