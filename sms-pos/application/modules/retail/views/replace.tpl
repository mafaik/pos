{* Extend our master template *}
{extends file="../../../master.tpl"}

{block name=content}
    <!-- Default panel -->
    <script type="text/javascript" xmlns="http://www.w3.org/1999/html">
        var data_storage = {$product_storage|@json_encode};
    </script>
    {js('function.js')}
    {js('form/custom.js')}
    <div class="panel panel-default">

        <div class="panel-heading"><h6 class="panel-title">Retur</h6></div>

        <div class="panel-body">
            <div class="block-inner">
                <h6 class="heading-hr">
                    <i class="icon-clipboard"></i> Produk yang Di Di Retur
                </h6>
            </div>


            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Barcode</th>
                        <th>Nama Produk</th>
                        <th>Merek</th>
                        <th>Satuan</th>
                        <th>Qty</th>
                        <th>Retur</th>
                        <th>Harga</th>
                        <th>Total</th>
                        {*<th>Diskon</th>*}
                        <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    {assign var=total value=0}
                    {assign var=val value=1}
                    {foreach $product_replaced as $key }
                        <tr>
                            <td>{$val}</td>
                            <td>{$key['barcode']}</td>
                            <td>{$key['name']}</td>
                            <td>{$key['brand']}</td>
                            <td style="width:100px;">{$key['unit']} ( {$key['value']} )</td>
                            <td>{$key['qty']}</td>
                            <td>{$key['returns']}</td>
                            <td style="width:130px;" class="text-right">Rp {$key['price']|number_format:0}</td>
                            <td style="width:130px;" class="text-right">Rp {($key['returns'] * $key['price'])|number_format:0}</td>
                            {*<td style="width:130px;" class="text-right">Rp {$key['discount']|number_format:0}</td>*}
                            <td style="width:130px;" class="text-right">
                                Rp {($key['returns'] * $key['price'] - $key['discount'])|number_format:0}
                            </td>
                        </tr>
                        {assign var=val value=$val+1}
                        {assign var=total value=$total+($key['returns'] * $key['price'] - $key['discount'])}
                    {/foreach}
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
                            <th>Grand Total:</th>
                            <td class="text-right">Rp {$total|number_format:0}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="block-inner">
                <h6 class="heading-hr">
                    <i class="icon-clipboard"></i> Produk pengganti
                </h6>
            </div>
            {*<div class="row invoice-header">*}
            {*<div class="col-sm-6">*}
            {*<h3>{$principal->name}</h3>*}
            {*<span>{$principal->address} - {$principal->zipcode}*}
            {*</br>*}
            {*{$principal->city} - {$principal->state}*}
            {*</br>*}
            {*{$principal->telp1} - {$principal->telp1}*}
            {*</br>*}
            {*{$principal->email}*}
            {*</span>*}
            {*</div>*}

            {*<div class="col-sm-6">*}
            {*<ul class="invoice-details">*}
            {*<li>No Faktur # <strong class="text-danger">{$cache['value']['invoice_number']}</strong></li>*}
            {*<li>Tanggal Nota Transaksi: <strong>{$cache['value']['date']}</strong></li>*}
            {*<li>Jatuh Tempo Pembayaran: <strong>{$cache['value']['due_date']}</strong></li>*}
            {*<li class="invoice-status text-right">*}
            {*<a href="{base_url('purchase-order/delete')}"  class=" button btn btn-danger">*}
            {*<i class="icon-eject"></i>New Purchase Order</a>*}
            {*</li>*}
            {*</ul>*}
            {*</div>*}
            {*</div>*}


            {if $error}
                <div class="callout callout-danger fade in">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <p>{$error}</p>
                </div>
            {/if}
            <div class="row">
                <div class="col-md-4">
                    <form action="{current_url()}" role="form" method="post">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-4 control-label">Barcode: </label>

                                <div class="col-md-8">
                                    <input type="text" name="barcode" value="{set_value('barcode')}" id="input-barcode"
                                           class="form-control" placeholder="Type or scan barcode"
                                           autofocus onblur="barcodeParam(this)">
                                    <input type="hidden" name="id_product" value="{set_value('id_product')}"
                                           id="input-id_product">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-4 control-label">Qty: </label>

                                <div class="col-md-4 {if form_error('qty')}has-warning{/if}">
                                    <input type="number" name="qty" value="{set_value('qty')}" id="input-qty"
                                           class="form-control" placeholder="0">
                                </div>
                            </div>
                        </div>
                        {*<div class="form-group">*}
                        {*<div class="row">*}
                        {*<label class="col-sm-4 control-label">Diskon: </label>*}

                        {*<div class="col-md-7 {if form_error('discount_price')}has-warning{/if}">*}
                        {*<div class="input-group">*}
                        {*<span class="input-group-addon">Rp</span>*}

                        {*<input type="number" name="discount"*}
                        {*value="{set_value('discount')}"*}
                        {*class="form-control" placeholder="0"*}
                        {*id="input-discount" >*}

                        {*</div>*}
                        {*</div>*}
                        {*</div>*}
                        {*</div>*}

                        <div class="col-sm-12">
                            <input type="submit" class="btn btn-block btn-success" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="col-md-1">
                    <a data-toggle="modal" role="button" href="#default-modal"
                       class="button btn btn-info ">Cari
                    </a>
                </div>
                <div class="col-md-5">
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

                <div class="col-md-2">
                    <h3 class="text-danger text-semibold">Harga</h3>

                    <h3 class="text-success text-semibold" id="text-sell_price"></h3>
                </div>

            </div>
            <hr>
        </div>
        <!-- /panel body -->


        {if $items}
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
                        {*<th>Diskon</th>*}
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {assign var=val value=1}
                    {foreach $items as $key }
                        <tr>
                            <td>{$val}</td>
                            <td>{$key['barcode']}</td>
                            <td>{$key['name']}</td>
                            <td>{$key['brand']}</td>
                            <td>{$key['unit']} / {$key['value']}</td>
                            <td style="width:100px;">
                                <input type="number" id="qty-{$key['id_product']}" value="{$key['qty']}"
                                       class="form-control" onkeypress="qtyKeyPress({$key['id_product']},
                                        '{base_url('retail/replace/update')}/{$master->id_retail}')">
                            </td>
                            <td style="width:130px;" class="text-right">
                                Rp {$key['sell_price']|number_format:0}
                            </td>
                            {*<td style="width:130px;" class="text-right">*}
                            {*Rp {$key['discount']|number_format:0}*}
                            {*</td>*}
                            <td style="width:130px;" class="text-right">
                                Rp {($key['qty'] * $key['sell_price'] - $key['discount'])|number_format:0}
                            </td>
                            <td style="width:90px;">

                                <div class="table-controls">
                                    <a class="btn btn-link btn-icon btn-xs tip" title="Update Qty"
                                       onclick="updateQty({$key['id_product']},
                                               '{base_url('retail/replace/update')}/{$master->id_retail}')">
                                        <i class="icon-pencil3"></i></a>
                                    <a href="{base_url('retail/replace/delete')}/{$master->id_retail}/{$key['id_product']}"
                                       class="btn btn-link btn-icon btn-xs tip" title="Hapus Data">
                                        <i class="icon-remove3"></i></a>
                                </div>
                            </td>
                        </tr>
                        {assign var=total value=$total-($key['qty'] * $key['sell_price'] - $key['discount'])}
                        {assign var=val value=$val+1}

                    {/foreach}
                    </tbody>
                </table>
            </div>
                {/if}
            <form action="{base_url('retail/replace/save')}/{$master->id_retail}" role="form" method="post"
                  onsubmit="return confirm('Process Data');">

                <div class="panel-body">
                    <div class="row invoice-payment">

                        <div class="col-sm-4 pull-right">
                            <h6>Kembali Tunai:</h6>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th>Tunai:</th>
                                    <td class="text-right" style="max-width: 135px;">
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp</span>

                                            <input type="number" name="cashback" value="{set_value('cashback',$total)}"
                                                   class="form-control" placeholder="0"
                                                   id="input-discount">

                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="btn-group pull-right">
                                <button type="submit" name="save" class="btn btn-success"><i class="icon-checkmark">
                                    </i> Checkout</button>
                            </div>
                        </div>
                    </div>

                    <h6>Notes &amp; Information:</h6>
                    This invoice contains a incomplete list of items destroyed by the Federation ship Enterprise on
                    Startdate 5401.6 in an unprovked attacked on a peaceful &amp; wholly scientific mission to Outpost
                    775.
                    The Romulan people demand immediate compensation for the loss of their Warbird, Shuttle, Cloaking
                    Device, and to a lesser extent thier troops.
                </div>
                <!-- /panel body -->
            </form>

        {*<div class="panel-body">*}
        {*<h6>Notes &amp; Information:</h6>*}
        {*Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.*}
        {*</div>*}
    </div>
    <!-- /default panel -->


    <!-- Default modal -->
    <div id="default-modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Daftar Produk</h4>
                </div>

                <!-- New invoice template -->
                {if $product_storage}
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
                                    <th>Ukuran</th>
                                    <th>Stok</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach $product_storage as $products }
                                    <tr>
                                        <td>{$products['barcode']}</td>
                                        <td>{$products['name']}</td>
                                        <td>{$products['category']}</td>
                                        <td>{$products['unit']}</td>
                                        <td>{$products['value']}</td>
                                        <td>{$products['brand']}</td>
                                        <td>{$products['size']}</td>
                                        <td>{$products['stock_retail']}</td>
                                        <td>Rp {$products['sell_price']|number_format:0}</td>
                                        <td>
                                            <a href="#" onclick="idParam({$products['id_product']})"
                                               class="button btn btn-info  btn-icon" data-dismiss="modal">
                                                <i class="icon-cart-add"></i>
                                            </a>

                                        </td>
                                    </tr>
                                {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                {/if}
                <!-- /new invoice template -->
            </div>
        </div>
    </div>
    <!-- /default modal -->
{/block}
