        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/admin/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/popper.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/detect.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/fastclick.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/jquery.blockUI.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/waves.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/jquery.nicescroll.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/jquery.slimscroll.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/jquery.scrollTo.min.js'); ?>"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/plugins/jquery-knob/excanvas.js'); ?>"></script>
        <![endif]-->
        <script src="<?php echo base_url('assets/admin/plugins/jquery-knob/jquery.knob.js'); ?>"></script>

        <!--Morris Chart-->
		<script src="<?php echo base_url('assets/admin/plugins/morris/morris.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/plugins/raphael/raphael-min.js'); ?>"></script>

        <!-- Dashboard init -->
        <script src="<?php echo base_url('assets/admin/pages/jquery.dashboard.js'); ?>"></script>

        <!-- App js -->
        <script src="<?php echo base_url('assets/admin/js/jquery.core.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/jquery.app.js'); ?>"></script>

        <!-- Required datatable js -->
        <script src="<?php echo base_url('assets/admin/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/plugins/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

        <!-- Key Tables -->
        <script src="<?php echo base_url('assets/admin/plugins/datatables/dataTables.keyTable.min.js'); ?>"></script>

        <!-- Responsive examples -->
        <script src="<?php echo base_url('assets/admin/plugins/datatables/dataTables.responsive.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/plugins/datatables/responsive.bootstrap4.min.js'); ?>"></script>


        <script type="text/javascript">
            $(document).ready(function () {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            });

        </script>
    </body>
</html>