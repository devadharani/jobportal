
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#submit").on("click", function(){
            window.location.href = "apply";
            //$(this).val('sublitted');
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#applied_form").on('submit', function () {
            var datas=$("#applied_form").serialize();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': 'csrf-token'},
                method: "POST",
                url:"form_data",
                 data: datas,

            });
        });
    });
</script>
