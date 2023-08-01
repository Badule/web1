


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <!--favicon-->
  <link rel="icon" href="../assets/logo.png" />

  <link rel="stylesheet" href="../styles/main.css" />

  <link rel="stylesheet" href="../styles/registration.css" />

  <title>Ally</title>
</head>

<body>
<nav>
    <div class="custom-container">
      <a href="../index.html" class="logo-link">
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
      <a href="./registration.php"> Creare Cont </a>
    </li>
    <li class="about-us">
      <a href="../pages/about.html">
        Despre Noi
     
        <span class="material-icons arrow-down-icon">
          arrow_drop_down
        </span>
      </a>
   
      <div class="submenu">
        <a href="../index.html">Flori</a>
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
    <div class="noi">

      <h3> Va rugam sa va inregistrati </h3>
      <form class="form" action="./script-reg.php" method="POST">
        
          <?php if(isset($_GET['error'])){ ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error']; ?>
              </div>
           <?php }?>

          <?php if (isset($_GET['success'])) { ?>
            <div class="alert alert-success" role="alert">
              <?php echo $_GET['success']; ?>
            </div>
          <?php } ?>


        <div class="form-group">
          <label for="name">Nume</label>
          <input type="text" 
              name="nume" 
              class="form-control" 
              id="nume" 
              aria-describedby="nume"
              placeholder="Enter your name"
              value="<?php echo (isset($_GET['nume']))?$_GET['nume']:""?>">
              

        </div>
        <div class="form-group">
          <label for="prenume">Prenume</label>
          <input type="text" 
          name="prenume" 
          class="form-control" 
          id="name" 
          aria-describedby="prenume"
          placeholder="Enter your name"
          value="<?php echo (isset($_GET['prenume'])) ? $_GET['prenume'] : "" ?>">

        </div>
        <div class="form-group">
          <label for="email"> Email</label>
          <input type="text" 
                  name="email" 
                  class="form-control" 
                  id="email" 
                  aria-describedby="email"
                  placeholder="Enter your name"
                  value="<?php echo (isset($_GET['email'])) ? $_GET['email'] : "" ?>">

        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" 
                name="password" 
                class="form-control" 
                id="password" 
                placeholder="Password">
        </div>
        <div class="form-group">
          <label for="confirmpassword"> Confirm Password</label>
          <input type="password" 
                  name="confirmpassword" 
                  class="form-control" 
                  id="confirmpassword"
                  placeholder="Confirm Password">
        </div>

            <div class="button-gr">
               <button type="submit" class="btn btn-primary">Submit</button>
                 <a class="login" href="login.php"><b>LOGIN</b></a> 
            </div>
        
      </form>



  </section>
  <footer>
    <div class="custom-container">
      <p>
        <img class="logo1" src="../assets/logo.png" alt="logo" />

        © 2023. Toate drepturile rezervate.
      </p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>
