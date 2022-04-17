<div class="container">
  <div class="row">
    <div style="margin-top:30px;margin-left: 150px;">
      <!--Material textarea-->

      <?php echo form_open_multipart('Admin/placeTypeAdd', '', '') ?>
      <h2>Add Language Type</h2>
      <div>
        <?php if ($this->session->flashdata('class')) : ?>
          <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dismissible" role="alert">

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>

            </button>
            <?php echo $this->session->flashdata('message'); ?>


          </div>

        <?php endif; ?>
      </div>
      <input name="addedBy" type="hidden" value="<?php echo $this->session->userdata('name') ?>">
      <div class="form-group">
        <label>Language Type</label>
        <input type="text" name="ptype_name" class="form-control">
      </div>



      <a href="<?php echo base_url('Admin/addLanguageType') ?>">


        <button class="btn btn-primary">AddLanguageType</button>

      </a>



    </div>
  </div>
</div>