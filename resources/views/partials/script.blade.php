<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="/vendor/chart.js/Chart.min.js"></script>
<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="/js/demo/chart-area-demo.js"></script>
<script src="/js/demo/chart-pie-demo.js"></script>
<script src="/js/demo/datatables-demo.js"></script>

<!-- Custom fonts for this template-->
<script src="https://kit.fontawesome.com/240028c80f.js" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#addNewCustomer').on('click', function() {
            if($('#addNewCustomer').is(':checked')) {
                $('#customer').hide();
                $('#newCustomer').show();
            } else {
                $('#customer').show();
                $('#newCustomer').hide();
            }
        });
    });
</script>
