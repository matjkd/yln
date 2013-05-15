
<?php if($this->session->flashdata('message')) { ?>
<div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?=$this->session->flashdata('message')?>
</div>

<?php } ?>

