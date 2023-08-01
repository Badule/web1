

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!--favicon-->
    <link rel="icon" href="./assets/logo.png" />

    <link rel="stylesheet" href="../styles/main.css" />
    <link rel="stylesheet" href="../styles/hhome.css" />

    <title>Ally</title>
</head>

<body>
    
    <nav>

        <div class="custom-container">

            <a href="index.html" class="logo-link">
                <img class="logo" src="../assets/logo.png" alt="logo" />
            </a>
            <div class="menu-icon-container">
              
                <span class="material-icons menu-icon"> menu </span>
                <input type="checkbox" />
                <ul>
                    <li>
                        <a href="../pages/flori.html"> Buchete de flori </a>
                    </li>
                    <li>
                        <a href="../pages/registration.php"> Creare Cont </a>
                    </li>
                    <li class="about-us">
                        <a href="pages/about.html">
                            Despre Noi
                       
                            <span class="material-icons arrow-down-icon">
                                arrow_drop_down
                            </span>
                        </a>
                   
                        <div class="submenu">
                            <a href="index.html">Flori</a>
                            <a href="../pages/about.html">Despre Noi</a>
                        </div>
                    </li>
                    <li>
                        <a href="../pages/contact.html"> Contact </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="shadow w-450 p-3 ">
                <h2 class="w display-1 text-center "  > Welcome </h2>
                <a href="logout.php" class="btn btn-warning ">Logout</a>
            </div>

        </div>
    </section>
</body>
</html>
