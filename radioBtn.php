<!DOCTYPE html>
<html>
    <body>
        <?php
            /*
                If the user submitted the form, set the values to the 
                input from post
            */
            $outString = "";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                /*
                    'rad' is an array of input from both radio buttons
                    rad[i] is accessed by '$_POST["rad"][i]'
                */
                $outString = $_POST["rad"][0] . "to" . $_POST["rad"][1];
            }
            /*
                If the user entered the page without submitting the form
                first, do nothing, leaving 'val1' and 'val2' as null values
            */
        ?>
        <form method="POST">
            <div id="group1">
                <!-- First group of radio buttons 'rad[0]' -->
                <lable>Group 1</lable>
                <input type="radio" name="rad[0]" value="F">F</input>
                <input type="radio" name="rad[0]" value="C">C</input>
                <input type="radio" name="rad[0]" value="K">K</input>
            </div>
            <div id="group2">
                <!-- Second group of radio buttons 'rad[1]' -->
                <lable>Group 2</lable>
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