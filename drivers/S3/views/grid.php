<?php
  $dataurl = "ajax.php?module=filestore&driver=S3&command=getJSON&jdata=grid";
?>
<br/>
<div id="toolbar-s3grid">
  <a href='?display=filestore&driver=S3&view=form' class='btn btn-default'><i class="fa fa-plus"></i>&nbsp;<?php echo _("Add S3 Bucket")?></a>
</div>
<table id="s3grid"
    data-url="<?php echo $dataurl?>"
    data-cache="false"
    data-cookie="true"
    data-cookie-id-table="s3grid"
    data-toolbar="#toolbar-s3grid"
    data-maintain-selected="true"
    data-show-columns="true"
    data-show-toggle="true"
    data-toggle="table"
    data-pagination="true"
    data-search="true"
    class="table table-striped">
  <thead>
    <tr>
      <th data-field="bucket"><?php echo _("Bucket")?></th>
      <th data-field="desc"><?php echo _("Description")?></th>
      <th data-field="id" data-formatter="S3LinkFormatter"><?php echo _("Actions")?></th>
    </tr>
  </thead>
</table>
<script>
function S3LinkFormatter(value, row, index){
    var html = '<a href="?display=filestore&driver=S3&view=form&id='+value+'"><i class="fa fa-pencil"></i></a>';
    html += '&nbsp;<a href="?display=filestore&driver=S3P&action=delete&id='+value+'" class="delAction"><i class="fa fa-trash"></i></a>';
    return html;
}
</script>