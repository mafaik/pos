{* Extend our master template *}
{extends file="../../../master.tpl"}

{block name=content}

    <!-- New invoice template -->

    <div class="panel panel-default">
        <div class="panel-heading">
            <h6 class="panel-title"><i class="icon-checkmark3"></i> Data nota {$master->id_retail}</h6>
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
                        <li>Staff  <strong class="pull-right">{$master->staff_name} </strong></li>
                        <li>Date : <strong class="pull-right">{$master->date}</strong></li>
                    </ul>
                </div>
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
                    <th>Retur</th>
                    <th>Harga</th>
                    <th>Total</th>
                    {*<th>Diskon</th>*}
                    <th>Subtotal</th>
                    <th>Action</th>
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
                        <td>{$key['returns']}</td>
                        <td style="width:130px;" class="text-right">Rp {$key['price']|number_format:0}</td>
                        <td style="width:130px;" class="text-right">Rp {($key['qty'] * $key['price'])|number_format:0}</td>
                        {*<td style="width:130px;" class="text-right">Rp {$key['discount']|number_format:0}</td>*}
                        <td style="width:130px;" class="text-right">
                            Rp {($key['qty'] * $key['price'] - $key['discount'])|number_format:0}
                        </td>
                        <td>

                            <a href="{base_url('retail/returns/')}/{$key['id_retail_detail']}"
                               class="button btn btn-info "> Retur
                            </a>
                        </td>
                    </tr>
                    {assign var=val value=$val+1}
                    {assign var=total value=$total+($key['qty'] * $key['price'] - $key['discount'])}
                {/foreach}
                </tbody>
            </table>
        </div>

        <div class="panel-body">
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
                            <td class="text-right">Rp {$master->discount|number_format:0}</td>
                        </tr>
                        <tr>
                            <th>DPP:</th>
                            <td class="text-right">Rp {$master->dpp|number_format:0}</td>
                        </tr>
                        <tr>
                            <th>PPN:</th>
                            <td class="text-right">Rp {$master->ppn|number_format:0}</td>
                        </tr>
                        <tr>
                            <th>Grand Total:</th>
                            <td class="text-right">Rp {$master->grand_total|number_format:0}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="btn-group pull-right">
                        <a href="{base_url('retail/replace')}/{$master->id_retail}"  class="btn btn-success button">
                            <i class="icon-box-add"></i> Replace Barang</a>
                        {*<button type="button" class="btn btn-primary"><i class="icon-print2"></i> Print</button>*}
                    </div>
                </div>
            </div>


        </div>

        {if $history_returns}
            <div class="block-inner">
                <h6 class="heading-hr">
                    <i class="icon-clipboard"></i> Riwayat Retur nota  {$master->id_retail}
                </h6>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No Retur</th>
                        <th>Tanggal Retur</th>
                        <th>Staff</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach $history_returns as $returns }
                        <tr>
                            <td>{$returns->id_retail_returns}</td>
                            <td>{$returns->date}</td>
                            <td>{$returns->name}</td>
                            <td>
                                <a href="{base_url('retail/replace/checkout/')}/{$returns->id_retail_returns}"
                                   target="_blank" class="button btn btn-info "> Detail
                                </a>
                            </td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
        {/if}

    </div>
    <!-- /new invoice template -->
{/block}
