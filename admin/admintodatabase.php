<?php
if (isset($_POST['send_values']))
{
    $conn = mysqli_connect("localhost", "root", "", "myprojo");
        //check connection
        if($conn===false){
            die("ERROR: could not connect . " . mysqli_connect_error());
        }else{
            $rows=$result->fetch_assoc();
            $first=$rows['sender_name'];
            $second=$rows['date'];
            $third=$rows['organization'];
            $forth=$rows['announcement'];
            $checked=$_POST['check'];
            if ($checked===True){
                $sql="INSERT INTO toannouncement VALUES('id', '$first', '$second', '$third', '$forth')";
                if (mysqli_query($conn, $sql)){
                    echo "<script language='javascript'>";
                    echo "alert('Success')";
                    echo "</script>";
                }else{
                    echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
                }
            }

        }

}
?>