<?php

    $conn=mysqli_connect('localhost','root','','user_db');
    if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $sql="Insert into user_form(Name,Email,Phone,Subject,Message) values ('$name','$email','$phone','$subject','$message')";
    mysqli_query($conn,$sql);

    header('localhost:contact_us.php');
}else{
    echo'we will reach you back';
}
    
?>
