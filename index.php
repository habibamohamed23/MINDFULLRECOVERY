<?php
$username=$_REQUEST ['username']
$Emailaddres=$_REQUEST ['Email address']
$password=$_REQUEST ['password']
$bday=$_REQUEST ['bday']

if(isset($_POST['form2']))

{

$host="localhost";
$users= "root";
$password="";
$DB="registrion";


//     $conn =mysqli_connect($host,$users,$password,$DB);


//     $insert= "insert into user values('$username','$Emailaddres','$password','$bday'";
//     mysqli_query($conn,$insert);

//    if ($conn){
//     echo("<h1 style='color:green;'> Your Registrion is done!</h1>");
    
// }

//     else{
//     echo("<h1 style='color:red;'> Your Registrion is failed!</h1>");
// }


@$conn= mysqli_connect($host,$user,$password,$DB);
   
$insert= "insert into studentsbis values('$username','$Emailaddres','$password','$bday')";

mysqli_query($conn,$insert);


if($conn){
   
    echo("<h1 style=color:green;> Your Registartion is Done!</h1>");
    

}
else{
    echo("<h1 style=color:red;> Your Registartion is Failed❌</h1>");
}

}

    













?>