<script src="{{asset('assets/js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <script src="{{asset('assets/js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/chart.js/dist/Chart.extension.js')}}"></script>
  <!--   Argon JS   -->
  <script src="{{asset('assets/js/argon-dashboard.min.js?v=1.1.2')}}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tables').DataTable();
        });
    </script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.bundle.min.js"></script>
   <!-- Custom JavaScript to handle the toggle button -->
   <script>
       $(document).ready(function () {
           $('#status-toggle').change(function () {
               if ($(this).is(':checked')) {
                   $('#status-input').val('On');
               } else {
                   $('#status-input').val('Off');
               }
           });
       });
   </script>
  <script>
    $(document).ready(function() {
        // Increase quantity
        $('.cart_quantity_up').click(function() {
            var input = $(this).siblings('.cart_quantity_input');
            var newValue = parseInt(input.val()) + 1;
            input.val(newValue);
            updateCartTotal();
        });

        // Decrease quantity
        $('.cart_quantity_down').click(function() {
            var input = $(this).siblings('.cart_quantity_input');
            var newValue = parseInt(input.val()) - 1;
            if (newValue >= 1) {
                input.val(newValue);
                updateCartTotal();
            }
        });

        function updateCartTotal() {
            // Calculate and update the total price
            var cartRows = $('.product-row');
            var cartTotal = 0;
            cartRows.each(function() {
                var price = parseFloat($(this).find('.unit-price').text().replace('$', ''));
                var quantity = parseInt($(this).find('.cart_quantity_input').val());
                var total = price * quantity;
                $(this).find('.cart_total_price').text('$' + total.toFixed(2));
                cartTotal += total;
            });
            $('#cart-subtotal').text('$' + cartTotal.toFixed(2));
            $('#cart-total').text('$' + cartTotal.toFixed(2));
        }
    });
</script>



 