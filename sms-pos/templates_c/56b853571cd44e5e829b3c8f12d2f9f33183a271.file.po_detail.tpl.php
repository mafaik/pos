<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-26 10:03:04
         compiled from "/var/www/sms-pos/application/modules/purchase_order/views/po_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6338738805530ecdd0a61e9-92077084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56b853571cd44e5e829b3c8f12d2f9f33183a271' => 
    array (
      0 => '/var/www/sms-pos/application/modules/purchase_order/views/po_detail.tpl',
      1 => 1432264649,
      2 => 'file',
    ),
    'fff4798455c3e7183d6e4c124fc2bab3741f8371' => 
    array (
      0 => '/var/www/sms-pos/application/master.tpl',
      1 => 1432634561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6338738805530ecdd0a61e9-92077084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5530ecdd211b44_79182658',
  'variables' => 
  array (
    'menu' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5530ecdd211b44_79182658')) {function content_5530ecdd211b44_79182658($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <title>PT Medika Sejahtera</title>


    <?php echo css('bootstrap.min.css');?>

    <?php echo css('londinium-theme.css');?>

    <?php echo css('styles.css');?>

    <?php echo css('icons.css');?>

    <?php echo css('jqClock.css');?>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext"
          rel="stylesheet" type="text/css">

    <?php echo '<script'; ?>
 type="text/javascript"
            src="<?php echo theme_url();?>
ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript"
            src="<?php echo theme_url();?>
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
        <li>
            <a href="#" id="clock"></a>
        </li>
        <li>
            <a href="#"> <strong><?php echo userdata('name');?>
 / <?php echo userdata('name_group');?>
</strong></a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle icons-right" data-toggle="dropdown">
                <i class="icon-settings pull-right"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right icons-right">
                <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                <li><a href="<?php echo base_url('login/logout');?>
"><i class="icon-exit"></i> Logout</a></li>
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

            <!-- Main navigation -->
            <ul class="navigation">
                <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = userdata('menu'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                    <li>
                        <a href="<?php if (!$_smarty_tpl->tpl_vars['menu']->value['child']) {
echo base_url();
echo $_smarty_tpl->tpl_vars['menu']->value['url'];
} else { ?>#<?php }?>" <?php echo $_smarty_tpl->tpl_vars['menu']->value['attr'];?>
>
                            <span> <?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
</span>
                            <i class="<?php echo $_smarty_tpl->tpl_vars['menu']->value['icon'];?>
" ></i>
                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['menu']->value['child']) {?>
                            <ul class="icons-right">
                                <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
                                    <li>
                                        <a href="<?php echo base_url();
echo $_smarty_tpl->tpl_vars['child']->value['url'];?>
">
                                            <span><?php echo $_smarty_tpl->tpl_vars['child']->value['title'];?>
</span>
                                            <i class="<?php echo $_smarty_tpl->tpl_vars['child']->value['icon'];?>
" <?php echo $_smarty_tpl->tpl_vars['child']->value['attr'];?>
></i>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php }?>
                    </li>
                <?php } ?>
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
                        <li>No Nota # <strong class="text-danger"><?php echo $_smarty_tpl->tpl_vars['cache']->value['value']['invoice_number'];?>
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
                    <h5>Error Message</h5>

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
                                    <input type="hidden" name="id_product" value="<?php echo set_value('id_product');?>
"
                                           id="input-id_product">
                                    <input type="text" name="barcode" value="<?php echo set_value('barcode');?>
" id="input-barcode"
                                           class="form-control" placeholder="Scan barcode"
                                           autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-4 control-label">Qty: </label>

                                <div class="col-md-4 <?php if (form_error('qty')) {?>has-warning<?php }?>">
                                    <input type="number" name="qty" value="<?php echo set_value('qty');?>
" id="input-qty"
                                           class="form-control catcher" placeholder="0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-4 control-label">Harga Beli: </label>

                                <div class="col-md-7 <?php if (form_error('price')) {?>has-warning<?php }?>">
                                    <div class="input-group">
                                        <span class="input-group-addon">Rp</span>
                                        <input type="text" name="price"
                                               value="<?php echo set_value('price');?>
"
                                               class="form-control currency-format" placeholder="0">

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
                            <input type="submit" name="add_item" class="btn btn-block btn-success" value="Submit">
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
            <!-- /panel body -->
            <br>

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
                                       class="btn btn-link btn-icon btn-xs tip"
                                       onclick="return confirm('Hapus Item?')" title="Hapus Item">
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

            <br>

            <form action="<?php echo base_url('purchase-order/save');?>
" role="form" method="post" enctype="multipart/form-data"
                  onsubmit="return confirm('Process Data');">
                <div class="row invoice-payment">
                    <div class="col-sm-4 pull-right">
                        <h6>Summary:</h6>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Total:</th>
                                <td class="text-right">
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

                                        <input type="text" name="discount_price" value="<?php echo set_value('discount_price');?>
"
                                               class="form-control currency-format" placeholder="0"
                                               id="input-discount_price ">

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>DPP:</th>
                                <td class="text-right <?php if (form_error('dpp')) {?>has-warning<?php }?>"
                                    style="max-width: 135px;">
                                    <div class="input-group">
                                        <span class="input-group-addon">Rp</span>
                                        <input type="text" name="dpp" value="<?php echo set_value('dpp');?>
"
                                               class="form-control currency-format" placeholder="0"
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
                                        <input type="text" name="ppn" value="<?php echo set_value('ppn');?>
"
                                               class="form-control currency-format" placeholder="0"
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
                                        <input type="text" name="grand_total" value="<?php echo set_value('grand_total');?>
"
                                               class="form-control currency-format" placeholder="0"
                                               id="input-grand_total">

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Bukti Pembelian:</th>
                                <td class="text-right text-danger">
                                    <input type="file" name="file" class="styled form-control" id="report-screenshot">
                                    <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="btn-group right-box">
                            <button type="submit" name="save" value="save"
                                    class="btn block full-width btn-success"><i class="icon-checkmark">
                                </i> Checkout
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /panel body -->
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

<?php echo '<script'; ?>
 type="text/javascript"
        src="<?php echo theme_url();?>
ajax.googleapis.com/ajax/libs/jquery/1.10.1/jqClock.min.js"><?php echo '</script'; ?>
>
<?php echo js('form/custom.js');?>

</body>
</html><?php }} ?>
