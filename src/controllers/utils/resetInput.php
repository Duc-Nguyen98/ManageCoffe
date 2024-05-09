<script>
    function resetInputs() {
        var inputs = document.querySelectorAll('input[type=text], input[type=email]');
        inputs.forEach(function(input) {
            input.value = '';
        });
    }
</script>