<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-01 06:18:00
         compiled from "/var/www/sms-pos/application/modules/purchase_order/views/po_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6338738805530ecdd0a61e9-92077084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56b853571cd44e5e829b3c8f12d2f9f33183a271' => 
    array (
      0 => '/var/www/sms-pos/application/modules/purchase_order/views/po_detail.tpl',
      1 => 1430461078,
      2 => 'file',
    ),
    'fff4798455c3e7183d6e4c124fc2bab3741f8371' => 
    array (
      0 => '/var/www/sms-pos/application/master.tpl',
      1 => 1429430584,
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
    <?php echo '<script'; ?>
 type="text/javascript">
        var data_storage = <?php echo json_encode($_smarty_tpl->tpl_vars['product_storage']->value);?>
;
    <?php echo '</script'; ?>
>
    <?php echo js('function.js');?>

    <?php echo js('form/custom.js');?>

    <div class="panel panel-default">

        <div class="panel-heading"><h6 class="panel-title">Purchase Order</h6></div>

        <div class="panel-body">
            <div class="block-inner">
                <h6 class="heading-hr">
                    <i class="icon-clipboard"></i> Purchase Info
                    <small class="display-block">Informasi umum tentang proses purchasing</small>
                </h6>
            </div>
            <div class="row invoice-header">
                <div class="col-sm-4">
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

                <div class="col-sm-4">
                    <ul class="invoice-details">
                        <li>NPWP <strong><?php echo $_smarty_tpl->tpl_vars['principal']->value->npwp;?>
</strong></li>
                        <li>SIUP <strong><?php echo $_smarty_tpl->tpl_vars['principal']->value->siup;?>
</strong></li>
                        <li>PBF <strong><?php echo $_smarty_tpl->tpl_vars['principal']->value->pbf;?>
</strong></li>
                        <li>PBAK <strong><?php echo $_smarty_tpl->tpl_vars['principal']->value->pbak;?>
</strong></li>
                        <li>FAK <strong><?php echo $_smarty_tpl->tpl_vars['principal']->value->fak;?>
</strong></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="invoice-details">
                        <li>No Faktur # <strong class="text-danger"><?php echo $_smarty_tpl->tpl_vars['cache']->value['value']['invoice_number'];?>
</strong></li>
                        <li>Tanggal Nota Transaksi: <strong><?php echo $_smarty_tpl->tpl_vars['cache']->value['value']['date'];?>
</strong></li>
                        <li>Jatuh Tempo Pembayaran: <strong><?php echo $_smarty_tpl->tpl_vars['cache']->value['value']['due_date'];?>
</strong></li>
                        <li class="invoice-status text-right list-unstyled">
                            <a href="<?php echo base_url('purchase-order/delete');?>
" class=" button btn btn-danger">
                                <i class="icon-eject"></i>New Purchase Order</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Callout -->
            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="callout callout-danger fade in">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                </div>
            <?php }?>
            <!-- /callout -->

            <div class="row">
                <div class="col-md-4">
                    <form action="<?php echo base_url('purchase-order/detail');?>
" role="form" method="post">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-4 control-label">Barcode: </label>

                                <div class="col-md-8">
                                    <input type="text" name="barcode" value="<?php echo set_value('barcode');?>
" id="input-barcode"
                                           class="form-control" placeholder="Type or scan barcode"
                                           autofocus onblur="barcodeParam(this)">
                                    <input type="hidden" name="id_product" value="<?php echo set_value('id_product');?>
"
                                           id="input-id_product">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-4 control-label">Qty: </label>

                                <div class="col-md-4 <?php if (form_error('qty')) {?>has-warning<?php }?>">
                                    <input type="number" name="qty" value="<?php echo set_value('qty');?>
" id="input-qty"
                                           class="form-control" placeholder="0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-4 control-label">Harga Beli: </label>

                                <div class="col-md-7 <?php if (form_error('price')) {?>has-warning<?php }?>">
                                    <div class="input-group">
                                        <span class="input-group-addon">Rp</span>
                                        <input type="number" name="price" value="<?php echo set_value('price');?>
