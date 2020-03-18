<?php 
 session_start(); /* Starts the session */
if(isset($_POST['Submit'])){
$logins = array('admin' => '123456');
$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

if (isset($logins[$Username]) && $logins[$Username] == $Password){
$_SESSION['UserData']['Username']=$logins[$Username];
header("Location:Confidential.php");
exit;
} else {
$msg="<span style='color:red'>Invalid Login Details</span>";
echo $msg;
}
}
?>

