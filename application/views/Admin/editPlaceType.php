<div class="content-wrapper">
	<div class="row padtop">
		
		<div class="col-md-6 col-md-offset-2" style="margin-left: 150px;margin-top: 30px">
			<h2>Edit Language Type</h2>
			<?php echo form_open_multipart('admin/updateLanguageType','','') ?>
<input name="id" type="hidden" value="<?php echo $placeType[0]['id']; ?>">
			
			<div class="form-group">
				<label>Language Type</label><br>
				
				<textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3" name="ptype_name"><?php echo $placeType[0]['ptype_name'] ?></textarea>
			</div>
			
			
			

			<div class="form-group">
				<?php echo form_submit('Update','Update','class="btn btn-primary"'); ?>
			</div>
			<div>
      <?php if ($this->session->flashdata('class')): ?>
        <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dismissible" role="alert">

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>

  </button>
  <?php echo $this->session->flashdata('message'); ?>
  
    
</div>
              
            <?php endif; ?>
    </div>
			<?php echo form_close(); ?>
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
</div>