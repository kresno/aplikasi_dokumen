<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">Daftar Dokumen yang telah di upload</h4>
                                    <p class="text-muted font-14 m-b-30">
                                        Pada Tabel ini merupakan daftar dokumen yang telah di upload oleh masing-masing perangkat daerah    
                                    </p>

                                    <table id="datatable" class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis Dokumen</th>
                                            <th>Catatan</th>
                                            <th>File</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php $count=0; if($dokumen>0) { foreach($dokumen as $dokumen): ?>
                                        <tr>
                                            <td> <?php echo ++$count; ?> </td>
                                            <td> <?php echo $dokumen->jenis_dok; ?> </td>
                                            <td> <?php echo $dokumen->catatan; ?> </td>
                                            <td> <a href="<?php echo base_url().'public/download/template/'.$dokumen->file; ?>"><?php echo $dokumen->file; ?></td>
                                        </tr>
                                            
                                        <?php endforeach; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2019 © Themed By Adminto. Coderthemes.com, Bappeda Kab. Sukabumi
                </footer>

            </div>