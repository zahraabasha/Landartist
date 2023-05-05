<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="main.js"> </script>
<script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"> </script>
<script>
const signUpButton = document.getElementById('signUp');

const signInButton = document.getElementById('signIn');

const container = document.getElementById('container');


signUpButton.addEventListener('click', () => {
container.classList.add("right-panel-active");
});
signInButton.addEventListener('click', () => {
container.classList.remove("right-panel-active");
});
</script>



<title>login</title>


<head>
<link rel=stylesheet type=text/css href=style.css>

<?php 
$con=mysqli_connect("localhost","root","","art_bd");
if(!$con){
echo "<script>alert(not conncted to BD.mysqli_connect_error($con));</script>";
}
else
echo"<script>alert(connected to BD)</script>";
?>



<?php 
if(isset($_POST['sub'])){
if(isset($_POST['email']) && isset($_POST['password']))
if ($_POST['email']=="admin@gamil.com"){
$array=explode('@',$_POST['email']);
$_SESSION['name']=$array[0];
//echo "Hello".$_SESSION['name'];
header ('location:admin.php');}
else{$array=explode('@',$_POST['email']);
$_SESSION['name']=$array[0];
// echo "Hello".$_SESSION['name'];
header ('location:proudct.html');}
else
echo "<script> alert(pleas enter email and password) </script> "; }

?> 



<?php     
if(isset($_SESSION['name']))
echo "welcome".$_SESSION['name']."<p>";
$con=mysqli_connect('localhost','root','','art_bd');
if(!$con)
echo "<script> alert(not conncted).mysqli_connect_error($con)</script>";
else
echo "<script> alert(connected)</script>";
?>



<?php
if(isset($_POST['sub'])){
$id_customer=$_post['id_customer'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$add= "insert into customer(id_customer,name,email,password)values('$id_customer','$name','$email','$password')";
$result=mysqli_query($con,$add);
if($result)
echo"<script> alert( add successfully) </script>";
else
echo "<script> alert(error).mysqli_error($con)</script>";
}
?>

<?php
if(isset($_POST['sub'])){
if(!empty($_POST['name']) and !empty($_POST['email']) and
!empty($_POST['password'])){
header ('location:index.html');}
else
echo "<script> alert(pleas enter user and email and pass) </script> ";
}
?>







</head>
<body>

<div class="container" id="container">
<div class="form-container sign-up-container">
<form method=POST action="<?php echo $_SERVER['PHP_SELF'];?>">
<h1>Create Account</h1>

<div class="social-container">
<a href="https://facebook.com" class="social">
<ion-icon name="logo-facebook"></ion-icon></a>
<a href="https://Google.com" class="social">
<ion-icon name="logo-googleplus"></ion-icon></a>
<a href="https://linkedin.com" class="social">
<ion-icon name="logo-linkedin"></ion-icon></a>
</div>

<span>or use your email for registration</span>
<input type="text" placeholder="Name" name=name>
<input type="email" placeholder="Email" name=email>
<input type="password" placeholder="Password" name=password>
<button name="sub" >Sign Up </button>
</form>
</div>


<div class="form-container sign-in-container">
<form method=POST action="<?php echo $_SERVER['PHP_SELF'];?>">
<h1>Sign In</h1>
<div class="social-container">
<a href="https://facebook.com" class="social">
<ion-icon name="logo-facebook"></ion-icon></a>
<a href="https://Google.com" class="social">
<ion-icon name="logo-googleplus"></ion-icon></a>
<a href="https://linkedin.com" class="social">
<ion-icon name="logo-linkedin"></ion-icon></a>
</div>

<span>or use your account</span>
<input type="email" placeholder="Email" name=email>
<input type="password" placeholder="Password" name=password >
<button name="sub" >Sign In</button>
</form>
</div>


//كود الحركة 
<div class="overlay-container">
<div class="overlay">
<div class="overlay-panel overlay-left">
<h1>Welcome Back</h1>
<p>To keep connected with us please login with your personal info</p>
<button class="ghost" id="signIn" >Sign In</button>
</div>
<div class="overlay-panel overlay-right">
<h1>Hello,Friend</h1>
<p>Enter your personal details and start journey with us</p>
<button class="ghost" id="signUp" >Sign Up </button>
</div>
</div>
</div>
</div>
</div>




<div class="animateme">
<ul class="bg-bubbles">
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
</ul>
</div>
    






</body>
</html>






