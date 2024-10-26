<p>Date From :
    <input type="text" id="TextBox1" />
</p>
<p>Date To :
    <input type="text" id="TextBox2" />
</p>
<p>Difference :
    <input type="text" id="TextBox3" />
</p>


<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
$("#TextBox1").datepicker({
    minDate: 0,
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var min = $(this).datepicker('getDate'); // Get selected date
        $("#TextBox2").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
    }
});

$("#TextBox2").datepicker({
    minDate: '0',
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var max = $(this).datepicker('getDate'); // Get selected date
        $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
        var start = $("#TextBox1").datepicker("getDate");
        var end = $("#TextBox2").datepicker("getDate");
        var days = (end - start) / (1000 * 60 * 60 * 24);
        $("#TextBox3").val(days);
    }
});
</script>