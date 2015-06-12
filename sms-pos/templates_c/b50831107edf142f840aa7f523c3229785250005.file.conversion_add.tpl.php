<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-28 08:29:47
         compiled from "/var/www/sms-pos/application/modules/product_conversion/views/conversion_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3822220495538808c8a4394-43898444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b50831107edf142f840aa7f523c3229785250005' => 
    array (
      0 => '/var/www/sms-pos/application/modules/product_conversion/views/conversion_add.tpl',
      1 => 1432709321,
      2 => 'file',
    ),
    'fff4798455c3e7183d6e4c124fc2bab3741f8371' => 
    array (
      0 => '/var/www/sms-pos/application/master.tpl',
      1 => 1432797962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3822220495538808c8a4394-43898444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5538808ca22d85_28239982',
  'variables' => 
  array (
    'menu' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5538808ca22d85_28239982')) {function content_5538808ca22d85_28239982($_smarty_tpl) {?><!DOCTYPE html>
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
    <?php echo '<script'; ?>
 type="text/javascript"
            src="<?php echo theme_url();?>
ajax.googleapis.com/ajax/libs/jquery/1.10.1/jqClock.min.js"><?php echo '</script'; ?>
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
"></i>
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
    <?php echo js('form/custom.js');?>

    <div class="panel panel-default">

        <div class="panel-heading"><h6 class="panel-title">Product Conversion</h6></div>

        <div class="panel-body">
            <div class="block-inner">
                <h6 class="heading-hr">
                    <i class="icon-clipboard"></i> Product Conversion
                    <small class="display-block">Informasi umum tentang Product Conversion</small>
                </h6>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><h6 class="panel-title">Product Conversion</h6></div>
                    <div class="panel-body">
                        <form action="<?php echo base_url('product-conversion/save');?>
" role="form" method="post">
                            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                                <div class="callout callout-danger fade in">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                                </div>
                            <?php }?>
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
                                                <input type="number" value="<?php echo set_value('qty');?>
" class="form-control"
                                                       name="qty" id="qty"
                                                       onblur="inputQty(this.value,<?php echo $_smarty_tpl->tpl_vars['product']->value->value;?>
)"
                                                       placeholder="0" autofocus>
                                            </div>
                                            <input type="hidden" name="id_product" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <input type="submit" class="btn btn-block btn-success" value="Submit">
                            </div>
                        </form>
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
                                    <td class="text-right" id="result-stock"><?php echo $_smarty_tpl->tpl_vars['product_conversion']->value->stock;?>
</td>
                                </tr>
                                <tr>
                                    <th>Stok Tambahan:</th>
                                    <td class="text-right" id="result-qty"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


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
    <div style="display: none;">

        
    </div>
    <?php echo js('form/custom.js');?>

</div>
<!-- /content -->

</body>
</html><?php }} ?>
