<?php
//session_start();
//include_once("connection.php");
if (isset($_POST['add-members-btn']))
{
    $conn = mysqli_connect("localhost", "root", "", "myprojo");
        //check connection
        if($conn===false){
            die("ERROR: could not connect . " . mysqli_connect_error());
        }
    $jumuiya=$_REQUEST['jumuiya'];
    $firstname=$_REQUEST['firstname'];
    $lastname=$_REQUEST['lastname'];
    $surname=$_REQUEST['surname'];

    if($jumuiya==="joseph"){
        $sql="INSERT INTO josephmembers VALUES ('id', '$firstname', '$lastname', '$surname')";
        if(mysqli_query($conn, $sql)){
            echo"<h3> data Updated successifully </h3>";
            echo nl2br("\n$firstname \n" . "$lastname\n". "$surname" );
        }else{
            echo "Failed to insert into St Joseph page";
        }
    }elseif ($jumuiya==="luke"){
        $sql="INSERT INTO lukemembers VALUES ('id', '$firstname', '$lastname', '$surname')";
        if(mysqli_query($conn, $sql)){
            echo"<h3> data Updated successifully </h3>";
            echo nl2br("\n$firstname \n" . "$lastname\n". "$surname" );
        }else{
            echo "Failed to insert into st luke page";
        }
    }elseif ($jumuiya==="ann"){
        $sql="INSERT INTO annmembers VALUES ('id', '$firstname', '$lastname', '$surname')";
        if(mysqli_query($conn, $sql)){
            echo"<h3> data Updated successifully </h3>";
            echo nl2br("\n$firstname \n" . "$lastname\n". "$surname" );
        }else{
            echo "Failed to insert into St Ann page";
        }
    }elseif ($jumuiya==="michael"){
        $sql="INSERT INTO michaelmembers VALUES ('id', '$firstname', '$lastname', '$surname')";
        if(mysqli_query($conn, $sql)){
            echo"<h3> data Updated successifully </h3>";
            echo nl2br("\n$firstname \n" . "$lastname\n" . "$surname");
        }else{
            echo "Failed to insert into St Michael Members page";
        }
    }
    //close connection
    mysqli_close($conn);

}

 

