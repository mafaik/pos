<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-27 06:53:20
         compiled from "/var/www/sms-pos/application/modules/product_distribution/views/distribution.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10828895655373254ab2ba3-61494005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07b68e69c9c95b3f84ed39630a953c8bb1551e01' => 
    array (
      0 => '/var/www/sms-pos/application/modules/product_distribution/views/distribution.tpl',
      1 => 1432259747,
      2 => 'file',
    ),
    'fff4798455c3e7183d6e4c124fc2bab3741f8371' => 
    array (
      0 => '/var/www/sms-pos/application/master.tpl',
      1 => 1432706329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10828895655373254ab2ba3-61494005',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55373254ca85c4_56191035',
  'variables' => 
  array (
    'menu' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55373254ca85c4_56191035')) {function content_55373254ca85c4_56191035($_smarty_tpl) {?><!DOCTYPE html>
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
    <div class="panel panel-default">

        <div class="panel-heading"><h6 class="panel-title">Product Distribution</h6></div>

        <div class="panel-body">
            <div class="block-inner">
                <h6 class="heading-hr">
                    <i class="icon-clipboard"></i> Product Distribution
                    <small class="display-block">Informasi umum tentang Product Distribution</small>
                </h6>
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
                <div class="form-group">
                    <div class="col-sm-6">
                        <a class="btn btn-info"
                           tabindex="1" data-toggle="modal" role="button" href="#default-modal">Tambah Produk</a>
                    </div>
                </div>
            </div>
            <br>


        <?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
            <form action="<?php echo base_url('product-distribution/save');?>
" role="form" method="post"
                  onsubmit="return confirm('Process Data');">
                <div class="table-responsive pre-scrollable">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Satuan</th>
                            <th>Isi</th>
                            <th>Merek</th>
                            <th>Stok</th>
                            <th>Ukuran</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable(1, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
                            <tr>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['val']->value;?>

                                </td>

                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['barcode'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['unit'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['value'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['brand'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['stock'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['size'];?>
</td>
                                <td width="120px"> Rp <?php echo number_format($_smarty_tpl->tpl_vars['key']->value['sell_price'],0);?>
</td>
                                <td width="90px" class="<?php if ($_smarty_tpl->tpl_vars['key']->value['stock']<$_smarty_tpl->tpl_vars['key']->value['qty']) {?>has-warning<?php }?>">
                                    <input type="hidden" name="id_product[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value['id_product'];?>
">
                                    <input type="number" name="qty[]" value="<?php echo set_value('qty',$_smarty_tpl->tpl_vars['key']->value['qty']);?>
"
                                           class="form-control"
                                </td>
                                <td>
                                    <div class="table-controls">
                                        <a href="<?php echo base_url('product-distribution/detail/delete');?>
/<?php echo $_smarty_tpl->tpl_vars['key']->value['id_product'];?>
"
                                           class="btn btn-link btn-icon btn-xs tip" title="Hapus Data">
                                            <i class="icon-remove3"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable($_smarty_tpl->tpl_vars['val']->value+1, null, 0);?>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="form-group">
                    <div class="form-actions text-right">
                        <button type="submit" name="save" value="Save" class="btn btn-success"><i
                                    class="icon-checkmark">
                            </i> Process
                        </button>
                        
                    </div>
                </div>
            </form>
        <?php }?>
        </div>
    </div>
    
    
    
    


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
                                    <th>Kategory</th>
                                    <th>Satuan</th>
                                    <th>Isi</th>
                                    <th>Merek</th>
                                    <th>Stok</th>
                                    <th>Ukuran</th>
                                    <th>Harga</th>
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
                                        <td><?php echo $_smarty_tpl->tpl_vars['products']->value['stock'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['products']->value['size'];?>
</td>
                                        <td>Rp <?php echo number_format($_smarty_tpl->tpl_vars['products']->value['sell_price'],0);?>
</td>
                                        <td>
                                            <a
                                                    class="button btn btn-info  btn-icon"
                                                    onclick="javascript:$('#id-product').val(<?php echo $_smarty_tpl->tpl_vars['products']->value['id_product'];?>
);"
                                                    data-toggle="modal" role="button"
                                                    href="#qty-modal" data-dismiss="modal">
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
    <div id="qty-modal" class="modal fade" tabindex="-2" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Masukkan Jumlah</h4>
                </div>

                <div class="panel panel-default">

                    <div class="panel-body">

                        <div class="col-md-12 ">

                            <form action="<?php echo base_url('product-distribution/detail/add');?>
" role="form" method="post">

                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Qty: </label>

                                        <div class="col-sm-6 <?php if (form_error('qty')) {?>has-warning<?php }?>">
                                            <input type="hidden" name="id_product" id="id-product" value="">
                                            <input type="number" value="<?php echo set_value('qty');?>
"
                                                   class="form-control"
                                                   name="qty" id="qty"
                                                   placeholder="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-block btn-success" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
