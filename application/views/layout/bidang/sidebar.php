            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="<?php echo base_url('assets/admin/images/users/avatar-1.jpg'); ?>" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="mdi mdi-adjust"></i></div>
                        </div>
                        <h5><a href="#"><?php echo strtoupper($admin_log['username']);?></a> </h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" >
                                    <i class="mdi mdi-settings"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#" class="text-custom">
                                    <i class="mdi mdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Navigation</li>

                            <li>
                                <a href="<?php echo base_url('index.php/bidang/dashboard'); ?>" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('index.php/bidang/cari'); ?>" class="waves-effect"><i class="mdi mdi-format-font"></i> <span> Cari Dokumen </span> </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('index.php/bidang/download'); ?>" class="waves-effect"><i class="mdi mdi-email"></i><span> Dokumen </span></a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('index.php/login/logout'); ?>" class="waves-effect"><i class="mdi mdi-logout"></i><span> Logout </span></a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->
