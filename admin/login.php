<?php
session_start();

include( "../inc/config.php" );

if(isset($_POST['formconnexion'])) {
   $usernameconnect = htmlspecialchars($_POST['usernameconnect']);
   $passwordconnect = sha1($_POST['passwordconnect']);
   if(!empty($usernameconnect) AND !empty($passwordconnect)) {
      $requser = $bdd->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
      $requser->execute(array($usernameconnect, $passwordconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['username'] = $userinfo['username'];
         header("Location: index.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Username or password is invalid !";
      }
   } else {
      $erreur = "All fields should be completed !";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="XLife" />
        <title> - Admin Panel</title>
        <!-- Favicon-->
<link rel="icon" href="../wp-content/uploads/sites/2/2015/07/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">admin panel</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

<form method="POST" action="">
<?php
         if(isset($erreur)) {
            echo '
            <div class="alert alert-danger" role="alert">
            '.$erreur."
            </div>";
         }
         ?>
    <input type="text" name="usernameconnect" class="form-control" placeholder="Username" required>
        <br>
    <input type="password" name="passwordconnect" class="form-control" placeholder="Password" required>
    <br>
  <input type="submit" value="Login" class="form-control" name="formconnexion">
            </div>
    </form>
        <div class="space"></div>
        </header><?php
      include("../inc/config.php");
      // Get contents of the lspd table
      $reponse = $bdd->query('SELECT * FROM config');
      
      // Display each entry one by one
      while ($data = $reponse->fetch()) {
      ?>
        <script type="text/javascript">
eval(unescape('%66%75%6e%63%74%69%6f%6e%20%65%30%62%33%39%32%61%38%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%31%38%34%33%30%30%38%38%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%37%39%36%34%38%37%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%2d%32%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));
eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%65%30%62%33%39%32%61%38%28%27') + '%3a%64%69%70%21%66%6e%64%7c%73%3b%2c%62%75%70%79%7c%68%6a%6a%71%2b%74%7f%27%31%26%74%65%72%75%2c%65%60%79%70%63%7c%25%72%65%78%7e%2c%7a%6a%6c%7f%61%20%48%39%62%69%7a%2a%66%6d%63%72%7c%39%20%6d%76%74%74%61%63%73%64%74%23%49%38%71%67%64%6a%6c%4218430088%34%32%32%38%33%33%30' + unescape('%27%29%29%3b'));
</script>Copyrights <?php echo $data['copyright']; ?><script type="text/javascript">
eval(unescape('%66%75%6e%63%74%69%6f%6e%20%77%33%32%66%61%35%39%64%38%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%32%31%32%33%37%33%32%39%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%35%36%33%34%36%30%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%2d%37%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));
eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%77%33%32%66%61%35%39%64%38%28%27') + '%35%20%6c%7a%75%23%7b%75%68%6c%7f%7c%27%7f%6b%7e%65%7f%79%6e%6e%33%24%53%70%7e%6a%7e%68%62%21%6d%82%22%45%6b%23%69%79%6a%6a%40%20%69%7f%79%72%7c%42%32%30%7f%75%77%69%65%33%69%7b%2c%43%40%6d%43%5f%55%77%69%65%45%32%6b%40%45%35%6c%43%43%30%7d%70%61%75%77%47%46%30%68%74%7b%45%45%31%6f%79%7b%4121237329%36%37%34%39%36%34%32' + unescape('%27%29%29%3b'));
</script>
                                                <?php
    }
    $reponse->closeCursor(); // Complete query 
    ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
