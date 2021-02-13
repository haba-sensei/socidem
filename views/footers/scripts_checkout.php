<script>
    function proPat(){
        $.ajax({
            type: $('#checkout_form').attr('method'),
            url: $('#checkout_form').attr('action'),
            data: $('#checkout_form').serialize()
             
        }); 
    }
</script>