{* Extend our master template *}
{extends file="../../../master.tpl"}

{block name=content}
    <!-- Default panel -->
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title">Retur Item</h6></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h6>Detail Produk:</h6>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th>Barcode:</th>
                                    <td class="text-right">{$master->barcode}</td>
                                </tr>
                                <tr>
                                    <th>Nama Produk:</th>
                                    <td class="text-right">{$master->name}</td>
                                </tr>
                                <tr>
                                    <th>Merek:</th>
                                    <td class="text-right">{$master->brand}</td>
                                </tr>
                                <tr>
                                    <th>Satuan / Isi:</th>
                                    <td class="text-right">
                                        {$master->unit} / {$master->value}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Qty</th>
                                    <td class="text-right">
                                        {$master->qty}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Harga</th>
                                    <td class="text-right">
                                       Rp {$master->sell_price|number_format:0}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title">Form retur</h6></div>
                <div class="panel-body">
                    {if $error}
    <div class="callout callout-danger fade in">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <p>{$error}</p>
    </div>
{/if}
                    <form action="{current_url()}" role="form" method="post">
                        <div class="row">
                            <div class="col-sm-12">
                                <h6>Masukkan Data:</h6>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-4 col-lg-push-1 control-label">Jumlah Retur: </label>

                                        <div class="col-md-4
                                        col-lg-push-3  {if form_error('retur')}has-warning{/if}">
                                            <input type="hidden" name="id_retail" value="{$master->id_retail}">
                                            <input type="hidden" name="id_retail_detail" value="{$master->id_retail_detail}">

                                            <input type="number" value="{set_value('returns')}"
                                                   class="form-control"
                                                   autofocus="autofocus" name="returns" id="returns"
                                                   placeholder="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-4 col-lg-push-1 control-label">Keterangan
                                            Retur: </label>

                                        <div class="col-md-6 col-lg-push-1 {if form_error('reason')}has-warning{/if}">
                                            <textarea rows="4" cols="5" name="reason" placeholder="Ket..."
                                              class="elastic form-control">{set_value('reason')}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="submit" class="btn btn-block btn-success" value="Submit">
                                    </div>
                                    <div class="col-sm-3">
                                            <a href="{base_url('retail/returns/list-item/')}/{$master->id_retail}"
                                               type="button" name="cancel" class="btn btn-warning">
                                                <i class="icon-cancel-circle">
                                                </i> Cancel</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
{/block}
