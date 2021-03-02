<?php
include('../control/regcheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>Registration</h2>

<form action="" method="post">
    Name : <input type="text" name="name" placeholder="Enter your Name" >
    <br><br>
    Email : <input type="text" name="email" placeholder="Enter your email" >
    <br><br>
    username : <input type="text" name="username" placeholder="Enter username" >
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Male
    <input type="radio" name="gender" value="male">Female
    <input type="radio" name="gender" value="other">Other
    <br><br>
    Password : <input type="password" name="password" placeholder="Enter your password" >
    <br><br>
    Confirm Password : <input type="password" name="repassword" placeholder="Enter your password again" >
    <br><br>
    <input name="submit" type="submit" value="SUBMIT">
</form>
<br>
<?php echo $error; ?>

</body>
</html>