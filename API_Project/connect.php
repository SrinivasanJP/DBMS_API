<?php
    $register_no=$_POST['reNo'];
    $Name=$_POST['Name'];
    $School=$_POST['School'];
    $cgpa=$_POST['cgpa'];
    $con=new mysqli('localhost','root','','academic');
    if($con->connect_error){
        die('connection faild: '.$con->connection_error);
    }else{
        $statement=$con->prepare("insert into student(Register_No, Name, School, cgpa) values (?, ?, ?, ?)");
        $statement->bind_param("sssd",$register_no,$Name,$School,$cgpa);
        $statement->execute();
        echo "Successfully Submitted...";
        $statement->close();
        $con->close();
        die();
    }
?>