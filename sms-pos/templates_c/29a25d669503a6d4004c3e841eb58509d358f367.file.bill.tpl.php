<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-04 12:11:41
         compiled from "/var/www/sms-pos/application/modules/Credit/views/bill.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7882909825537075fa95db0-23981793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29a25d669503a6d4004c3e841eb58509d358f367' => 
    array (
      0 => '/var/www/sms-pos/application/modules/Credit/views/bill.tpl',
      1 => 1432793036,
      2 => 'file',
    ),
    'fff4798455c3e7183d6e4c124fc2bab3741f8371' => 
    array (
      0 => '/var/www/sms-pos/application/master.tpl',
      1 => 1433163876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7882909825537075fa95db0-23981793',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5537075fbecdd1_20270999',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5537075fbecdd1_20270999')) {function content_5537075fbecdd1_20270999($_smarty_tpl) {?><!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="<?php echo theme_url();?>
css/print.css" media="print" />
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
            <?php echo userdata('menu');?>

            
                
                    
                        
                            
                            
                        
                        
                            
                                
                                    
                                        
                                            
                                            
                                        
                                    
                                
                            
                        
                    
                
            
            <!-- /main navigation -->

        </div>
    </div>
    <!-- /sidebar -->


    <!-- Page content -->
    <div class="page-content">

        

    <!-- Default panel -->
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="callout callout-danger fade in">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
        </div>
    <?php }?>
    <div class="panel panel-default">
        <div class="panel-heading"><h6 class="panel-title">Pembayaran Hutang</h6></div>

        <div class="panel-body">

            <div class="block-inner">
                <h6 class="heading-hr">
                    <i class="icon-file4"></i> Info Hutang
                    <small class="display-block">Informasi umum tentang hutang</small>
                </h6>
            </div>
            <div class="col-sm-12">
                <h6>Rincian Hutang:</h6>

                <div class="table-responsive ">
                    <table class="table table-striped ">
                        <tbody>
                        <tr>
                            <th>No. Faktur:</th>
                            <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['po']->value->id_purchase_order;?>
</td>
                            <th>Total Bayar:</th>
                            <td class="text-right">Rp <?php echo number_format($_smarty_tpl->tpl_vars['po']->value->grand_total,0);?>
</td>
                            <th>Tanggal Transaksi:</th>
                            <td class="text-right text-danger"><?php echo $_smarty_tpl->tpl_vars['po']->value->date;?>
</td>
                        </tr>
                        <tr>
                            <th>Supplier:</th>
                            <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['po']->value->name;?>
</td>
                            <th>Belum Terbayar:</th>
                            <td class="text-right">Rp <?php echo number_format(($_smarty_tpl->tpl_vars['po']->value->grand_total-$_smarty_tpl->tpl_vars['po']->value->paid),0);?>
</td>
                            <th>Tanggal Jatuh Tempo:</th>
                            <td class="text-right text-danger"><?php echo $_smarty_tpl->tpl_vars['po']->value->due_date;?>
</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <form class="form-horizontal" method="post" role="form" action="<?php echo current_url();?>
" enctype="multipart/form-data">
            <div class="panel-body">
                <div class="block-inner">
                    <h6 class="heading-hr">
                        <i class="icon-pencil4"></i> Form Pembayaran Hutang
                        <small class="display-block">Lorem ipsum dolor sit amet centraur hutang</small>
                    </h6>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Jumlah Bayar:</label>

                    <div class="col-sm-4">
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input type="number" name="amount"
                                   value="<?php echo set_value('amount',($_smarty_tpl->tpl_vars['po']->value->grand_total-$_smarty_tpl->tpl_vars['po']->value->paid));?>
"
                                   class="form-control" placeholder="0">
                        </div>
                        <?php if (form_error('amount')) {?>
                            <span class="label label-block label-danger text-left"><?php echo form_error('amount');?>
</span>
                        <?php }?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Type:</label>

                    <div class="col-sm-4">
                        <div class="radio">
                            <label>
                                <?php echo form_radio('payment_type','tunai',true,'class="styled"');?>

                                Tunai
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <?php echo form_radio('payment_type','bg',false,'class="styled"');?>

                                Cek BG
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <?php echo form_radio('payment_type','transfer',false,'class="styled"');?>

                                Transfer
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Tanggal Penarikan:</label>

                    <div class="col-sm-4 <?php if (form_error('date_withdrawal')) {?>has-warning<?php }?>">
                        <?php echo form_input('date_withdrawal',set_value('date_withdrawal'),'class="datepicker-trigger form-control" data-mask="9999-99-99" placeholder"YYYY-MM-dd"');?>


                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">No. Referensi:</label>

                    <div class="col-sm-4">
                        <input type="text" name="resi_number" value="<?php echo set_value('resi_number');?>
"
                               class="form-control" placeholder="0">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Upload Bukti Pembayaran:</label>

                    <div class="col-sm-4">
                        <input type="file" name="file" class="styled">
                        <span class="help-block">Accepted formats: gif, jpg, png. Max file size 2Mb</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-block btn-success" value="Submit">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- /default panel -->

    <!-- /form components -->



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
