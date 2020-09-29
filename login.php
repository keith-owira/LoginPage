<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

     <nav>
      <ul class="nav-flex-row">
        <li class="nav-item">
          <a href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a href="#login">Members Offer</a>
        </li>
        <li class="nav-item">
          <a href="menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a href="#order" style="border: 2px solid goldenrod; background-color: goldenrod;">Order Now</a>
        </li>
      </ul>
    </nav><br><br>
      <section class="section-intro"> <img  src="image\70008301-8a0e-448a-b2a1-6c26cfcdb8e7_200x200.png" class="img"></section>
    <div class="cotn_principal">
<div class="cont_centrar">

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
       <h2>LOGIN</h2>  
  <p>Welcome back!Login to Access you're account.</p> 
  <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>

  
    <p>Not a member yet?Register to be part of K'Owira Family.</p>
        
  <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
</div>
  </div>
       </div>

    
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>
       
    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>
       <form method="post" action="login.php">
 <div class="cont_form_login">
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
    <?php echo display_error(); ?>
   <h2>LOGIN</h2>
  <input type="text" placeholder="Username" name="username"  />
<input type="password" placeholder="Password" name="password" />
<button class="btn_login" onclick="cambiar_login()" name="login_btn">LOGIN</button>
  </div>
  </form>
    <form method="post" action="login.php">
   <div class="cont_form_sign_up">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
    <?php echo display_error(); ?>
     <h2>SIGN UP</h2>
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<input type="text" placeholder="Enter Full name or Username" name="username"  value="<?php echo $username; ?>" />
<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" />
<input type="password" placeholder="Password"  name="password_1" />
<input type="password" placeholder="Confirm Password" name="password_2" />
 <


  <button class="btn_sign_up" onclick="cambiar_sign_up()" name="register_btn" >SIGN UP</button>


  </div>
</form>
    </div>
    
  </div>
 </div>
</div>
<script type="text/javascript">

function cambiar_login() {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";  
document.querySelector('.cont_form_login').style.display = "block";
document.querySelector('.cont_form_sign_up').style.opacity = "0";               

setTimeout(function(){  document.querySelector('.cont_form_login').style.opacity = "1"; },400);  
  
setTimeout(function(){    
document.querySelector('.cont_form_sign_up').style.display = "none";
},200);  
  }

function cambiar_sign_up(at) {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
  document.querySelector('.cont_form_sign_up').style.display = "block";
document.querySelector('.cont_form_login').style.opacity = "0";
  
setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";
},100);  

setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";
},400);  


}    



function ocultar_login_sign_up() {

document.querySelector('.cont_forms').className = "cont_forms";  
document.querySelector('.cont_form_sign_up').style.opacity = "0";               
document.querySelector('.cont_form_login').style.opacity = "0"; 

setTimeout(function(){
document.querySelector('.cont_form_sign_up').style.display = "none";
document.querySelector('.cont_form_login').style.display = "none";
},500);  
  
  }




</script>
</body>
</html>
