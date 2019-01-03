<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-8">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-30 header-title">Form Upload Dokumen</h4>

                                    <form role="form" action="<?php echo base_url('index.php/pd/process/doComment'); ?>" method="POST" enctype="multipart/form-data">
                                        <?php foreach($dokumen as $dokumen):?>
                                        <input type="hidden" name="t_id" value="<?php echo $dokumen->id; ?>">
                                        <input type="hidden" name="filename" value="<?php echo $dokumen->file; ?>">
                                        <div class="form-group">
                                            <label for="exampleJenis">Jenis Dokumen</label>
                                            <input type="text" class="form-control" name="jenis_dokumen" disabled value="<?php echo $dokumen->jenis_dok;  ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="examplePerangkat">File</label>
                                            <input type="file" name="dok" class="form-control" accept="application/pdf application/zip application/msword application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                            <span class="help-block"><small>Ukuran Maksimal File Adalah 3Mb, dengan eksensi yang diperbolehkan adalah zip, pdf, docx. doc.</small></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="catatan_bappeda">Catatan Bappeda</label>
                                            <textarea class="form-control" name="catatan" rows="5" disabled> <?php echo $dokumen->catatan;  ?> </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="catatan_opd">Tambah Catatan PD</label>
                                            <textarea class="form-control" name="catatan" rows="5"></textarea>
                                        </div>
                                        <?php endforeach; ?>
                                        <button type="submit" class="btn btn-primary">Perbaharui</button>
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