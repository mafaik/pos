{* Extend our master template *}
{extends file="../../../master.tpl"}

{block name=content}

    <!-- New invoice template -->
    <div class="panel panel-success">
        <div class="panel-heading">
            <h6 class="panel-title"><i class="icon-checkmark3"></i> Retrur Invoice</h6>

            <div class="dropdown pull-right">
                <a href="#" class="dropdown-toggle panel-icon" data-toggle="dropdown">
                    <i class="icon-cog3"></i>
                    <b class="caret"></b>
                </a>
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
                        <li>No Faktur Retur# <strong class="text-danger pull-right">{$master->id_retail_return}</strong>
                        </li>
                        <li>No Faktur Retail# <strong class="text-danger pull-right">{$master->id_retail}</strong></li>
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
                        <th>Retur</th>
                        <th>Harga</th>
                        <th>Subtotal</th>
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
                            <td style="width:100px;">{$key['unit']} ( {$key['value']} )</td>
                            <td>{$key['qty']}</td>
                            <td>
                                {if !empty($key['qty_return'])}
                                    {$key['return'] + $key['qty_return']}
                                {else}
                                    {$key['return']}
                                {/if}
                            </td>
                            <td style="width:130px;" class="text-right">Rp {$key['price']|number_format:0}</td>
                            <td style="width:130px;" class="text-right">
                                Rp {($key['qty'] * $key['price'] - $key['discount_total'])|number_format:0}
                            </td>
                        </tr>
                        {assign var=val value=$val+1}
                    {/foreach}
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="block-inner">
                <h6 class="heading-hr">
                    <i class="icon-clipboard"></i> Item Pengganti
                    <small class="display-block">Data item pengganti</small>
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
                        <th>Cashback</th>
                    </tr>
                    </thead>
                    <tbody>
                    {assign var=no value=1}
                    {foreach $returns as $return }
                        <tr>
                            <td>{$no}</td>
                            <td>{$return['barcode']}</td>
                            <td>{$return['name']}</td>
                            <td>{$return['brand']}</td>
                            <td style="width:100px;">{$return['unit']} ( {$return['value']} )</td>
                            <td>{$return['qty']}</td>
                            <td>Rp
                                {if $return['cashback']}
                                    {$return['cashback']|number_format:0}
                                {/if}
                            </td>
                        </tr>
                        {assign var=no value=$no+1}
                    {/foreach}
                    </tbody>
                </table>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4 pull-right">
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
