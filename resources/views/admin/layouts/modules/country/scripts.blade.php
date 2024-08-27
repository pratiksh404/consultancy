<script>
    $(function() {
        $('#name').on('keyup', function() {
            var name = $('#name').val();
            $('#meta_name').val(name);
        });
        $('#excerpt').on('keyup', function() {
            var excerpt = $('#excerpt').val();
            $('#meta_description').val(excerpt);
        });
    });
</script>
