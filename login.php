<?php include_once "header.php"; ?>

<body>
<div class="wrapper">
<section class="form login">
    <header>Realtime Chat app </header>
    <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="error-text"></div>
    <div class="field input">
        <label for="">Email Address</label>
         <input type="text" name="email" placeholder="Email" required>
    </div>
    
    <div class="field input">
<label for=""> Password </label>
   
<input type="password" name="password" placeholder="Enter Your Password" required>
<i class=" fas fa-eye"></i>
</div>


    <div class="field button">

    <input type="submit" name="submit" value="Continue To Chat" >
 </div>

    </form> 
    <div class="link">Not yet signed Up <a href="index.php"> Signup now</a> </div>
</section> 
</div> 
</body>
