<script>
    $(document).off('click', '#submit-btn').on('click', '#submit-btn', function(event) {
        event.preventDefault();
        event.stopPropagation();

        var service = $('#service').val();
        var func = $('#function').val();
        var datatype = $('#datatype').val();

        $.ajax({
            type: 'GET',
            url: 'http://localhost/www-api-workspace/call.php?service=' + service + '&func=' + func + '&data=' + datatype,

            cache: true,
            success: function(data) {
                console.log(data);
                console.log('success');
                $('#payload').html(data);
            },
            error: function(xhr, status, thrownError, error){
                console.log('error');
                console.log(xhr);
                console.log(status);
                console.log(thrownError);
                console.log(error);
            },
            async: true
        });
    });
</script>