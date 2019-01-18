<?php
$message=''; 
$theFormula=''; 
//Final draft
  if(isset($_POST['convertTemp']) && isset($_POST['tEmp'])) {
    $convertTemp = $_POST['convertTemp'];
    $tEmp = $_POST['tEmp'];
    switch($convertTemp){
        case 'FtoC':
            $newTemp = (($tEmp - 32)* (5/9));
            break;
        case 'FtoK':
           $newTemp = (($tEmp - 32)* (5/9) + 273.15);
            break;
        case 'KtoF':
           $newTemp = (($tEmp - 273.15)* (9/5) + 32);
            break;
         case 'KtoC':
           $newTemp = ($tEmp - 273.15);
            break;
        case 'CtoK':
           $newTemp = ($tEmp + 273.15);
            break;
        case 'CtoF':
           $newTemp = (($tEmp * 9/5) + 32);
            break;      
    }
    echo "<h2 align='center'>The initial temperature was " . $tEmp . " and the converted temperature is: " . $newTemp . "</h2>";
  }
  else {
    echo'
      <html>
        <body>
          <h1 align="center">Convert a Temperature</h1>
          <form align="center" method="POST">
            Enter the tempurature you wish to convert:<input type="number" name="tEmp"> 
			
            <select name="convertTemp">
            	<option value="FtoC">Fahrenheit to Celsius</option>
                <option value="FtoK">Fahrenheit to Kelvin</option>
                <option value="KtoF">Kelvin to Fahrenheit</option>
                <option value="KtoC">Kelvin to Celsius</option>
                <option value="CtoK">Celsius to Kelvin</option>
                <option value="CtoF">Celsius to Fahrenheit</option>
			</select>
         
            <br>
            <br>
            <input type="submit" value="Convert Tempurature!">
          </form>
        </body>
      </html>
      
      
    ';
  }
?>
