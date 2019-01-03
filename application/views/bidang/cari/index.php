            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-30 header-title">Form Pencarian</h4>

                                    <form role="form" action="<?php echo base_url('index.php/bidang/cari/doCari'); ?>" method="POST">
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
                                            <label for="examplePerangkat">Perangkat Daerah</label>
                                            <select name="opd" class="form-control" require>
                                                <option value="none">------------Select Perangkat Daerah------------</option>
                                                <?php foreach($opd as $opd):?>
                                                    <option value="<?php echo $opd->id; ?>"><?php echo $opd->nama; ?> </option>
                                                <?php endforeach; ?>
                                            </select>
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