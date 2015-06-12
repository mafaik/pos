<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-28 06:06:02
         compiled from "/var/www/sms-pos/application/modules/Credit/views/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135180974055371c5f929c56-63041865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e7b7fd832f89555af36a837ddb30aa6b8c074f8' => 
    array (
      0 => '/var/www/sms-pos/application/modules/Credit/views/detail.tpl',
      1 => 1432793158,
      2 => 'file',
    ),
    'fff4798455c3e7183d6e4c124fc2bab3741f8371' => 
    array (
      0 => '/var/www/sms-pos/application/master.tpl',
      1 => 1432724228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135180974055371c5f929c56-63041865',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55371c5fae5de3_42077233',
  'variables' => 
  array (
    'menu' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55371c5fae5de3_42077233')) {function content_55371c5fae5de3_42077233($_smarty_tpl) {?><!DOCTYPE html>
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

<body >

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

        
        <div class="panel panel-default">

            <div class="panel-heading"><h6 class="panel-title">Hutang</h6></div>

            <div class="panel-body"> 

                <div class="row invoice-header">
                    <div class="col-sm-6">
                        <h3><?php echo $_smarty_tpl->tpl_vars['po']->value->name;?>
</h3>
                    <span><?php echo $_smarty_tpl->tpl_vars['po']->value->address;?>
 - <?php echo $_smarty_tpl->tpl_vars['po']->value->zipcode;?>

                        </br>
                        <?php echo $_smarty_tpl->tpl_vars['po']->value->city;?>
 - <?php echo $_smarty_tpl->tpl_vars['po']->value->state;?>

                        </br>
                        <?php echo $_smarty_tpl->tpl_vars['po']->value->telp1;?>
 - <?php echo $_smarty_tpl->tpl_vars['po']->value->telp1;?>

                        </br>
                        <?php echo $_smarty_tpl->tpl_vars['po']->value->email;?>

                    </span>
                    </div>

                    <div class="col-sm-3 pull-right">
                        <ul>
                            <li>No Faktur # <strong class="text-danger pull-right"><?php echo $_smarty_tpl->tpl_vars['po']->value->id_purchase_order;?>
</strong></li>
                            <li>Tanggal Nota Transaksi : <strong class="pull-right"><?php echo $_smarty_tpl->tpl_vars['po']->value->date;?>
</strong></li>
                            <li>Tanggal Jatuh Tempo: <strong class="pull-right"><?php echo $_smarty_tpl->tpl_vars['po']->value->due_date;?>
</strong></li>
                        </ul>
                    </div>
                </div>
            </div><!-- /panel body -->

            <div class="table-responsive pre-scrollable">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Tanggal Penarikan</th>
                        <th>Staff</th>
                        <th>Jumlah Bayar</th>
                        <th>Type Pembayaran</th>
                        <th>No Resi</th>
                        <th>Bukti Pembayaran</th>
                        <th>Status Pembayaran</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if ($_smarty_tpl->tpl_vars['credit']->value) {?>
                        <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable(0, null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable(1, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['credit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>

                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value->date;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value->date_withdrawal;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value->name;?>
</td>
                                <td>Rp <?php echo number_format($_smarty_tpl->tpl_vars['key']->value->amount,0);?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value->payment_type;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value->resi_number;?>
</td>
                                <td>
                                    <div class="table-controls">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['key']->value->file;?>
"
                                           class="btn btn-link btn-icon btn-xs tip" title="Lihat Bukti Pembayaran">
                                            <i class="icon-picassa"></i>
                                        </a>
                                        <?php if ($_smarty_tpl->tpl_vars['key']->value->status=="0") {?>
                                            <a href="<?php echo base_url('credit/paid');?>
/<?php echo $_smarty_tpl->tpl_vars['key']->value->id_credit;?>
"
                                               class="btn btn-link btn-icon btn-xs tip" title="Ubah Status">
                                                <i class="icon-coin"></i>
                                            </a>
                                        <?php }?>
                                    </div>
                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['key']->value->status=="1") {?>
                                        Terbayar
                                    <?php } else { ?>
                                        Belum Terbayar
                                    <?php }?>
                                </td>
                            </tr>
                            <?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable($_smarty_tpl->tpl_vars['val']->value+1, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value+($_smarty_tpl->tpl_vars['key']->value->amount), null, 0);?>
                        <?php } ?>
                    <?php }?>

                    </tbody>
                </table>
            </div>

            <div class="panel-body">

                <div class="col-sm-6">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>Total Tagihan:</th>
                            <td class="text-right">Rp <?php echo number_format($_smarty_tpl->tpl_vars['po']->value->grand_total,0);?>
</td>
                        </tr>
                        <tr>
                            <th>Total Bayar:</th>
                            <td class="text-right">Rp <?php echo number_format($_smarty_tpl->tpl_vars['po']->value->paid,0);?>
</td>
                        </tr>
                        <tr>
                            <th>Sisa Hutang:</th>
                            <td class="text-right"><h6>Rp <?php echo number_format(($_smarty_tpl->tpl_vars['po']->value->grand_total-$_smarty_tpl->tpl_vars['po']->value->paid),0);?>
</h6></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                
                


            </div>


        </div><!-- /default panel -->



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
