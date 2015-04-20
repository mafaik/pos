{* Extend our master template *}
{extends file="../../../master.tpl"}

{block name=content}
    <!-- Default panel -->
    <form action="{current_url()}" role="form" method="post">
        <div class="panel panel-default">

            <div class="panel-heading"><h6 class="panel-title">Card Stock</h6></div>

            <div class="panel-body">
                <div class="block-inner">
                    <h6 class="heading-hr">
                        <i class="icon-clipboard"></i> Card Stock <small class="display-block">Informasi umum tentang proses purchasing</small>
                    </h6>
                </div>
                <div class="form-group {if {form_error('id_po')} != ''}has-warning{/if}">
                    <div class="row">
                        <div class="col-md-4 {if form_error('id_po')}has-warning{/if}">
                            <label>Supplier:</label>
                            {form_dropdown('id_po',$principals,set_value('id_po'),'data-placeholder="Purchase Order" class="select-full" tabindex="1" autofocus')}
                            {if form_error('id_po')}
                                <span class="label label-block label-danger text-left">{form_error('id_po') }</span>
                            {/if}
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
