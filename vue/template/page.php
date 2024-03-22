<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="../javascript/page.js" defer></script>
    <script src="asset/js/header.js" defer></script>
    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/page.css">
    <title>connexion</title>   
</head>

<body>
  
    <?php
    require '../template/header.php';
    ?>


    <?php
    try {
        $mysqlclient=new PDO('mysql:host=localhost;dbname=acgd_immo;charset=utf8mb4', 'root','');
    } catch(Exeption $e)
    {die('Error'.$e->getMessage());

    }

    ?>

     <?php

        // $prepareData = $mysqlclient -> prepare ('SELECT * FROM user');
        // $prepareData -> execute();
        // $datas = $prepareData -> fetchAll();

        //     foreach ($datas as $data) {
        //         echo $data['FirstName'];
        //     }
    ?> 


    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="">
          <h1>Create Account</h1>
          
          <span>or use your email for registration</span>
          <input type="text" placeholder="Name" />
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <button>Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="#">
          <h1>Sign in</h1>
          
          <span>or use your account</span>
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <a href="#">Forgot your password?</a>
          <button>Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>To keep connected with us please login with your personal info</p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hello!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button class="ghost" id="signUp">Sign Up</button>

          </div>

        </div>

      </div>

    </div>
    

    <?php
     require '../template/footer.php';
    ?>

</body>

</html>