<?php function checkPassword(){ 
if(strlen($_POST["password"]) > 16 or strlen($_POST["password"]) < 8){
 echo "Password should be between 8 to 16 characters!.";
 return true; 
} 
else{ return false;
 } 
} 
if(isset($_POST["Register"])){ 
if(checkPassword()){ 
}else{ 
echo "<h1>Registered successfully!</h1>";
 echo $_POST["email"]; 
echo "<br>"; 
echo $_POST["gender"]; 
echo "<br>"; 
if(empty($_POST["colors"])){ 
echo "No favorite color!"; 
}else{ 
for ($i=0; $i <count($_POST["colors"]) ; $i++) {
 echo $_POST["colors"][$i];
echo "<br>";
 }
 } 
} 
}else{ 
header("Location: http://localhost/Form.html"); 
} 
?>
