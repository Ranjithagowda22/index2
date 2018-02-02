<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
class Calculation{

 function add($a, $b){
  echo "Summation = ". ($a+$b)."<br>";
 }

 function sub($a, $b){
  echo "Subtraction = ".($a-$b)."<br>";
 }

 function mul($a, $b){
  echo "Multiplication = ".($a*$b)."<br>";
 }

 function div($a, $b){
  echo "Division = ".($a/$b);
 }
}
?>



<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<form action="" method="post">
  <table>
 <tr>
   <td>Enter the first Number : </td>
   <td><input type="number" name ="num1"/></td>
 </tr>

 <tr>
   <td>Enter the second Number : </td>
   <td><input type="number" name ="num2"/></td>
 </tr>
 
 <tr>
   <td>Enter the operation : </td>
   <td><select name ="op">
   <option value="+">add</option>
   <option value="-">sub</option>
   <option value="*">mul</option>
   <option value="/">div</option>
   </select></td>
 </tr>

 <tr>
   <td></td>
   <td><input type="submit" name="calculation" 
          value="Calculate" /></td>
 </tr>

  </table>
</form>
</body>
</html>
<?php
  if(isset($_POST['calculation'])){
   $numOne = $_POST['num1'];
   $numTwo = $_POST['num2'];
   $opp = $_POST['op'];
 if(empty($numOne) or empty($numTwo)){
   echo "<span style='color:#EE6554'>Field must 
           not be empty.</span><br>";
 } else {
   echo "First Number is: ".$numOne. " Second Number 
          is ".$numTwo."<br/>";
 $cal = new Calculation;
 if($opp == "+")
 {
 $cal->add($numOne, $numTwo);
 }
 else
 {
 $cal->sub($numOne, $numTwo);
 $cal->mul($numOne, $numTwo);
 $cal->div($numOne, $numTwo);
 }
  }
}
?>