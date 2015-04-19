{* Extend our master template *}
{extends file="../../../master.tpl"}

{block name=content}

    <!-- New invoice template -->
    <div class="panel panel-success">
        <div class="panel-heading">
            <h6 class="panel-title"><i class="icon-checkmark3"></i> Purchase Order Invoice</h6>
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
                    <h3>{$principal->name}</h3>
                    <span>{$principal->address} - {$principal->zipcode}
                        </br>
                        {$principal->city} - {$principal->state}
                        </br>
                        {$principal->telp1} - {$principal->telp1}
                        </br>
                        {$principal->email}
                    </span>
                </div>

                <div class="col-sm-3 pull-right">
                    <ul>
                        <li>Invoice # <strong class="text-danger pull-right">{$po->id_po}</strong></li>
                        <li>Staff  <strong class="pull-right">{$staff->name} </strong></li>
                        <li>Date of Invoice: <strong class="pull-right">{$po->date}</strong></li>
                        <li>Due Date: <strong class="pull-right">{$po->due_date}</strong></li>
                        <li class="invoice-status ">
                            <strong>Stocking Status:</strong>
                            {if $po->status_stocking == 0}
                                <div class="label label-danger pull-right">
                                    Waiting
                                </div>
                            {else}
                                <div class="label label-success pull-right">
                                    Done
                                </div>
                            {/if}
                        </li>
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
                    <th>Name</th>
                    <th>Unit</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Discount</th>
                    <th>Subtotal</th>
                </tr>
                </thead>
                <tbody>
                {assign var=total value=0}
                {assign var=val value=1}
                {foreach $pod as $key }
                    <tr>
                        <td>{$val}</td>
                        <td>{$key['barcode']}</td>
                        <td>{$key['name']}</td>
                        <td style="width:100px;">{$key['unit']} ( {$key['value']} )</td>
                        <td>{$key['qty']}</td>
                        <td style="width:130px;" class="text-right">Rp {$key['price']|number_format:2:".":","}</td>
                        <td style="width:130px;" class="text-right">Rp {($key['qty'] * $key['price'])|number_format:2:".":","}</td>
                        <td style="width:130px;" class="text-right">Rp {$key['discount_total']|number_format:2:".":","}</td>
                        <td style="width:130px;" class="text-right">Rp {($key['qty'] * $key['price'] - $key['discount_total'])|number_format:2:".":","}</td>
                    </tr>
                    {assign var=val value=$val+1}
                    {assign var=total value=$total+($key['qty'] * $key['price'] - $key['discount_total'])}

                {/foreach}
                </tbody>
            </table>
        </div>

        <div class="panel-body">
            <div class="row invoice-payment">
                <div class="col-sm-8">
                </div>

                <div class="col-sm-4">
                    <h6>Total:</h6>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>total:</th>
                            <td class="text-right">Rp {$po->total|number_format:2:".":","}</td>
                        </tr>
                        <tr>
                            <th>Discount:</th>
                            <td class="text-right">Rp {$po->discount_price|number_format:2:".":","}</td>
                        </tr>
                        <tr>
                            <th>DPP:</th>
                            <td class="text-right">Rp {$po->dpp|number_format:2:".":","}</td>
                        </tr>
                        <tr>
                            <th>Tax:</th>
                            <td class="text-right">Rp {$po->ppn|number_format:2:".":","}</td>
                        </tr>
                        <tr>
                            <th>Grand Total:</th>
                            <td class="text-right">Rp {$po->grand_total|number_format:2:".":","}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="btn-group pull-right">
                        <a href="{base_url('purchase-order')}"  class="btn btn-info button"><i class="icon-box-add"></i> New Purchase Order</a>
                        <button type="button" class="btn btn-primary"><i class="icon-print2"></i> Print</button>
                    </div>
                </div>
            </div>

            <h6>Notes &amp; Information:</h6>
            This invoice contains a incomplete list of items destroyed by the Federation ship Enterprise on Startdate 5401.6 in an unprovked attacked on a peaceful &amp; wholly scientific mission to Outpost 775.
            The Romulan people demand immediate compensation for the loss of their Warbird, Shuttle, Cloaking Device, and to a lesser extent thier troops.
        </div>
    </div>
    <!-- /new invoice template -->
{/block}
