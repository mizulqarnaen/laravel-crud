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

        $('.edit-transaction-btn').on('click', function() {
            let transaction = $(this).data('transaction');
            let that = $('#editTransactionModal');

            that.find('#transactionId').val(transaction.id);
            that.find('#customer').val(transaction.customer_id).change();
            that.find('#paymentType').val(transaction.payment_type).change();
            that.find('#shippingCost').val(transaction.shipping_cost);
            that.find('#totalAmount').val(transaction.total_amount);
            that.find('#description').val(transaction.description);
            that.find('#source').val(transaction.source).change();

            that.modal('show');
        });
    });
</script>
