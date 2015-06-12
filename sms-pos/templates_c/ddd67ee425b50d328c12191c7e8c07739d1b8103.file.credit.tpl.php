<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-01 13:07:38
         compiled from "/var/www/sms-pos/application/modules/Credit/views/credit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208807457555363f2177cd55-49751657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddd67ee425b50d328c12191c7e8c07739d1b8103' => 
    array (
      0 => '/var/www/sms-pos/application/modules/Credit/views/credit.tpl',
      1 => 1432793053,
      2 => 'file',
    ),
    'fff4798455c3e7183d6e4c124fc2bab3741f8371' => 
    array (
      0 => '/var/www/sms-pos/application/master.tpl',
      1 => 1433163876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208807457555363f2177cd55-49751657',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55363f2189a018_62519913',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55363f2189a018_62519913')) {function content_55363f2189a018_62519913($_smarty_tpl) {?><!DOCTYPE html>
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

        

    <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
        <div class="callout callout-success fade in">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <p><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</p>
        </div>
    <?php }?>
        <div class="panel panel-default">

            <div class="panel-heading"><h6 class="panel-title">Hutang</h6></div>

            <div class="panel-body">
                <div class="block-inner">
                    <h6 class="heading-hr">
                        <i class="icon-coin"></i> Hutang Info <small class="display-block">Informasi umum tentang proposal</small>
                    </h6>
                </div>

                <form action="<?php echo current_url();?>
" method="post" role="form">
                    <div class="form-group">
                        <label>Hutang:</label>
                        <div class="row">
                            <div class="col-md-4">
                                <?php echo form_dropdown('date',$_smarty_tpl->tpl_vars['date']->value,set_value('date'),'data-placeholder="Date" class="select-full" tabindex="1" autofocus');?>

                                <?php if (form_error('date')) {?>
                                    <span class="label label-block label-danger text-left"><?php echo form_error('date');?>
</span>
                                <?php }?>
                            </div>
                            <div class="col-md-8">
                                    <input type="submit" value="Pilih" class="btn btn-success">
                            </div>
                        </div>
                    </div>
                </form>

                <hr>




            </div><!-- /panel body -->



            <div class="table-responsive pre-scrollable">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>No Faktur</th>
                        <th>Nama Principal</th>
                        <th>Tanggal Transaksi</th>
                        <th>Jatuh Tempo</th>
                        <th>Tagihan</th>
                        <th>Terbayar</th>
                        <th>Hutang</th>
                        <th>Bayar</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable(1, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['po']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>

                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['key']->value->id_purchase_order;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['key']->value->name;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['key']->value->date;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['key']->value->due_date;?>
</td>
                            <td>Rp <?php echo number_format($_smarty_tpl->tpl_vars['key']->value->grand_total,0);?>
</td>
                            <td>Rp <?php echo number_format($_smarty_tpl->tpl_vars['key']->value->paid,0);?>
</td>
                            <td>Rp <?php echo number_format(($_smarty_tpl->tpl_vars['key']->value->grand_total-$_smarty_tpl->tpl_vars['key']->value->paid),0);?>
</td>
                            <td>
                                <div class="table-controls">
                                    <a href="<?php echo base_url('credit/bill/');?>
/<?php echo $_smarty_tpl->tpl_vars['key']->value->id_purchase_order;?>
"
                                       class="btn btn-link btn-icon btn-xs tip" title="Bayar">
                                        <i class="icon-coin"></i>
                                    </a>
                                    <a href="<?php echo base_url('credit/detail/');?>
/<?php echo $_smarty_tpl->tpl_vars['key']->value->id_purchase_order;?>
"
                                       class="btn btn-link btn-icon btn-xs tip" title="Detail">
                                        <i class="icon-list"></i>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable($_smarty_tpl->tpl_vars['val']->value+1, null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value+($_smarty_tpl->tpl_vars['key']->value->grand_total-$_smarty_tpl->tpl_vars['key']->value->paid), null, 0);?>
                    <?php } ?>

                    </tbody>
                </table>
            </div>

            <div class="panel-body">

                <div class="col-sm-6">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>Total Hutang Bulan " <?php echo set_value('date');?>
 ":</th>
                            <td class="text-right">Rp <?php echo number_format($_smarty_tpl->tpl_vars['total']->value,0);?>
</td>
                        </tr>
                        <tr>
                            <th>Total Hutang:</th>
                            <td class="text-right"><h6>Rp <?php echo number_format($_smarty_tpl->tpl_vars['credit_total']->value,0);?>
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
    <?php echo js('form/custom.js');?>

</div>
<!-- /content -->

</body>
</html><?php }} ?>
