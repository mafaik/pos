<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-27 08:44:39
         compiled from "/var/www/sms-pos/application/modules/purchase_order/views/po.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20319457125530dd2fcb4f06-62660745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1660ae057ce9b2ec808274a0ccebbc1c32b78498' => 
    array (
      0 => '/var/www/sms-pos/application/modules/purchase_order/views/po.tpl',
      1 => 1432716066,
      2 => 'file',
    ),
    'fff4798455c3e7183d6e4c124fc2bab3741f8371' => 
    array (
      0 => '/var/www/sms-pos/application/master.tpl',
      1 => 1432706329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20319457125530dd2fcb4f06-62660745',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5530dd2fe0e039_94400138',
  'variables' => 
  array (
    'menu' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5530dd2fe0e039_94400138')) {function content_5530dd2fe0e039_94400138($_smarty_tpl) {?><!DOCTYPE html>
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
    <form action="<?php echo current_url();?>
" role="form" method="post">
        <div class="panel panel-default">

            <div class="panel-heading"><h6 class="panel-title">Purchase Order</h6></div>

            <div class="panel-body">
                <div class="block-inner">
                    <h6 class="heading-hr">
                        <i class="icon-clipboard"></i> Purchase Info <small class="display-block">Informasi umum tentang proses purchasing</small>
                    </h6>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 <?php if (form_error('id_principal')) {?>has-warning<?php }?>">
                            <label>Supplier / Principal:</label>
                            <?php echo form_dropdown('id_principal',$_smarty_tpl->tpl_vars['principals']->value,set_value('id_principal'),'data-placeholder="Supplier" class="select-full" tabindex="1" autofocus');?>

                            <?php if (form_error('id_principal')) {?>
                                  <span class="label label-block label-danger text-left"><?php echo form_error('id_principal');?>
</span>
                            <?php }?>
                        </div>
                        <div class="col-md-6 <?php if (form_error('invoice_number')) {?>has-warning<?php }?>">
                            <label>No Nota Pembelian:</label>
                            <?php echo form_input('invoice_number',set_value('invoice_number'),'class="form-control" placeholder="Invoice Number"');?>

                            <?php if (form_error('invoice_number')) {?>
                                <span class="label label-block label-danger text-left"><?php echo form_error('invoice_number');?>
</span>
                            <?php }?>

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 <?php if (form_error('date')) {?>has-warning<?php }?>">
                            <label>Tanggal Nota Pembelian:</label>
                            <?php echo form_input('date',set_value('date'),'class="datepicker-trigger form-control" data-mask="9999-99-99" placeholder"YYYY-MM-dd"');?>

                        </div>
                        <div class="col-md-6 <?php if (form_error('due_date')) {?>has-warning<?php }?>">
                            <label>Jatuh Tempo Pembayaran:</label>
                            <?php echo form_input('due_date',set_value('due_date'),'class="datepicker-trigger form-control" data-mask="9999-99-99" placeholder"YYYY-MM-dd"');?>

                        </div>
                    </div>
                </div>
                <div class="form-actions ">
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-block btn-success" value="Purchase Order">
                    </div>
                </div>
            </div><!-- /panel body -->
        </div><!-- /default panel -->
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

<?php echo '<script'; ?>
 type="text/javascript"
        src="<?php echo theme_url();?>
ajax.googleapis.com/ajax/libs/jquery/1.10.1/jqClock.min.js"><?php echo '</script'; ?>
>
<?php echo js('form/custom.js');?>

</body>
</html><?php }} ?>
