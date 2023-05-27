<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/vendor/jquery-validate/jquery.validate.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="/js/demo/datatables-demo.js"></script>

<!-- Custom fonts for this template-->
<script src="https://kit.fontawesome.com/240028c80f.js" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('.form-transaction').validate({
            rules: {
                "newCustomer": {
                    required: true,
                    lettersonly: true
                },
                "shippingCost": {
                    required: true,
                    digits: true
                },
                "totalAmount": {
                    required: true,
                    digits: true,
                    minlength: 3,
                },
            },
            messages: {
                "newCustomer": {
                    required: "Nama customer wajib diisi!",
                    lettersonly: "hanya huruf yang dibolehkan"
                },
                "shippingCost": {
                    required: "Ongkos kirim wajib diisi!",
                    digits: "hanya angka yang dibolehkan"
                },
                "totalAmount": {
                    required: "Total amount wajib diisi!",
                    digits: "hanya angka yang dibolehkan",
                    minlength: "minimal 3 digit angka"
                }
            }
        });

        $.validator.addMethod(
            "lettersonly",
            function(value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            },
            "Letters only please"
        );

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

        $(".alert-danger").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-danger").slideUp(500);
        });
    });
</script>
