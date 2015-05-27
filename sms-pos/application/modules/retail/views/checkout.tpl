{* Extend our master template *}
{extends file="../../../master.tpl"}

{block name=content}

    <!-- New invoice template -->
    <div class="panel panel-success">
        <div class="panel-heading">
            <h6 class="panel-title"><i class="icon-checkmark3"></i> Retail Invoice</h6>

            <div class="dropdown pull-right">
                <a href="#" class="dropdown-toggle panel-icon" data-toggle="dropdown">
                    <i class="icon-cog3"></i>
                    <b class="caret"></b>
                </a>
                {*<ul class="dropdown-menu icons-right dropdown-menu-right">*}
                {*<li><a href="#"><i class="icon-print2"></i> Print invoice</a></li>*}
                {*<li><a href="#"><i class="icon-download"></i> Download invoice</a></li>*}
                {*<li><a href="#"><i class="icon-file-pdf"></i> View .pdf</a></li>*}
                {*<li><a href="#"><i class="icon-stack"></i> Archive</a></li>*}
                {*</ul>*}
            </div>
        </div>

        <div class="panel-body">

            <div class="row invoice-header">
                <div class="col-sm-6">
                    <h3>{$master->store_name}</h3>
                    <span>{$master->address} - {$master->zipcode}
                        </br>
                        {$master->city} - {$master->state}
                        </br>
                        {$master->telp}
                        </br>
                        {$master->owner}
                    </span>
                </div>

                <div class="col-sm-3 pull-right">
                    <ul>
                        <li>No Faktur # <strong class="text-danger pull-right">{$master->id_retail}</strong></li>
                        <li>Staff <strong class="pull-right">{$master->staff_name} </strong></li>
                        <li>Date : <strong class="pull-right">{$master->date}</strong></li>
                    </ul>
                </div>
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
                        <th>Harga</th>
                        <th>Total</th>
                        {*<th>Diskon</th>*}
                        <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    {assign var=total value=0}
                    {assign var=val value=1}
                    {foreach $items as $key }
                        <tr>
                            <td>{$val}</td>
                            <td>{$key['barcode']}</td>
                            <td>{$key['name']}</td>
                            <td>{$key['brand']}</td>
                            <td style="width:100px;">{$key['unit']} ( {$key['value']} )</td>
                            <td>{$key['qty']}</td>
                            <td style="width:130px;" class="text-right">Rp {$key['price']|number_format:0}</td>
                            <td style="width:130px;" class="text-right">
                                Rp {($key['qty'] * $key['price'])|number_format:0}</td>
                            {*<td style="width:130px;" class="text-right">Rp {$key['discount']|number_format:0}</td>*}
                            <td style="width:130px;" class="text-right">
                                Rp {($key['qty'] * $key['price'] - $key['discount_total'])|number_format:0}
                            </td>
                        </tr>
                        {assign var=val value=$val+1}
                        {assign var=total value=$total+($key['qty'] * $key['price'] - $key['discount_total'])}

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
                            <th>Total:</th>
                            <td class="text-right">Rp {$master->total|number_format:0}</td>
                        </tr>
                        <tr>
                            <th>Diskon Total:</th>
                            <td class="text-right">Rp {$master->discount_price|number_format:0}</td>
                        </tr>
                        <tr>
                            <th>DPP:</th>
                            <td class="text-right">Rp {($master->total-$master->discount_price)|number_format:0}</td>
                        </tr>
                        <tr>
                            <th>PPN:</th>
                                <td class="text-right">
                                    Rp  {$master->ppn|number_format:0}</td>
                        </tr>
                        <tr>
                            <th>Grand Total:</th>
                            <td class="text-right">Rp {$master->grand_total|number_format:0}</td>
                        </tr>
                        <tr>
                            <th>Jumlah Bayar:</th>
                            <td class="text-right">Rp {$master->paid|number_format:0}</td>
                        </tr>
                        <tr>
                            <th>Kembali:</th>
                            <td class="text-right">Rp {($master->paid-$master->grand_total)|number_format:0}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="btn-group pull-right">
                        <a href="{base_url('retail')}" class="btn btn-info button">
                            <i class="icon-box-add"></i> New Retail</a>
                        <button type="button" class="btn btn-primary"><i class="icon-print2"></i> Print</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /new invoice template -->
{/block}
