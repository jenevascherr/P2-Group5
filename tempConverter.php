<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            /*
                If the user submitted the form, set the values to the 
                input from post
            */
            $outString = "";
            $newTemp = "";
            // If the method was post
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                // If there are values for the tempurature and conversion
                if(isset($_POST['rad']) && isset($_POST['inTemp'])) {
                    $conversion = $_POST["rad"][0] . "to" . $_POST["rad"][1];
                    $temp = $_POST['inTemp'];
                    //A quick formula to check if what the user typed as tEmp was a numeric number and not a string
                    if(!is_numeric($temp)){
                        $outString = "Please input a number";
                    }
                    else{
                        /*
                            'rad' is an array of input from both radio buttons
                            rad[i] is accessed by '$_POST["rad"][i]'
                        */
                        switch($conversion)
                        {
                            case 'FtoC':
                                $newTemp = (($temp - 32)* (5/9));
                                $outString = $temp . "F equals " . $newTemp . "C";
                                break;
                            case 'FtoK':
                                $newTemp = (($temp - 32)* (5/9) + 273.15);
                                $outString = $temp . "F equals " . $newTemp . "K";
                                break;
                            case 'KtoF':
                                $newTemp = (($temp - 273.15)* (9/5) + 32);
                                $outString = $temp . "K equals " . $newTemp . "F";
                                break;
                            case 'KtoC':
                                $newTemp = ($temp - 273.15);
                                $outString = $temp . "K equals " . $newTemp . "C";
                                break;
                            case 'CtoK':
                                $newTemp = ($temp + 273.15);
                                $outString = $temp . "C equals " . $newTemp . "F";
                                break;
                            case 'CtoF':
                                $newTemp = (($temp * 9/5) + 32);
                                $outString = $temp . "C equals " . $newTemp . "F";
                                break;   
                            // Default occurs when the user selects the same unit on both forms
                            default:
                                $outString = $temp . " = " . $temp;
                                break;
                        }
                    }
                }
            }
            /*
                If the user entered the page without submitting the form
                first, do nothing, leaving 'val1' and 'val2' as null values
            */
        ?>
        <form method="POST">
            <lable>Convert </lable>
            <input type="text" name="inTemp" />
            <div id="group1">
                <!-- First group of radio buttons 'rad[0]' -->
                <lable>From: </lable>
                <input type="radio" name="rad[0]" value="F">F</input>
                <input type="radio" name="rad[0]" value="C">C</input>
                <input type="radio" name="rad[0]" value="K">K</input>
            </div>
            <div id="group2">
                <!-- Second group of radio buttons 'rad[1]' -->
                <lable>To:</lable>
                <input type="radio" name="rad[1]" value="F">F</input>
                <input type="radio" name="rad[1]" value="C">C</input>
                <input type="radio" name="rad[1]" value="K">K</input>
            </div>
            <input type="submit" value="Submit"></input>
        </form>
        <?php
            echo $outString;
        ?>
    </body>
</html>     
