{* Extend our master template *}
{extends file="../../../master.tpl"}

{block name=content}
    <!-- Default panel -->
    {js('function.js')}
    {js('form/conversion.js')}
    <div class="panel panel-default">

        <div class="panel-heading"><h6 class="panel-title">Product Conversion</h6></div>

        <div class="panel-body">
            <div class="block-inner">
                <h6 class="heading-hr">
                    <i class="icon-clipboard"></i> Product Conversion
                    <small class="display-block">Informasi umum tentang proses purchasing</small>
                </h6>
            </div>
            <!-- Callout -->
            {if $error}
                <div class="callout callout-danger fade in">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <p>{$error}</p>
                </div>
            {/if}
            <!-- /callout -->

            <script type="text/javascript">
                var product_storage = {$product_storage|@json_encode};
            </script>
            <form action="{base_url('product-conversion')}" role="form" method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label>From Product:</label>
                            {form_dropdown('id_product',
                            $products,
                            set_value('id_product'),
                            'data-placeholder="Product" class="select-full" id="id-product-select" onchange="leaveDropdownProductFrom(this,product_storage,\'id_product\')"')}
                            {if form_error('id_product')}
                                <span class="label label-block label-danger text-left">{form_error('id_product') }</span>
                            {/if}
                            <input type="hidden" id="product-id-text"
                                   value="{set_value('id_product')}">

                        </div>
                        <div class="col-md-1 {if form_error('qty')}has-warning{/if}">
                            <label>Qty:</label>
                            <input type="number" name="qty" id="product-qty" value="{set_value('qty')}"
                                   onblur="changeQty(product_storage)"
                                   class="form-control" placeholder="0">
                            {if form_error('qty')}
                                <span class="label label-block label-danger text-left">{form_error('qty') }</span>
                            {/if}
                            <input type="hidden" id="product-value-text" name="value_text"
                                   value="{set_value('qty_text')}">
                        </div>
                        <div class="col-md-3">
                            <label>Result Product:</label>
                            {form_dropdown('id_product_result',
                            $products,
                            set_value('id_product_result'),
                            'data-placeholder="Product" class="select-full" id="id-product-select" onchange="leaveDropdownProductResult(this,product_storage,\'id_product\')"')}
                            {if form_error('id_product_result')}
                                <span class="label label-block label-danger text-left">{form_error('id_product_result') }</span>
                            {/if}
                            <input type="hidden" id="product-id-text-result"
                                   value="{set_value('id_product_result')}">

                        </div>
                        <div class="col-md-1 {if form_error('qty_result')}has-warning{/if}">
                            <label>Qty:</label>
                            <input type="number" name="qty_result" id="product-qty-result"
                                   value="{set_value('qty_result')}"
                                   onblur="changeQtyResult(product_storage)"
                                   class="form-control" placeholder="0">
                            {if form_error('qty_result')}
                                <span class="label label-block label-danger text-left">{form_error('qty_result') }</span>
                            {/if}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Detail From:</label>
                            <ul>
                                <li>Barcode # <span class="text-danger" id="product-barcode"></span></li>
                                <li>Name: <strong class="text-info" id="product-name"></strong></li>
                                <li>Unit: <strong class="text-info" id="product-unit"></strong></li>
                                <li>Value Unit: <strong class="text-info" id="product-value"></strong></li>
                                <li>Available Stock: <strong class="text-info" id="product-stock"></strong></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <label>Detail Result:</label>
                            <ul>
                                <li>Barcode # <span class="text-danger" id="product-barcode-result"></span></li>
                                <li>Name: <strong class="text-info" id="product-name-result"></strong></li>
                                <li>Unit: <strong class="text-info" id="product-unit-result"></strong></li>
                                <li>Value Unit: <strong class="text-info" id="product-value-result"></strong></li>
                                <li>Current Stock: <strong class="text-info" id="product-stock-result"></strong></li>
                                <li>Updated Stock: <strong class="text-info" id="product-updated-stock-result"></strong>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-8">

                            <div class="form-actions text-right">
                                <input type="submit" value="Add" class="btn btn-success">
                            </div>
                        </div>

                    </div>

                </div>
            </form>
        </div>
        <!-- /panel body -->


        {if !empty($list)}
                <div class="table-responsive pre-scrollable">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th colspan="4">From</th>
                            <th colspan="4">Result</th>
                            <th rowspan="2">QTY</th>
                            <th rowspan="2">Qty Result</th>
                            <th rowspan="2">Action</th>
                        </tr>
                        <tr>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Value</th>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Value</th>
                        </tr>
                        </thead>
                        <tbody>
                        {assign var=val value=1}
                        {foreach $list as $key }
                            <tr>
                                <td>
                                    {$val}
                                </td>
                                <td>{$key['barcode']}</td>
                                <td>{$key['name']}</td>
                                <td>{$key['unit']}</td>
                                <td>{$key['value']}</td>
                                <td>{$key['barcode_result']}</td>
                                <td>{$key['name_result']}</td>
                                <td>{$key['unit_result']}</td>
                                <td>{$key['value_result']}</td>
                                <td>{$key['qty']}</td>
                                <td>{$key['qty_result']}</td>
                                <td>

                                    <div class="table-controls">
                                        <a href="{base_url('product-conversion/detail/delete')}/{$key['id_product']}"
                                           class="btn btn-link btn-icon btn-xs tip" title="Hapus Data">
                                            <i class="icon-remove3"></i></a>
                                    </div>
                                </td>
                            </tr>
                            {assign var=val value=$val+1}
                        {/foreach}
                        </tbody>
                    </table>
                </div>

            <form action="{base_url('product-conversion/save')}" role="form" method="post"
                  onsubmit="return confirm('Process Data');">

                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-actions text-right">
                            <button type="submit" name="save" value="Save" class="btn btn-success"><i class="icon-checkmark">
                                </i> Process</button>
                            {*<button type="button" name="print" class="btn btn-default"><i class="icon-print2"></i> Print</button>*}
                        </div>
                    </div>
                </div>
            </form>
        {/if}
    </div>
    {*<div class="panel-body">*}
    {*<h6>Notes &amp; Information:</h6>*}
    {*Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.*}
    {*</div>*}
{/block}
