<main>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h4><i><b>RKPD Murni</b></i></h4>
        <hr>
        <div class="box-file">
          <p>File yang harus di download</p>

          <table class="highlight">
            <thead>
              <tr>
                <th> No </th>
                <th> Dokumen </th>
                <th> Ket </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
              <?php
              if($download){
              $no =1;
              foreach ($download as $data) {
                echo '<tr><td>'.$no.'</td><td>'.$data->dok.'</td><td>'.$data->ket.'</td><td><a class="waves-effect waves-light btn" href="'.base_url('public/download/rkpd/murni/').$data->file.'">Dowload</a></td></tr>';
                $no++;
                }
              } else {
                  echo '<tr><td colspan=4>Tidak ada data</td></tr>';
              }

              ?>
            </tbody>

          </table>

        </div>

        <p> File Hasil Upload <a class="waves-effect btn right" href="<?php echo site_url('rkpd/upload/murni');?>"><i class="material-icons">cloud_upload</i> &nbsp;Unggah</a></p>
        <table class="highlight">
          <thead>
            <tr>
              <th> No </th>
              <th> Dokumen </th>
              <th> Ket </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            <?php
            if($upload){
              $no =1;
              foreach ($upload as $data) {
                echo '<tr><td>'.$no.'</td><td>'.$data->dok.'</td><td>'.$data->ket.'</td><td><a class="waves-effect waves-light btn" href="'.base_url('public/upload/rkpd/murni/').$data->file.'">Dowload</a></td></tr>';
                $no++;
              }
            } else {
              echo '<tr><td colspan=4>Tidak ada data</td></tr>';
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
