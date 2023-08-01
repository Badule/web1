<?php


if (
    isset($_POST['nume']) &&
    isset($_POST['prenume']) &&
    isset($_POST['email']) &&
    isset($_POST['password']) &&
    isset($_POST['confirmpassword'])
) {

    include "./conn.php";

    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $data = "name=" . $nume . "&prenume=" . $prenume . "&email=" . $email;
  
    if (empty($nume)) {
        $em = "First name is required";
        header("Location:./registration.php?error=$em&$data");
        exit;

    } else if (empty($prenume)) {
        $em = "Second name is required";
        header("Location:./registration.php?error=$em&$data");
        exit;

    } else if (empty($email)) {
        $em = "Email is required";
        header("Location:./registration.php?error=$em&$data");
        exit;

    } else if (empty($password)) {
        $em = "Password is required";
        header("Location:./registration.php?error=$em");
        exit;

    } else if (empty($confirmpassword)) {
        $em = "Confirm password is required";
        header("Location:./registration.php?error=$em");
        exit;

    } else {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (nume,prenume, reg_email, reg_password) VALUES (?, ?, ?,?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);

        if ($prepareStmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $nume, $prenume, $email, $passwordHash);
            mysqli_stmt_execute($stmt);
            header("Location:./registration.php?success=Your account has been created successuflly");

        } else {
            die("Location:./registration.php?error=Try again !");
        }
    }
} else {
    header("Location:./registration.php?error=error");
    exit;
}

?>
