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
$route['card-stock/checkout/(:num)'] = "card_stock/CardStock/checkout/$1";

$route['product-conversion'] = "product_conversion/Conversion";
$route['product-conversion/add/(:num)'] = "product_conversion/Conversion/addConversion/$1";
$route['product-conversion/save'] = "product_conversion/Conversion/save";
//$route['product-conversion/invoice/(:num)'] = "product_conversion/Conversion/invoice/$1";
//$route['product-conversion/detail/delete/(:num)'] = "product_conversion/Conversion/deleteDetail/$1";

$route['credit'] = "Credit";
$route['credit/bill/(:num)'] = "Credit/bill/$1";
$route['credit/paid/(:num)'] = "Credit/update/$1";
$route['credit/detail/(:num)'] = "Credit/detailBayar/$1";

$route['product-distribution'] = "product_distribution/Distribution";
$route['product-distribution/detail/add'] = "product_distribution/Distribution/add";
$route['product-distribution/detail/delete/(:num)'] = "product_distribution/Distribution/delete/$1";
$route['product-distribution/save'] = "product_distribution/Distribution/save";
$route['product-distribution/checkout/(:num)'] = "product_distribution/Distribution/checkout/$1";


$route['pricing'] = "Pricing";
$route['pricing/setting/(:num)'] = "Pricing/setPrice/$1";

$route['retail'] = "Retail";
$route['retail/update/(:num)/(:num)'] = "Retail/updateItem/$1/$2";
$route['retail/delete/(:num)'] = "Retail/deleteItem/$1";
$route['retail/save'] = "Retail/save";
$route['retail/checkout/(:num)'] = "retail/Checkout/index/$1";


$route['retail/returns'] = "retail/Returns";
$route['retail/returns/list-item/(:num)'] = "retail/Returns/listItem/$1";
$route['retail/returns/(:num)'] = "retail/Returns/returnsItem/$1";


$route['retail/replace/(:num)'] = "retail/Replace/index/$1";
$route['retail/replace/update/(:num)/(:num)/(:num)'] = "retail/Replace/updateItem/$1/$2/$3";
$route['retail/replace/delete/(:num)/(:num)'] = "retail/Replace/deleteItem/$1/$2";
$route['retail/replace/checkout/(:num)'] = "retail/Checkout/replace/$1";

$route['stock-opname'] = "Opname";
$route['stock-opname/checking/(:num)'] = "Opname/checking/$1";
$route['stock-opname/save'] = "Opname/save";

$route['stock-opname/store'] = "opname/Store";
$route['stock-opname/store/checking/(:num)'] = "opname/Store/checking/$1";
$route['stock-opname/store/save'] = "opname/Store/save";



$route['proposal'] = "proposal";
$route['proposal/delete'] = "proposal/reset";
$route['proposal/save'] = "proposal/saveProposal";
$route['proposal/detail'] = "proposal/insertDetail";
$route['proposal/detail/delete/(:num)'] = "proposal/deleteDetail/$1";
$route['proposal/detail/update'] = "proposal/detailUpdate";
$route['proposal/checkout/(:num)'] = "proposal/checkout/$1";


$route['proposal/list'] = "proposal/Listing/index";
$route['proposal/approve/(:num)'] = "proposal/Listing/approve/$1";
$route['proposal/delete/(:num)'] = "proposal/Listing/delete/$1";



$route['sales-order/(:num)'] = "sales_order/SalesOrder/index/$1";
$route['sales-order/list'] = "sales_order/SalesOrder/detail";
$route['sales-order/delete'] = "sales_order/SalesOrder/reset";
$route['sales-order/detail/delete/(:num)'] = "sales_order/SalesOrder/deleteDetail/$1";
$route['sales-order/save'] = "sales_order/SalesOrder/save";
$route['sales-order/update/(:num)/(:num)'] = "sales_order/SalesOrder/updateItem/$1/$2";
$route['sales-order/checkout/(:num)'] = "sales_order/SalesOrder/checkout/$1";


$route['debit'] = "Debit";
$route['debit/bill/(:num)'] = "Debit/bill/$1";
$route['debit/paid/(:num)'] = "Debit/update/$1";
$route['debit/detail/(:num)'] = "Debit/detailBayar/$1";


$route['delivery-order'] = "delivery_order/DeliveryOrder/listing";
$route['delivery-order/send/(:num)'] = "delivery_order/DeliveryOrder/index/$1";
$route['delivery-order/list'] = "delivery_order/DeliveryOrder/detail";
$route['delivery-order/delete'] = "delivery_order/DeliveryOrder/reset";
$route['delivery-order/detail/delete/(:num)'] = "delivery_order/DeliveryOrder/deleteDetail/$1";
$route['delivery-order/save'] = "delivery_order/DeliveryOrder/save";
$route['delivery-order/checkout/(:num)/(:num)'] = "delivery_order/DeliveryOrder/checkout/$1/$2";


$route['join'] = "join";
$route['join/select/(:num)'] = "join/select/$1";
$route['join/do'] = "join/listing";
$route['join/delete'] = "join/reset";
$route['join/save'] = "join/save";
$route['join/checkout/(:num)'] = "join/checkout/$1";