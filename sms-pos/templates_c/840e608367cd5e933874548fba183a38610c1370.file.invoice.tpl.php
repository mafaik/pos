<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-02 12:10:46
         compiled from "/var/www/sms-pos/application/modules/purchase_order/views/invoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23005477055334beb312c50-03180410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '840e608367cd5e933874548fba183a38610c1370' => 
    array (
      0 => '/var/www/sms-pos/application/modules/purchase_order/views/invoice.tpl',
      1 => 1432659710,
      2 => 'file',
    ),
    'fff4798455c3e7183d6e4c124fc2bab3741f8371' => 
    array (
      0 => '/var/www/sms-pos/application/master.tpl',
      1 => 1433163876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23005477055334beb312c50-03180410',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55334beb4e5bc5_64256095',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55334beb4e5bc5_64256095')) {function content_55334beb4e5bc5_64256095($_smarty_tpl) {?><!DOCTYPE html>
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

        
    <!-- New invoice template -->
    <div class="panel panel-success">
        <div class="panel-heading">
            <h6 class="panel-title"><i class="icon-checkmark3"></i> Purchase Order Invoice</h6>

            <div class="dropdown pull-right">
                <a href="#" class="dropdown-toggle panel-icon" data-toggle="dropdown">
                    <i class="icon-cog3"></i>
                    <b class="caret"></b>
                </a>
            </div>
        </div>

        <div class="panel-body">

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
                        <li>No Faktur <strong class="text-danger"># <?php echo $_smarty_tpl->tpl_vars['po']->value->id_purchase_order;?>
</strong></li>
                        <li>Staff: <strong><?php echo $_smarty_tpl->tpl_vars['staff']->value->name;?>
 </strong></li>
                        <li>Tanggal Nota Transaksi: <strong><?php echo $_smarty_tpl->tpl_vars['po']->value->date;?>
 </strong></li>
                        <li>Jatuh Tempo Pembayaran: <strong><?php echo $_smarty_tpl->tpl_vars['po']->value->due_date;?>
</strong></li>
                    </ul>
                </div>
            </div>


            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="table-print">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Barcode</th>
                        <th>Nama Product</th>
                        <th>Merk</th>
                        <th>Satuan</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Total</th>
                        <th>Diskon</th>
                        <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable(1, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                            <td style="width:100px;"><?php echo $_smarty_tpl->tpl_vars['key']->value['unit'];?>
 ( <?php echo $_smarty_tpl->tpl_vars['key']->value['value'];?>
 )</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['key']->value['qty'];?>
</td>
                            <td style="width:130px;" class="text-right">Rp <?php echo number_format($_smarty_tpl->tpl_vars['key']->value['price'],0);?>
</td>
                            <td style="width:130px;" class="text-right">
                                Rp <?php echo number_format(($_smarty_tpl->tpl_vars['key']->value['qty']*$_smarty_tpl->tpl_vars['key']->value['price']),0);?>
</td>
                            <td style="width:130px;" class="text-right">Rp <?php echo number_format($_smarty_tpl->tpl_vars['key']->value['discount_total'],0);?>
</td>
                            <td style="width:130px;" class="text-right">
                                Rp <?php echo number_format(($_smarty_tpl->tpl_vars['key']->value['qty']*$_smarty_tpl->tpl_vars['key']->value['price']-$_smarty_tpl->tpl_vars['key']->value['discount_total']),0);?>

                            </td>
                        </tr>
                        <?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable($_smarty_tpl->tpl_vars['val']->value+1, null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value+($_smarty_tpl->tpl_vars['key']->value['qty']*$_smarty_tpl->tpl_vars['key']->value['price']-$_smarty_tpl->tpl_vars['key']->value['discount_total']), null, 0);?>

                    <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="row invoice-payment">
                <div class="col-sm-8">
                </div>

                <div class="col-sm-4">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>Total:</th>
                            <td class="text-right">Rp <?php echo number_format($_smarty_tpl->tpl_vars['po']->value->total,0);?>
</td>
                        </tr>
                        <tr>
                            <th>Diskon Total:</th>
                            <td class="text-right">Rp <?php echo number_format($_smarty_tpl->tpl_vars['po']->value->discount_price,0);?>
</td>
                        </tr>
                        <tr>
                            <th>DPP:</th>
                            <td class="text-right">Rp <?php echo number_format($_smarty_tpl->tpl_vars['po']->value->dpp,0);?>
</td>
                        </tr>
                        <tr>
                            <th>PPN:</th>
                            <td class="text-right">Rp <?php echo number_format($_smarty_tpl->tpl_vars['po']->value->ppn,0);?>
</td>
                        </tr>
                        <tr>
                            <th>Grand Total:</th>
                            <td class="text-right">Rp <?php echo number_format($_smarty_tpl->tpl_vars['po']->value->grand_total,0);?>
</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="btn-group pull-right">
                        <a href="<?php echo base_url('purchase-order');?>
"
                           class="btn btn-info button"> <i class="icon-box-add"></i> New Purchase Order
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /new invoice template -->


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

        
    <?php echo '<script'; ?>
 type="text/javascript">
    <?php echo '</script'; ?>
>

    </div>
    <?php echo js('form/custom.js');?>

</div>
<!-- /content -->

</body>
</html><?php }} ?>
