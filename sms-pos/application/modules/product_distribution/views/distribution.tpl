{* Extend our master template *}
{extends file="../../../master.tpl"}

{block name=content}
    <!-- Default panel -->
    <div class="panel panel-default">

        <div class="panel-heading"><h6 class="panel-title">Product Distribution</h6></div>

        <div class="panel-body">
            <div class="block-inner">
                <h6 class="heading-hr">
                    <i class="icon-clipboard"></i> Product Distribution
                    <small class="display-block">Informasi umum tentang Product Distribution</small>
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
            <form action="{base_url('product-distribution')}" role="form" method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Product:</label>
                            {form_dropdown('id_product',
                            $products,
                            set_value('id_product'),
                            'data-placeholder="Product" class="select-full" id="id-product-select"')}
                            {if form_error('id_product')}
                                <span class="label label-block label-danger text-left">{form_error('id_product') }</span>
                            {/if}

                        </div>
                        <div class="col-md-1 {if form_error('qty')}has-warning{/if}">
                            <label>Qty:</label>
                            <input type="number" name="qty" id="product-qty" value="{set_value('qty')}"
                                   class="form-control" placeholder="0">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4">
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
                        <th>No</th>
                        <th>Barcode</th>
                        <th>Name</th>
                        <th>Unit</th>
                        <th>Value</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Action</th>
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
                            <td> Rp {$key['price']|number_format:0}</td>
                            <td>{$key['qty']}</td>
                            <td>

                                <div class="table-controls">
                                    <a href="{base_url('product-distribution/detail/delete')}/{$key['id_product']}"
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

            <form action="{base_url('product-distribution/save')}" role="form" method="post"
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
