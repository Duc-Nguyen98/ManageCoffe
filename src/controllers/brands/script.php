<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script type="text/javascript">
    function submitData(action) {
        $(document).ready(function() {
            var data = {
                action: action,
                id: $("#id").val(),
                name: $("#name").val(),
                slug: $("#slug").val(),
                image: $("#image").val(),
                note: $("#note").val(),
            };

            $.ajax({
                url: 'handleAction.php',
                type: 'post',
                data: data,
                success: function(response) {
                    alert(response);
                    if (response == "Deleted Successfully") {
                        $("#" + action).css("display", "none");
                    }
                }
            });
        });
    }
</script>