"
                                               class="form-control" placeholder="0">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-4 control-label">Diskon: </label>

                                <div class="col-md-7 <?php if (form_error('discount_total')) {?>has-warning<?php }?>">
                                    <div class="input-group">
                                        <span class="input-group-addon">Rp</span>
                                        <input type="number" name="discount_total" value="<?php echo set_value('discount_total');?>
"
                                               class="form-control" placeholder="0">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <input type="submit" class="btn btn-block btn-success" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="col-md-2">
                    <div class="col-sm-12">
                        <a data-toggle="modal" role="button" href="#default-modal"
                           class="button btn btn-info center-block">Cari
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nama Produk</label>
                            <h6 id="text-name"></h6>
                        </div>
                        <div class="col-md-3">
                            <label>Kategori:</label>
                            <h6 id="text-category"></h6>
                        </div>
                        <div class="col-md-3">
                            <label>Merek</label>
                            <h6 id="text-brand"></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Satuan:</label>
                            <h6 id="text-unit"></h6>
                        </div>
                        <div class="col-md-3">
                            <label>Isi Satuan:</label>
                            <h6 id="text-value"></h6>
                        </div>
                        <div class="col-md-3">
                            <label>Ukuran</label>
                            <h6 id="text-size"></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /panel body -->


        <?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
            <div class="table-responsive pre-scrollable">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Barcode</th>
                        <th>Nama Produk</th>
                        <th>Merek</th>
                        <th>Satuan / isi</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Total</th>
                        <th>Diskon</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable(1, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['key']->value['barcode'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['key']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['key']->value['brand'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['key']->value['unit'];?>
 / <?php echo $_smarty_tpl->tpl_vars['key']->value['value'];?>
</td>
                            <td style="width:100px;">
                                <input type="number" id="qty-<?php echo $_smarty_tpl->tpl_vars['key']->value['id_product'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value['qty'];?>
"
                                       class="form-control tip" title="enter untuk update qty"
                                       onkeypress="qtyKeyPress(<?php echo $_smarty_tpl->tpl_vars['key']->value['id_product'];?>
,
                                               '<?php echo base_url('purchase-order/detail/update');?>
')">
                            </td>
                            <td style="width:130px;" class="text-right">
                                Rp <?php echo number_format($_smarty_tpl->tpl_vars['key']->value['price'],0);?>

                            </td>
                            <td style="width:130px;" class="text-right">
                                Rp <?php echo number_format(($_smarty_tpl->tpl_vars['key']->value['qty']*$_smarty_tpl->tpl_vars['key']->value['price']),0);?>

                            </td>
                            <td style="width:130px;" class="text-right">
                                Rp <?php echo number_format($_smarty_tpl->tpl_vars['key']->value['discount_total'],0);?>

                            </td>
                            <td style="width:130px;" class="text-right">
                                Rp <?php echo number_format(($_smarty_tpl->tpl_vars['key']->value['qty']*$_smarty_tpl->tpl_vars['key']->value['price']-$_smarty_tpl->tpl_vars['key']->value['discount_total']),0);?>

                            </td>
                            <td style="width:90px;">

                                <div class="table-controls">
                                    <a class="btn btn-link btn-icon btn-xs tip" title="Update Qty"
                                       onclick="updateQty(<?php echo $_smarty_tpl->tpl_vars['key']->value['id_product'];?>
,
                                               '<?php echo base_url('purchase-order/detail/update');?>
')">
                                        <i class="icon-pencil3"></i></a>
                                    <a href="<?php echo base_url('purchase-order/detail/delete');?>
/<?php echo $_smarty_tpl->tpl_vars['key']->value['id_product'];?>
"
                                       class="btn btn-link btn-icon btn-xs tip" title="Hapus Data">
                                        <i class="icon-remove3"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable($_smarty_tpl->tpl_vars['val']->value+1, null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value+($_smarty_tpl->tpl_vars['key']->value['qty']*$_smarty_tpl->tpl_vars['key']->value['price']-$_smarty_tpl->tpl_vars['key']->value['discount_total']), null, 0);?>

                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <form action="<?php echo base_url('purchase-order/save');?>
" role="form" method="post" enctype="multipart/form-data"
                  onsubmit="return confirm('Process Data');">
                <div class="panel-body">

                    <div class="row invoice-payment">

                        <div class="col-sm-4 pull-right">
                            <h6>Summary:</h6>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th>Total:</th>
                                    <td class="text-right">Rp
                                        <span id="sum-total-text"><strong>Rp <?php echo number_format($_smarty_tpl->tpl_vars['total']->value,0);?>
</strong> </span>
                                    </td>
                                    <input type="hidden" name="total" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
">
                                </tr>
                                <tr>
                                    <th>Diskon:</th>
                                    <td class="text-right <?php if (form_error('discount_price')) {?>has-warning<?php }?>"
                                        style="max-width: 135px;">
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp</span>

                                            <input type="number" name="discount_price" value="<?php echo set_value('discount_price');?>
"
                                                   class="form-control" placeholder="0"
                                                   id="input-discount_price">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>DPP:</th>
                                    <td class="text-right <?php if (form_error('dpp')) {?>has-warning<?php }?>"
                                        style="max-width: 135px;">
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="number" name="dpp" value="<?php echo set_value('dpp');?>
"
                                                   class="form-control" placeholder="0"
                                                   id="input-dpp">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PPN:</th>
                                    <td class="text-right <?php if (form_error('ppn')) {?>has-warning<?php }?>"
                                        style="max-width: 135px;">
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="number" name="ppn" value="<?php echo set_value('ppn');?>
"
                                                   class="form-control" placeholder="0"
                                                   id="input-ppn">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Grand Total:</th>
                                    <td class="text-right <?php if (form_error('grand_total')) {?>has-warning<?php }?>"
                                        style="max-width: 135px;">
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="number" name="grand_total" value="<?php echo set_value('grand_total');?>
"
                                                   class="form-control" placeholder="0"
                                                   id="input-grand_total">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Bukti Purchase Order:</th>
                                    <td class="text-right text-danger">
                                        <input type="file" name="file" class="styled form-control" id="report-screenshot">
                                        <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="btn-group right-box">
                                <button type="submit" name="save" class="btn block full-width btn-success"><i class="icon-checkmark">
                                    </i> Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /panel body -->
            </form>
        <?php }?>

        
        
        
        
    </div>
    <!-- /default panel -->


    <!-- Default modal -->
    <div id="default-modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Daftar Product</h4>
                </div>

                <!-- New invoice template -->
                <?php if ($_smarty_tpl->tpl_vars['product_storage']->value) {?>
                    <div class="panel panel-default">
                        <div class="datatable-tools">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Barcode</th>
                                    <th>Name</th>
                                    <th>Kategori</th>
                                    <th>Satuan</th>
                                    <th>Isi</th>
                                    <th>Merek</th>
                                    <th>Ukuran</th>
                                    <th>Stok</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $_smarty_tpl->tpl_vars['products'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_storage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products']->key => $_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->tpl_vars['products']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['products']->value['barcode'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['products']->value['name'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['products']->value['category'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['products']->value['unit'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['products']->value['value'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['products']->value['brand'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['products']->value['size'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['products']->value['stock'];?>
</td>
                                        <td>
                                            <a href="#" onclick="idParam(<?php echo $_smarty_tpl->tpl_vars['products']->value['id_product'];?>
)"
                                               class="button btn btn-info  btn-icon" data-dismiss="modal">
                                                <i class="icon-cart-add"></i>
                                            </a>

                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php }?>
                <!-- /new invoice template -->
            </div>
        </div>
    </div>
    <!-- /default modal -->


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
