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
        //logging in and sending user to the user dashboard page
       $em = "am reusit";
        header("Location: ./home.php?success=$em");
        exit;
        }
       
    //     $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    //     $sql = "SELECT * FROM users WHERE reg_email='$email' AND reg_password='$passwordHash'";
    //     $result = mysqli_query($conn, $sql);

    //     if (password_verify($password, $passwordHash)) {
    //         $em = "Passss";
    //         header("Location: ./login.php?error=$em");
    //         exit;
    //     } else {
    //         echo "Password incorrect.";
    //     }
    // }
    //     if (mysqli_num_rows($result) > 0) {
    // // Parcurgem rezultatele
    // while ($row = mysqli_fetch_assoc($result)) {
    //     // Aici poți utiliza valorile din fiecare înregistrare
    //     echo "ID: " . $row["id"] . ", nume: " . $row["nume"] . ", prenume: " . $row["prenume"] . "Email: " . $row["reg_email"] . "<br>";
    // }
// } else {
//             $em = "Nu s-au găsit înregistrări.";
//             header("Location: ./login.php?error=$em");
//             exit;
    
// }

// // Închidem conexiunea la baza de date
// mysqli_close($conn);

//     }

 else {
    header("Location: ./login.php?error=error");
    exit;
}
            }
        }
?>