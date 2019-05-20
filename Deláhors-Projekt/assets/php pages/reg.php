<?php
  $host="dbtrain.im.uu.se";
		$dbusername="dbtrain_1044";
		$password="gkpdxr";
		$dbname="dbtrain_1044";
		$con=new mysqli($host,$dbusername,$password,$dbname);

		if($con->connect_error)
		{
			die("Connection failed: " .$con.connect_error);
		}

session_start();

function Salt(){
	$all = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $saltLength = 15;
    $randomSalt ="";

	for($i=0; $i<$saltLength; $i++){
		$randomSalt .= $all[mt_rand(0, strlen($all))];
	}

	return $randomSalt;
}

$uname="";
$email="";
$pword="";
$SHpword="";
$randomSalt=Salt();


if(isset($_POST['regUname'])){
	$uname=$_POST["regUname"]; }

if(isset($_POST['regUemail'])){
	$email = $_POST["regUemail"]; }

if(isset($_POST['regUpassword'])){
	$pword = $_POST["regUpassword"].$randomSalt; 
	$SHpword=sha1($pword);
	}

	$sql_u="SELECT * FROM users WHERE Username='$uname'";
	$sql_e="SELECT * FROM users WHERE Email='$email'";
	$res_u=mysqli_query($con,$sql_u);
	$res_e=mysqli_query($con,$sql_e);
	if(mysqli_num_rows($res_u)> 0){
		echo" The name $uname is taken, try another name!";
		header("Refresh: 5; URL=reg.php");
	}
	else if(mysqli_num_rows($res_e) >0){
		echo"This email is taken, are you sure you are not already a member?";
	}

	else{
		AddToDb($SHpword,$email,$uname,$randomSalt);
	}


function AddToDb($pword,$email,$uname,$randomSalt){

        $host="dbtrain.im.uu.se";
		$dbusername="dbtrain_1044";
		$password="gkpdxr";
		$dbname="dbtrain_1044";
		$con=new mysqli($host,$dbusername,$password,$dbname);

		if($con->connect_error)
		{
			die("Connection failed: " .$con.connect_error);
		}

	$sql = "INSERT INTO users (Username,Email,Password,Salt) VALUES ('$uname','$email','$pword','$randomSalt')";

	if($con->query($sql)=== TRUE){
			echo nl2br( "Welcome '$uname' if you are truly woke you will understand the following: \n  .-- . .-.. -.-. --- -- . / - --- / - .... . / - .-. ..- - .... -.-.--");
			header("Refresh: 5; URL=loggedIn.php");

		}
		else{
			 echo "ERROR $sql";
			}
	header("Refresh: 5; URL=loggedIn.php ");
	$con->close();


}

  ?>
