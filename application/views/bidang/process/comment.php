            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-8">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-30 header-title">Form Comment Dokumen</h4>

                                    <form role="form" action="<?php echo base_url('index.php/bidang/process/doComment'); ?>" method="POST">
                                        <?php foreach($dokumen as $dokumen): ?>
                                        <input type="hidden" value="<?php echo $dokumen->id; ?>" name="t_id">
                                        <div class="form-group">
                                            <label for="jenis_dok">Jenis Dokumen</label>
                                            <input type="text" class="form-control" disabled="" value="<?php echo $dokumen->opd; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_dok">Jenis Dokumen</label>
                                            <input type="text" class="form-control" disabled="" value="<?php echo $dokumen->jenis_dok; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_dok">File</label>
                                            <input type="text" class="form-control" disabled="" value="<?php echo $dokumen->file; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_dok">Catatan</label>
                                            <textarea class="form-control" name="catatan" rows="5"></textarea>
                                        </div>
                                        <?php endforeach; ?>
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