{* Extend our master template *}
{extends file="../../../master.tpl"}

{block name=content}
    <!-- Default panel -->
    <div class="panel panel-default">

        <div class="panel-heading"><h6 class="panel-title">User Group</h6></div>

        <div class="panel-body">
            <div class="block-inner">
                <h6 class="heading-hr">
                    <i class="icon-clipboard"></i> User Group
                    <small class="display-block">User Group</small>
                </h6>
            </div>
            <!-- Callout -->

            {if $success}
                <div class="callout callout-success fade in">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <p>{$success}</p>
                </div>
            {/if}
            {if $userGroup}
                <div class="panel panel-default">
                    <div class="datatable-tools">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Nama Group</th>
                                <th>Jumlah User</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {foreach $userGroup as $group }
                                <tr>
                                    <td>{$group['name_group']}</td>
                                    <td>{$group['jml_staff']}</td>
                                    <td>
                                        <div class="table-controls">
                                            <a href="{base_url('users/update-group-role/')}/{$group['id_group']}" class="btn btn-link btn-icon btn-xs tip" title="Edit Role"><i class="icon-pencil2"></i></a>
                                            <a href="{base_url('users/update-group/')}/{$group['id_group']}" class="btn btn-link btn-icon btn-xs tip" title="Edit Data"><i class="icon-pencil3"></i></a>
                                            <a href="{base_url('users/delete-group/')}/{$group['id_group']}" class="btn btn-link btn-icon btn-xs tip" title="Hapus Data" onclick="return confirm('Apakah anda yakin?');"><i class="icon-remove3"></i></a>
                                        </div>
                                    </td>
                                </tr>

                            {/foreach}
                            </tbody>
                        </table>
                    </div>
                </div>
            {/if}
        </div>
        <!-- /panel body -->

    </div>
    {*<div class="panel-body">*}
    {*<h6>Notes &amp; Information:</h6>*}
    {*Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.*}
    {*</div>*}
{/block}
