<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-22 01:50:22
         compiled from "/var/www/sms-pos/application/modules/product_conversion/views/conversion_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3822220495538808c8a4394-43898444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b50831107edf142f840aa7f523c3229785250005' => 
    array (
      0 => '/var/www/sms-pos/application/modules/product_conversion/views/conversion_add.tpl',
      1 => 1431929889,
      2 => 'file',
    ),
    'fff4798455c3e7183d6e4c124fc2bab3741f8371' => 
    array (
      0 => '/var/www/sms-pos/application/master.tpl',
      1 => 1432259300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3822220495538808c8a4394-43898444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5538808ca22d85_28239982',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5538808ca22d85_28239982')) {function content_5538808ca22d85_28239982($_smarty_tpl) {?><!DOCTYPE html>
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
    <?php echo js('form/custom.js');?>

    <div class="row">
        <form action="<?php echo base_url('product-conversion/save');?>
" role="form" method="post">
            <div class="col-md-12">
                <div class="block-inner">
                    <h6 class="heading-hr">
                        <i class="icon-clipboard"></i> Product Conversion
                        <small class="display-block">Informasi umum tentang proses purchasing</small>
                    </h6>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                    <div class="callout callout-danger fade in">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                    </div>
                <?php }?>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><h6 class="panel-title">Product Conversion</h6></div>
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <h6>Konversi Dar Produk:</h6>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th>Barcode:</th>
                                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['product']->value->barcode;?>
</td>
                                </tr>
                                <tr>
                                    <th>Nama Produk:</th>
                                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</td>
                                </tr>
                                <tr>
                                    <th>Merek:</th>
                                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['product']->value->brand;?>
</td>
                                </tr>
                                <tr>
                                    <th>Satuan / Isi:</th>
                                    <td class="text-right">
                                        <?php echo $_smarty_tpl->tpl_vars['product']->value->unit;?>
 / <?php echo $_smarty_tpl->tpl_vars['product']->value->value;?>

                                    </td>
                                </tr>
                                <tr>
                                    <th>Stok:</th>
                                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['product']->value->stock;?>
</td>
                                </tr>
                                <tr>
                                    <th>Qty:</th>
                                    <td class="text-right">
                                        <div class="col-sm-8 pull-right <?php if (form_error('qty')) {?>has-warning<?php }?>">
                                            <input type="hidden" name="id_product" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">
                                            <input type="number" value="<?php echo set_value('qty');?>
" class="form-control"
                                                   autofocus="autofocus" name="qty" id="qty"
                                                   onblur="inputQty(this.value,<?php echo $_smarty_tpl->tpl_vars['product']->value->value;?>
)"
                                                   placeholder="0">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">

                    <div class="panel-heading"><h6 class="panel-title">Konversi Ke Produk</h6></div>
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <h6>Rincian Produk:</h6>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th>Barcode:</th>
                                    <td class="text-right" id="result-barcode"><?php echo $_smarty_tpl->tpl_vars['product_conversion']->value->barcode;?>
</td>
                                </tr>
                                <tr>
                                    <th>Nama Produk:</th>
                                    <td class="text-right" id="result-name"><?php echo $_smarty_tpl->tpl_vars['product_conversion']->value->name;?>
</td>
                                </tr>
                                <tr>
                                    <th>Merek:</th>
                                    <td class="text-right" id="result-brand"><?php echo $_smarty_tpl->tpl_vars['product_conversion']->value->brand;?>
</td>
                                </tr>
                                <tr>
                                    <th>Satuan / Isi:</th>
                                    <td class="text-right" id="result-unit">
                                        <?php echo $_smarty_tpl->tpl_vars['product_conversion']->value->unit;?>
/<?php echo $_smarty_tpl->tpl_vars['product_conversion']->value->value;?>

                                    </td>
                                </tr>
                                <tr>
                                    <th>Stok:</th>
                                    <td class="text-right"  id="result-stock"><?php echo $_smarty_tpl->tpl_vars['product_conversion']->value->stock;?>
</td>
                                </tr>
                                <tr>
                                    <th>Stok Tambahan:</th>
                                    <td class="text-right"  id="result-qty"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12">
                <input type="submit" class="btn btn-block btn-success" value="Submit">
            </div>
        </form>
    </div>

        <?php echo js('form/custom.js');?>


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
