<?php
session_start();

if (
    isset($_POST['email']) &&
    isset($_POST['password'])
) {
    include "./conn.php";
    

    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordHash = $_POST['password'];

    $data = "&email=" . $email;

    if (empty($email)) {
        $em = "Email is required";
        header("Location: ./login.php?error=$em&$data");
        exit;
    } else if (empty($password)) {
        $em = "Password is required";
        header("Location: ./login.php?error=$em");
        exit;
            } else {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $id=$_SESSION['id'];
        $nume = $_SESSION['nume'];

        $query = "SELECT * FROM users WHERE reg_email = '$email' AND reg_password='$passwordHash'";
        $results = mysqli_query($conn,$query);
        if ($results == true)
        {
        
       $em = "Am reusit";
        header("Location: ./home.php?success=$em");
        exit;
        }
     



 else {
    header("Location: ./login.php?error=error");
    exit;
}
            }
        }
?>
