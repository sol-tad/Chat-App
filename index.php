

<?php include_once "header.php";

?>
<body>
  
<div class="wrapper">
<section class="form signup">
  <header>Realtime Chat app </header>

  <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">

<div class="error-text"></div>
<div class="name-details">
  <div class="field input">
   <label for="">First Name</label>
   <input type="text" name="fname" placeholder="First name" required>
  </div>
  <div class="field input">
   <label for="">Last Name</label>
   <input type="text" name="lname" placeholder="Last name" required>
  </div>

</div>
 <div class="field input">
<label for=""> Email Address</label>
   <input type="text" name="email" placeholder="Email" required>
 </div>
 <div class="field input">
<label for=""> Password </label>
   <input type="password" name="password" placeholder="Enter New Password" required>
   <i class=" fas fa-eye"></i>
 </div>

 <div class="field image">
<input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
 </div>
 <div class="field button">
<input type="submit" name="submit" value="Continue to Chat">
 </div>
  </form>


    <div class="link">
    Already Signed UP
    <a href="login.php">Login now</a>
    </div>
</section>

</div>

<script type="text/javascript" src="js/pass-show-hide.js"></script>
</body>
</html>
