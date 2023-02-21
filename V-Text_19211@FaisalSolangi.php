<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Numbers</title>
</head>

<body>


    <center>

        <form method="POST">
            <label> Enter Your Text:</label>
            <input type="text" name="text" placeholder="Enter Your Text Here">
            <input type="submit" name="submit" value="Go">
        </form>
        <br />

        <?php

        if (isset($_REQUEST['submit'])) {

            $text = $_REQUEST['text'];

            for ($i = 0; isset($text[$i]); $i++) {
                echo $text[$i] . "<br/>";
            }
        }
        ?>
    </center>


</body>

</html>