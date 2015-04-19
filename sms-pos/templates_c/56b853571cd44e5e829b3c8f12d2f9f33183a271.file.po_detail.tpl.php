<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-19 05:33:51
         compiled from "/var/www/sms-pos/application/modules/purchase_order/views/po_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6338738805530ecdd0a61e9-92077084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56b853571cd44e5e829b3c8f12d2f9f33183a271' => 
    array (
      0 => '/var/www/sms-pos/application/modules/purchase_order/views/po_detail.tpl',
      1 => 1429421628,
      2 => 'file',
    ),
    'fff4798455c3e7183d6e4c124fc2bab3741f8371' => 
    array (
      0 => '/var/www/sms-pos/application/master.tpl',
      1 => 1429358104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6338738805530ecdd0a61e9-92077084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5530ecdd211b44_79182658',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5530ecdd211b44_79182658')) {function content_5530ecdd211b44_79182658($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <title>PT Medika Sejahtera</title>

    <?php echo css('bootstrap.min.css');?>

    <?php echo css('londinium-theme.css');?>

    <?php echo css('styles.css');?>

    <?php echo css('icons.css');?>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo theme_url();?>
ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo theme_url();?>
ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"><?php echo '</script'; ?>
>

    <?php echo js('plugins/charts/sparkline.min.js');?>


    <?php echo js('plugins/forms/uniform.min.js');?>

    <?php echo js('plugins/forms/select2.min.js');?>

    <?php echo js('plugins/forms/inputmask.js');?>

    <?php echo js('plugins/forms/autosize.js');?>

    <?php echo js('plugins/forms/inputlimit.min.js');?>

    <?php echo js('plugins/forms/listbox.js');?>

    <?php echo js('plugins/forms/multiselect.js');?>

    <?php echo js('plugins/forms/validate.min.js');?>

    <?php echo js('plugins/forms/tags.min.js');?>

    <?php echo js('plugins/forms/switch.min.js');?>


    <?php echo js('plugins/forms/uploader/plupload.full.min.js');?>

    <?php echo js('plugins/forms/uploader/plupload.queue.min.js');?>


    <?php echo js('plugins/forms/wysihtml5/wysihtml5.min.js');?>

    <?php echo js('plugins/forms/wysihtml5/toolbar.js');?>


    <?php echo js('plugins/interface/daterangepicker.js');?>

    <?php echo js('plugins/interface/fancybox.min.js');?>

    <?php echo js('plugins/interface/moment.js');?>

    <?php echo js('plugins/interface/jgrowl.min.js');?>

    <?php echo js('plugins/interface/datatables.min.js');?>

    <?php echo js('plugins/interface/colorpicker.js');?>

    <?php echo js('plugins/interface/fullcalendar.min.js');?>

    <?php echo js('plugins/interface/timepicker.min.js');?>


    <?php echo js('bootstrap.min.js');?>

    <?php echo js('application.js');?>


</head>

<body>

<!-- Navbar -->
<div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="<?php echo theme_url('images/logo.png');?>
" alt="Londinium"></a>
        <a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
            <span class="sr-only">Toggle navbar</span>
            <i class="icon-grid3"></i>
        </button>
        <button type="button" class="navbar-toggle offcanvas">
            <span class="sr-only">Toggle navigation</span>
            <i class="icon-paragraph-justify2"></i>
        </button>
    </div>

    <ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">
                <i class="icon-bell"></i>
                <span class="label label-default">2</span>
            </a>
            <div class="popup dropdown-menu dropdown-menu-right">
                <div class="popup-header">
                    <span>Activity</span>
                </div>
                <ul class="activity">
                    <li>
                        <i class="icon-cart-checkout text-success"></i>
                        <div>
                            <a href="#">Eugene</a> ordered 2 copies of <a href="#">OEM license</a>
                            <span>14 minutes ago</span>
                        </div>
                    </li>
                    <li>
                        <i class="icon-heart text-danger"></i>
                        <div>
                            Your <a href="#">latest post</a> was liked by <a href="#">Audrey Mall</a>
                            <span>35 minutes ago</span>
                        </div>
                    </li>
                    <li>
                        <i class="icon-checkmark3 text-success"></i>
                        <div>
                            Mail server was updated. See <a href="#">changelog</a>
                            <span>About 2 hours ago</span>
                        </div>
                    </li>
                    <li>
                        <i class="icon-paragraph-justify2 text-warning"></i>
                        <div>
                            There are <a href="#">6 new tasks</a> waiting for you. Don't forget!
                            <span>About 3 hours ago</span>
                        </div>
                    </li>
                </ul>
            </div>
        </li>



        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle">
                <i class="icon-grid"></i>
            </a>
            <div class="popup dropdown-menu dropdown-menu-right">
                <div class="popup-header">
                    <span>Tasks list</span>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Description</th>
                        <th>Category</th>
                        <th class="text-center">Priority</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><span class="status status-success item-before"></span> <a href="#">Frontpage fixes</a></td>
                        <td><span class="text-smaller text-semibold">Bugs</span></td>
                        <td class="text-center"><span class="label label-success">87%</span></td>
                    </tr>
                    <tr>
                        <td><span class="status status-danger item-before"></span> <a href="#">CSS compilation</a></td>
                        <td><span class="text-smaller text-semibold">Bugs</span></td>
                        <td class="text-center"><span class="label label-danger">18%</span></td>
                    </tr>
                    <tr>
                        <td><span class="status status-info item-before"></span> <a href="#">Responsive layout changes</a></td>
                        <td><span class="text-smaller text-semibold">Layout</span></td>
                        <td class="text-center"><span class="label label-info">52%</span></td>
                    </tr>
                    <tr>
                        <td><span class="status status-success item-before"></span> <a href="#">Add categories filter</a></td>
                        <td><span class="text-smaller text-semibold">Content</span></td>
                        <td class="text-center"><span class="label label-success">100%</span></td>
                    </tr>
                    <tr>
                        <td><span class="status status-success item-before"></span> <a href="#">Media grid padding issue</a></td>
                        <td><span class="text-smaller text-semibold">Bugs</span></td>
                        <td class="text-center"><span class="label label-success">100%</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </li>

        <li class="user dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo theme_url('images/demo/users/putu.png');?>
" alt="">
                <span>I Putu Sudarma</span>
                <i class="caret"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right icons-right">
                <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                <li><a href="#"><i class="icon-question4"></i> Help</a></li>
                <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                <li><a href="#"><i class="icon-exit"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
</div>
<!-- /navbar -->


<!-- Page container -->
<div class="page-container">


    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-content">

            <!-- User dropdown -->
            <div class="user-menu dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo theme_url('images/demo/users/putu.png');?>
" alt="">
                    <div class="user-info">
                        I Putu Sudarma <span>Admin</span>
                    </div>
                </a>

            </div>
            <!-- /user dropdown -->


            <!-- Main navigation -->
            <ul class="navigation">
                <li><a href=""><span>Dashboard</span> <i class="icon-meter-fast"></i></a></li>
                <li>
                    <a href="#"><span>Proposal</span> <i class="icon-briefcase"></i></a>
                    <ul>
                        <li><a href="medika-master-product.html">Product</a></li>
                        <li><a href="medika-master-product-category.html">Product Category</a></li>
                        <li><a href="medika-master-product-unit.html">Product Unit</a></li>
                        <li><a href="medika-master-product-distribution.html">Product Distribution</a></li>
                        <li><a href="medika-master-product-conversion.html">Product Conversion</a></li>
                    </ul>
                </li>
                <li><a href="medika-master-supplier.html"><span>Master Supplier</span><i class="icon-users"></i></a></li>
                <li><a href="medika-master-customer.html"><span>Master Customer</span><i class="icon-users2"></i></a></li>
                <li><a href="medika-master-store.html"><span>Master Store</span><i class="icon-tag5"></i></a></li>
                <li>
                    <a href=""><span>Master Warehouse</span><i class="icon-home7"></i></a>
                    <ul>
                        <li><a href="medika-master-warehouse.html">Warehouse</a></li>
                        <li><a href="medika-master-warehouse-rack.html">Warehouse Rack</a></li>
                    </ul>
                </li>
                <li class="active"><a href="medika-purchase-order.html"><span>Purchase Order</span><i class="icon-cart3"></i></a></li>
                <li><a href="medika-retur-purchase-order.html"><span>Retur Purchase Order</span><i class="icon-basket"></i></a></li>
                <li><a href="medika-card-stock.html"><span>Card Stock</span><i class="icon-vcard"></i></a></li>
                <li><a href="medika-warehouse.html"><span>Warehouse</span><i class="icon-home7"></i></a></li>
                <li><a href="medika-proposal.html"><span>Proposal</span><i class="icon-file4"></i></a></li>
                <li><a href="medika-existing-proposal.html"><span>Existing Proposal</span><i class="icon-file4"></i></a></li>
                <li><a href="medika-hutang.html"><span>Hutang</span><i class="icon-credit"></i></a></li>
                <li><a href="medika-bayar-hutang.html"><span>Bayar Hutang</span><i class="icon-credit"></i></a></li>
                <li><a href="medika-sales-order.html"><span>Sales Order</span><i class="icon-coin"></i></a></li>
                <li><a href="medika-delivery-order.html"><span>Delivery Order</span><i class="icon-file6"></i></a></li>
                <li><a href="medika-delivery-order-done.html"><span>Delivery Order Done</span><i class="icon-file6"></i></a></li>
                <li><a href="medika-retur-sales-order.html"><span>Retur Sales Order</span><i class="icon-file6"></i></a></li>
                <li><a href="medika-piutang.html"><span>Piutang</span><i class="icon-credit"></i></a></li>
                <li><a href="medika-bayar-piutang.html"><span>Bayar Piutang</span><i class="icon-credit"></i></a></li>
                <li><a href="medika-mix-faktur.html"><span>Mix Faktur</span><i class="icon-file6"></i></a></li>
                <li><a href="medika-extract-faktur.html"><span>Extract Faktur</span><i class="icon-file6"></i></a></li>
                <li><a href="medika-retail.html"><span>Retail</span><i class="icon-coin"></i></a></li>

            </ul>
            <!-- /main navigation -->

        </div>
    </div>
    <!-- /sidebar -->


    <!-- Page content -->
    <div class="page-content">

        
    <!-- Default panel -->
    <?php echo js('function.js');?>

    <?php echo js('form/po.js');?>

    <div class="panel panel-default">

        <div class="panel-heading"><h6 class="panel-title">Purchase Order</h6></div>

        <div class="panel-body">
            <div class="block-inner">
                <h6 class="heading-hr">
                    <i class="icon-clipboard"></i> Purchase Info <small class="display-block">Informasi umum tentang proses purchasing</small>
                </h6>
            </div>
            <div class="row invoice-header">
                <div class="col-sm-6">
                    <h3><?php echo $_smarty_tpl->tpl_vars['principal']->value->name;?>
</h3>
                    <span><?php echo $_smarty_tpl->tpl_vars['principal']->value->address;?>
 - <?php echo $_smarty_tpl->tpl_vars['principal']->value->zipcode;?>

                        </br>
                        <?php echo $_smarty_tpl->tpl_vars['principal']->value->city;?>
 - <?php echo $_smarty_tpl->tpl_vars['principal']->value->state;?>

                        </br>
                        <?php echo $_smarty_tpl->tpl_vars['principal']->value->telp1;?>
 - <?php echo $_smarty_tpl->tpl_vars['principal']->value->telp1;?>

                        </br>
                        <?php echo $_smarty_tpl->tpl_vars['principal']->value->email;?>

                    </span>
                </div>

                <div class="col-sm-6">
                    <ul class="invoice-details">
                        <li>Invoice # <strong class="text-danger"><?php echo $_smarty_tpl->tpl_vars['cache']->value['value']['invoice_number'];?>
</strong></li>
                        <li>Date of Invoice: <strong><?php echo $_smarty_tpl->tpl_vars['cache']->value['value']['date'];?>
</strong></li>
                        <li>Due Date: <strong><?php echo $_smarty_tpl->tpl_vars['cache']->value['value']['due_date'];?>
</strong></li>
                        <li class="invoice-status text-right">
                            <a href="<?php echo base_url('purchase-order/delete');?>
"  class=" button btn btn-danger"><i class="icon-eject"></i>New Purchase Order</a>
                        </li>
                    </ul>
                </div>
            </div>

            <hr>

            <!-- Callout -->
            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="callout callout-danger fade in">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                </div>
            <?php }?>
            <!-- /callout -->

            <form action="<?php echo base_url('purchase-order/detail');?>
" role="form" method="post">
                <div class="form-group">
                    <div class="row">

                        <div class="col-md-4">
                            <label>Product:</label>
                            <?php echo '<script'; ?>
 type="text/javascript">
                                var product_storage = <?php echo json_encode($_smarty_tpl->tpl_vars['product_storage']->value);?>
;
                            <?php echo '</script'; ?>
>
                            <?php echo form_dropdown('id_product_select',$_smarty_tpl->tpl_vars['products']->value,set_value('id_product'),'data-placeholder="Product" class="select-full" id="product-id-select" onchange="leaveDropdownProduct(this,product_storage,\'id_product\')"');?>

                            <?php if (form_error('id_product')) {?>
                                <span class="label label-block label-danger text-left"><?php echo form_error('id_product');?>
</span>
                            <?php }?>
                            <input type="hidden" name="id_product" id="product-id" value="<?php echo set_value('id_product');?>
">
                        </div>
                        <div class="col-md-4">
                            <label>Barcode:</label>
                            <?php echo form_input('barcode',set_value('barcode'),'class="form-control" placeholder="Type or scan barcode" id="product-barcode" autofocus onblur="leaveTextBarcode(this,product_storage,\'barcode\')"');?>

                        </div>
                        <div class="col-md-4">
                            <label>Name:</label>
                            <input type="hidden" name="unit" id="product-unit" value="<?php echo set_value('unit');?>
">
                            <h6 id="product-name"></h6>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4 <?php if (form_error('qty')) {?>has-warning<?php }?>">
                            <label>Qty:</label>
                            <input type="number" name="qty" value="<?php echo set_value('qty');?>
" class="form-control" placeholder="0" >
                            <?php if (form_error('qty')) {?>
                                <span class="label label-block label-danger text-left"><?php echo form_error('qty');?>
</span>
                            <?php }?>
                        </div>
                        <div class="col-md-4 <?php if (form_error('price')) {?>has-warning<?php }?>">
                            <label>Price:</label>
                            <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="text" name="price" value="<?php echo set_value('price');?>
" class="form-control" placeholder="0" >

                            </div>
                            <?php if (form_error('price')) {?>
                            <span class="label label-block label-danger text-left"><?php echo form_error('price');?>
</span>
                            <?php }?>
                        </div>
                        <div class="col-md-4 <?php if (form_error('discount_total')) {?>has-warning<?php }?>">
                            <label>Discount Total:</label>
                            <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="text" name="discount_total" value="<?php echo set_value('discount_total');?>
" class="form-control" placeholder="0" >
                            </div>
                            <?php if (form_error('discount_total')) {?>
                                <span class="label label-block label-danger text-left"><?php echo form_error('discount_total');?>
</span>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="form-actions text-right">
                    <input type="submit" value="Add" class="btn btn-success">
                </div>
            </form>
        </div><!-- /panel body -->


        <?php if (!empty($_smarty_tpl->tpl_vars['cache']->value['detail']['value'])) {?>
            <div class="table-responsive pre-scrollable">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Barcode</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Discount</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable(1, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['detail']['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['key']->value['barcode'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['key']->value['name_unit'];?>
</td>
                            <td  style="width:100px;">
                                <input type="number" id="qty-<?php echo $_smarty_tpl->tpl_vars['key']->value['id_product'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value['qty'];?>
" class="form-control" onkeypress="qtyKeyPress(<?php echo $_smarty_tpl->tpl_vars['key']->value['id_product'];?>
,'<?php echo base_url('purchase-order/detail/update');?>
')">
                            </td>
                            <td style="width:130px;">Rp <?php echo number_format($_smarty_tpl->tpl_vars['key']->value['price'],2,".",",");?>
</td>
                            <td style="width:130px;">Rp <?php echo number_format(($_smarty_tpl->tpl_vars['key']->value['qty']*$_smarty_tpl->tpl_vars['key']->value['price']),2,".",",");?>
</td>
                            <td style="width:130px;">Rp <?php echo number_format($_smarty_tpl->tpl_vars['key']->value['discount_total'],2,".",",");?>
</td>
                            <td style="width:130px;">Rp <?php echo number_format(($_smarty_tpl->tpl_vars['key']->value['qty']*$_smarty_tpl->tpl_vars['key']->value['price']-$_smarty_tpl->tpl_vars['key']->value['discount_total']),2,".",",");?>
</td>
                            <td style="width:90px;">

                                <div class="table-controls">
                                    <a class="btn btn-link btn-icon btn-xs tip" title="Update Qty" onclick="updateQty(<?php echo $_smarty_tpl->tpl_vars['key']->value['id_product'];?>
,'<?php echo base_url('purchase-order/detail/update');?>
')"><i class="icon-pencil3"></i></a>
                                    <a href="<?php echo base_url('purchase-order/detail/delete');?>
/<?php echo $_smarty_tpl->tpl_vars['key']->value['id_product'];?>
" class="btn btn-link btn-icon btn-xs tip" title="Hapus Data"><i class="icon-remove3"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable($_smarty_tpl->tpl_vars['val']->value+1, null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value+($_smarty_tpl->tpl_vars['key']->value['qty']*$_smarty_tpl->tpl_vars['key']->value['price']-$_smarty_tpl->tpl_vars['key']->value['discount_total']), null, 0);?>

                    <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php }?>

        <form action="<?php echo base_url('purchase-order/save');?>
" role="form" method="post" enctype="multipart/form-data">

            <div class="panel-body">

                <div class="row invoice-payment">
                    <div class="col-sm-7">

                    </div>

                    <div class="col-sm-2 text-right">
                        <p><h6>Total:</h6></p>
                    </div>
                    <div class="col-sm-2 text-right">
                        <p><h6><strong>Rp <?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2,".",",");?>
</strong></h6></p>

                        <input type="hidden" name="total" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" >
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4 <?php if (form_error('discount_price')) {?>has-warning<?php }?>">
                            <label>Discount:</label>
                            <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="text" name="discount_price" value="<?php echo set_value('discount_price',$_smarty_tpl->tpl_vars['cache']->value['value']['discount_price']);?>
" class="form-control" placeholder="0" >

                            </div>
                            <?php if (form_error('discount_price')) {?>
                                <span class="label label-block label-danger text-left"><?php echo form_error('discount_price');?>
</span>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4 <?php if (form_error('dpp')) {?>has-warning<?php }?>">
                            <label>DPP:</label>
                            <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="text" name="dpp" value="<?php echo set_value('dpp',$_smarty_tpl->tpl_vars['cache']->value['value']['dpp']);?>
" class="form-control" placeholder="0" >

                            </div>
                            <?php if (form_error('dpp')) {?>
                                <span class="label label-block label-danger text-left"><?php echo form_error('dpp');?>
</span>
                            <?php }?>
                        </div>
                        <div class="col-md-4 <?php if (form_error('ppn')) {?>has-warning<?php }?>">
                            <label>PPN:</label>
                            <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="text" name="ppn" value="<?php echo set_value('ppn',$_smarty_tpl->tpl_vars['cache']->value['value']['ppn']);?>
" class="form-control" placeholder="0" >

                            </div>
                            <?php if (form_error('ppn')) {?>
                                <span class="label label-block label-danger text-left"><?php echo form_error('ppn');?>
</span>
                            <?php }?>
                        </div>
                        <div class="col-md-4 <?php if (form_error('grand_total')) {?>has-warning<?php }?>">
                            <label>Grand Total:</label>
                            <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="text" name="grand_total" value="<?php echo set_value('grand_total',$_smarty_tpl->tpl_vars['cache']->value['value']['grand_total']);?>
" class="form-control" placeholder="0">

                            </div>
                            <?php if (form_error('grand_total')) {?>
                                <span class="label label-block label-danger text-left"><?php echo form_error('grand_total');?>
</span>
                            <?php }?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Upload screenshot:</label>
                            <input type="file" name="file" class="styled form-control" id="report-screenshot">
                            <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                        </div>
                    </div>
                </div>
                <div class="form-actions text-right">
                    <button type="submit" name="save" value="Save" class="btn btn-success"><i class="icon-checkmark"></i> Process</button>
                    
                </div>
            </div><!-- /panel body -->
        </form>

            
                
                
            
        


        <!-- Footer -->
        <div class="footer clearfix">
            <div class="pull-left">&copy; 2015. Copyrights <a href="">Nanomites</a></div>
            <div class="pull-right icons-group">
                <a href="#"><i class="icon-arrow-up5"></i></a>
            </div>
        </div>
        <!-- /footer -->


    </div>
    <!-- /page content -->

</div>
<!-- /content -->

</body>
</html><?php }} ?>
