<main>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h4><i><b>Upload File</b></i></h4>
        <div style="color:red">
        	<?php echo validation_errors(); ?>
          <?php if(isset($error)){print $error;}?>
        </div>
        <?php
        echo form_open_multipart('rkpd/aksi_upload');
        ?>
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="RKPD murni" id="jenis_dokumen" type="text" class="validate" name="nama" required>
            <label for="Jenis Dokumen">Jenis Dokumen</label>
          </div>
        </div>
        <div class="row">
          <div class="col s6">
            <div class="file-field input-field">
              <div class="btn">
                <span>File</span>
                <input type="file" name="dok">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text"  placeholder="max upload 2mb">
              </div>
            </div>
          </div>
        </div>
        <input type="hidden" name="state" value="<?php echo $state; ?>">

        <!-- <input type="file" name="dok">
        <input type="text" name="nama">
        <input type="hidden" name="state" value="<?php echo $state; ?>"> -->
        <button class="btn" type="submit">Upload Dokumen</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</main>
