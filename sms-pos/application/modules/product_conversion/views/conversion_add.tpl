{* Extend our master template *}
{extends file="../../../master.tpl"}

{block name=content}
    <!-- Default panel -->
    <script type="text/javascript">
        var data_storage = {$product_storage|@json_encode};
    </script>
    {js('function.js')}
    {js('form/conversion.js')}
    <div class="row">
        <form action="{base_url('product-conversion/save')}" role="form" method="post">
            <div class="col-md-12">
                <div class="block-inner">
                    <h6 class="heading-hr">
                        <i class="icon-clipboard"></i> Product Conversion
                        <small class="display-block">Informasi umum tentang proses purchasing</small>
                    </h6>
                </div>

                {if $error}
                    <div class="callout callout-danger fade in">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <p>{$error}</p>
                    </div>
                {/if}
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><h6 class="panel-title">Product Conversion</h6></div>
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <h6>Konversi Dar Produk:</h6>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th>Barcode:</th>
                                    <td class="text-right">{$product->barcode}</td>
                                </tr>
                                <tr>
                                    <th>Nama Produk:</th>
                                    <td class="text-right">{$product->name}</td>
                                </tr>
                                <tr>
                                    <th>Merek:</th>
                                    <td class="text-right">{$product->brand}</td>
                                </tr>
                                <tr>
                                    <th>Satuan / Isi:</th>
                                    <td class="text-right">
                                        {$product->unit} / {$product->value}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Stok:</th>
                                    <td class="text-right">{$product->stock}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Qty: </label>
                                <div class="col-sm-3 {if form_error('qty')}has-warning{/if}">
                                    <input type="hidden" name="id_product" value="{$product->id_product}">
                                    <input type="number" value="{set_value('qty')}" class="form-control" autofocus="autofocus" name="qty" id="qty"
                                           placeholder="0">
                                    <input type="hidden" name="id_product_result" id="result-id-product">
                                    <input type="hidden" name="qty_result" id="result-qty-result">
                                    <input type="hidden" id="value" value="{$product->value}">
                                </div>
                                <label class="col-sm-4 control-label">Conversion To: </label>
                                <div class="col-sm-3">
                                    <a data-toggle="modal" role="button" href="#default-modal"
                                       class="button btn btn-info ">
                                        <i class="icon-search2"></i> Cari
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">

                    <div class="panel-heading"><h6 class="panel-title">Konversi Ke Produk</h6></div>
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <h6>Rincian Produk:</h6>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th>Barcode:</th>
                                    <td class="text-right" id="result-barcode"></td>
                                </tr>
                                <tr>
                                    <th>Nama Produk:</th>
                                    <td class="text-right" id="result-name"></td>
                                </tr>
                                <tr>
                                    <th>Merek:</th>
                                    <td class="text-right" id="result-brand"></td>
                                </tr>
                                <tr>
                                    <th>Satuan / Isi:</th>
                                    <td class="text-right" id="result-unit">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Stok:</th>
                                    <td class="text-right"  id="result-stock"></td>
                                </tr>
                                <tr>
                                    <th>Stok Tambahan:</th>
                                    <td class="text-right"  id="result-qty"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12">
                <input type="submit" class="btn btn-block btn-success" value="Submit">
            </div>
        </form>
    </div>


    <!-- Default modal -->
    <div id="default-modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Daftar Product</h4>
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
                                        <td>
                                            <a href="#" onclick="addItem({$products['id_product']})"
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
