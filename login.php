<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }


    if(isset($_COOKIE['emailid'])&&isset($_COOKIE['password'])){
       $emailid=$_COOKIE['emailid']; 
       $password=$_COOKIE['password']; 
    }else{
         $emailid=$password="";
    }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" value="<?php echo $emailid; ?>" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required value="<?php echo $password; ?>">
          <i class="fas fa-eye"></i>
        </div>
        <div class="rememberMe">
          <label for="rememberMe">Remember Me</label>
          <input type="checkbox" name="rememberMe" value="Remember Me">
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
