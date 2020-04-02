<?php

$conn=mysqli_connect('localhost','root',"",'customers');
if(isset($_POST['submit'])){
$user=mysqli_real_escape_string($conn,$_POST['user']);
$email=$_POST['Email'];
$mob=$_POST['mobile'];
$comment=$_POST['comment'];
$sql="INSERT INTO userdata(Username, Email_Address, Mobile, Comment) VALUES ('$user', '$email',
'$mob', '$comment')";
$res=mysqli_query($conn,$sql);
if($res){
    echo '<script>alert("your information has been recorded")</script>';
}
else{
    echo "something went wrong";
}
}
else{
mysqli_close($conn);}

?>