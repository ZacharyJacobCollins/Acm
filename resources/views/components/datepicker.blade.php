<input name="date" id="datepicker" type="date" class="datepicker">

<script>

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });

</script>