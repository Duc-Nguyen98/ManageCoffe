<script>
    function resetInputs() {
        var inputs = document.querySelectorAll('input[type=text], input[type=email],textarea');
        inputs.forEach(function(input) {
            input.value = '';
        });
    }
</script>