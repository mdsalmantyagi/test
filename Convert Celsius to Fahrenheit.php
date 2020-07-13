<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>js</title>
</head>
<body>
<script type="text/javascript">
	    function convertToF(celsius) {
      // Only change code below this line
      var fahrenheit = (celsius * (9/5)) + 32;

      // Only change code above this line
      if ( typeof fahrenheit !== 'undefined' ) {
      return fahrenheit;
      } else {
        return 'fahrenheit not defined';
      }
    }

    // Change the inputs below to test your code
    convertToF(30);
</script>
</body>
</html>