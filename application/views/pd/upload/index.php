            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-8">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-30 header-title">Form Upload Dokumen</h4>

                                    <form role="form" action="<?php echo base_url('index.php/pd/upload/doUpload'); ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleJenis">Jenis Dokumen</label>
                                            <select name="jenis_dokumen" class="form-control" require>
                                                <option value="none">------------Select Dokumen------------</option>
                                                <?php foreach($dokumen as $dokumen):?>
                                                    <option value="<?php echo $dokumen->id; ?>"><?php echo $dokumen->nama; ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="examplePerangkat">File</label>
                                            <input type="file" name="dok" class="form-control" accept="application/pdf application/zip application/msword application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                            <span class="help-block"><small>Ukuran Maksimal File Adalah 2Mb, dengan eksensi yang diperbolehkan adalah zip, pdf, docx. doc.</small></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="catatan">Tambah Catatan PD</label>
                                            <textarea class="form-control" name="catatan" rows="5"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Cari</button>
                                    </form>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2019 © Themed By Adminto. Coderthemes.com, Bappeda Kab. Sukabumi
                </footer>

            </div>