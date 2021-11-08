<?php  
session_start();
include('dbcon.php');

if(isset($_POST['save_contact']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $postData = [
        'fname'=>$first_name,
        'lname'=>$last_name,
        'email'=>$email,
        'phone'=>$phone,

    ];
     
    $ref_table = "contacts";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if ($postRef_result) {
        $_SESSION['status']="Contact Added Successfully";
        header('location: index.php');
    }
    else{
        $_SESSION['status']="Contact Note Added";
        header('location: index.php');
    }

}