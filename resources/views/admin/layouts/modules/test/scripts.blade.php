<script>
    $(function() {
        $('#test_date').daterangepicker({
            singleDatePicker: true, // Enable single date selection
            minDate: moment(), // Disable past dates
            locale: {
                format: 'YYYY-MM-DD' // Set date format
            }
        });
    });
</script>
