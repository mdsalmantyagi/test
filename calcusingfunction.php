<input type="radio" value= "Addition" name="calcu"> Addition .<br />
    <input type="radio" value= "Subtraction" name="calcu"> Subtraction .<br />
    <input type="radio" value= "Multiplication" name="calcu"> Multiplication .<br />
    <input type="radio" value= "Division" name="calcu"> Division .<br />
<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$calcu = $_POST['calcu'];

    function calculate($n1,$n2)
    {
        switch('$calcu')
        {
        case "Addition";
            $compute = $n1 + $n2; 
            break;
        case "Subtraction";
            $compute = $n1 - $n2; 
            break;
        case "Multiplication";
            $compute = $n1 * $n2; 
            break;
        case "Division";
            $compute = $n1 / $n2; 
            break;
        }
    }
echo "$calcu <br /> <br /> 1st Number: $num1 <br /> 2nd Number: $num2 <br /><br />";
echo "Answer is:" .calculate($num1,$num2);
?>