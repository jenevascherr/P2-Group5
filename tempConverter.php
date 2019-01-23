<?php
$message=''; 
$theFormula=''; 

  //A quick formula to check if what the user typed as tEmp was a numeric number and not a string
  if(is_numeric($tEmp){

  // If the page is accessed by the user submitting the form (method = "post") use the submitted data to calculate the tempurature.
  if(isset($_POST['convertTemp']) && isset($_POST['tEmp'])) {
    $convertTemp = $_POST['convertTemp'];
    $tEmp = $_POST['tEmp'];
    // The type of conversion is determined the string $convertTemp ("FtoC" = Farenheight to Celcius)
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
    echo "<h2 align='center'>The initial temperature was " . $tEmp . "&#176 and the converted temperature is: " . $newTemp . "&#176 </h2>";
  }
  // When the page is initialy loaded (method = get) display the form
  else {
    echo'
      <html>
        <body>
          <h1 align="center">Convert a Temperature</h1>
          <form align="center" method="POST">
            Enter the tempurature you wish to convert:<input type="number" name="tEmp"> 
			
	    <!-- Currently, the application uses a dropdown menu. The submited value is converted into $convertTemp -->
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
      </html>';
	    //Shows an error message if what was entered was not numeric
      } else {
	  echo var_export($tEmp, true) . " is not an numeric number." , PHP_EOL;
	  echo "Please try again"
  	}
  }
?>
      
