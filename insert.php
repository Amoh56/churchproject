<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result after trying to send to secretary</title>
</head>
<body>
    <center>
        <?php
        //servername=> localhost
        //username=> root
        //password=> empty
        //dbName=myprojo

        $conn = mysqli_connect("localhost", "root", "", "myprojo");
        //check connection
        if($conn===false){
            die("ERROR: could not connect . " . mysqli_connect_error());
        }
        //Taking all five values from the form data
        $Sname = $_REQUEST['Sname'];
        $date = $_REQUEST['date'];
        $org = $_REQUEST['org'];
        $announcement = $_REQUEST['announcement'];

        //perfoming insert query execution
        $sql = "INSERT INTO sender VALUES ('id', '$Sname', '$date', '$org', '$announcement')";

        if(mysqli_query($conn, $sql)){
            echo"<h3> Your Message Has Been Successfully Forwarded to The Church </h3>";
            echo nl2br("\n$Sname \n" . "$date\n" . "$org \n" . "$announcement");
        } else {
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
        //close connection
        mysqli_close($conn);


        ?>
    </center>
    
</body>
</html>