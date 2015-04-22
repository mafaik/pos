{* Extend our master template *}
{extends file="../../../master.tpl"}

{block name=content}
        <div class="panel panel-default">

            <div class="panel-heading"><h6 class="panel-title">Hutang</h6></div>

            <div class="panel-body"> 

                <div class="row invoice-header">
                    <div class="col-sm-6">
                        <h3>{$po->name}</h3>
                    <span>{$po->address} - {$po->zipcode}
                        </br>
                        {$po->city} - {$po->state}
                        </br>
                        {$po->telp1} - {$po->telp1}
                        </br>
                        {$po->email}
                    </span>
                    </div>

                    <div class="col-sm-3 pull-right">
                        <ul>
                            <li>Invoice # <strong class="text-danger pull-right">{$po->id_po}</strong></li>
                            <li>Date of Invoice: <strong class="pull-right">{$po->date}</strong></li>
                            <li>Due Date: <strong class="pull-right">{$po->due_date}</strong></li>
                        </ul>
                    </div>
                </div>
            </div><!-- /panel body -->

            <div class="table-responsive pre-scrollable">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>Staff</th>
                        <th>Amount</th>
                        <th>Payment Type</th>
                        <th>No Resi</th>
                        <th>Bukti Pembayaran</th>
                    </tr>
                    </thead>
                    <tbody>
                    {if $credit}
                        {assign var=total value=0}
                        {assign var=val value=1}
                        {foreach $credit as $key }

                            <tr>
                                <td>{$val}</td>
                                <td>{$key->date}</td>
                                <td>{$key->name}</td>
                                <td>Rp {$key->amount|number_format:0}</td>
                                <td>{$key->payment_type}</td>
                                <td>{$key->resi_number}</td>
                                <td>
                                    <div class="table-controls">
                                        <a href="{$key->file}"
                                           class="btn btn-link btn-icon btn-xs tip" title="View">
                                            <i class="icon-picassa"></i>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                            {assign var=val value=$val+1}
                            {assign var=total value=$total+($key->amount)}
                        {/foreach}
                    {/if}

                    </tbody>
                </table>
            </div>

            <div class="panel-body">

                <div class="col-sm-6">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>Total Tagihan:</th>
                            <td class="text-right">Rp {$po->grand_total|number_format:0}</td>
                        </tr>
                        <tr>
                            <th>Total Bayar:</th>
                            <td class="text-right">Rp {$po->paid|number_format:0}</td>
                        </tr>
                        <tr>
                            <th>Sisa Hutang:</th>
                            <td class="text-right"><h6>Rp {($po->grand_total - $po->paid)|number_format:0}</h6></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                {*<h6>Notes &amp; Information:</h6>*}
                {*Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.*}


            </div>


        </div><!-- /default panel -->

{/block}
