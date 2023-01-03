<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Saul Rodrigo 2023</div>
                            <div>
                                <a href="https://www.facebook.com/luis.qmayta" targer="_blank">Facebook</a>
                                &middot;
                                
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>/js/jquery-3.5.1.slim.min.js" ></script>
        <script src="<?php echo base_url(); ?>/js/bootstrap.bundle.min.js" ></script>
        <script src="<?php echo base_url(); ?>/js/scripts.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery.dataTables.min.js" ></script>
        <script src="<?php echo base_url(); ?>/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/demo/datatables-demo.js"></script>
        <script>
            $('#modal-confirma').on('show.bs.modal', function(e)
            {
                $(this).find('.btn-ok'). attr('href', $(e.relatedTarget).data('href'))
            
            });
        </script>
    </body>
</html>
