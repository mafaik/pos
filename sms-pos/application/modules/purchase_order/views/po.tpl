{* Extend our master template *}
{extends file="../../../master.tpl"}

{block name=content}
    <!-- Default panel -->
    <form action="{current_url()}" role="form" method="post">
        <div class="panel panel-default">

            <div class="panel-heading"><h6 class="panel-title">Purchase Order</h6></div>

            <div class="panel-body">
                <div class="block-inner">
                    <h6 class="heading-hr">
                        <i class="icon-clipboard"></i> Purchase Info <small class="display-block">Informasi umum tentang proses purchasing</small>
                    </h6>
                </div>
                <div class="form-group {if {form_error('invoice_number')} != ''}has-warning{/if}">
                    <div class="row">
                        <div class="col-md-6 {if form_error('id_principal')}has-warning{/if}">
                            <label>Supplier / Principal:</label>
                            {form_dropdown('id_principal',$principals,set_value('id_principal'),'data-placeholder="Supplier" class="select-full" tabindex="1" autofocus')}
                            {if form_error('id_principal')}
                                <span class="label label-block label-danger text-left">{form_error('id_principal') }</span>
                            {/if}
                        </div>
                        <div class="col-md-6 {if form_error('invoice_number')}has-warning{/if}">
                            <label>No Faktur:</label>
                            {form_input('invoice_number', set_value('invoice_number'), 'class="form-control" placeholder="Invoice Number"')}
                            {if form_error('invoice_number')}
                                <span class="label label-block label-danger text-left">{form_error('invoice_number') }</span>
                            {/if}

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 {if form_error('date')}has-warning{/if}">
                            <label>Tanggal Nota Transaksi:</label>
                            {form_input('date', set_value('date'), 'class="datepicker-trigger form-control" data-mask="9999-99-99" placeholder"YYYY-MM-dd"')}
                        </div>
                        <div class="col-md-6 {if form_error('due_date')}has-warning{/if}">
                            <label>Jatuh Tempo Pembayaran:</label>
                            {form_input('due_date', set_value('due_date'), 'class="datepicker-trigger form-control" data-mask="9999-99-99" placeholder"YYYY-MM-dd"')}
                        </div>
                    </div>
                </div>
                <div class="form-actions text-right ">
                    <input type="submit" value="Add" class="btn btn-success">
                </div>
            </div><!-- /panel body -->

            <div class="panel-body">
                <h6>Notes &amp; Information:</h6>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </div>
        </div><!-- /default panel -->
    </form>
{/block}
