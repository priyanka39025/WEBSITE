<?php

$con = mysqli_connect('localhost', 'root');
if($con){
	echo "connection successful";
} else {
	echo "No connection";
}

mysqli_select_db ($con,'touristdatabase') ;

$user = $_POST['user'] ;
$email = $_POST ['email'] ;
$mobile = $_POST['mobile'] ;
$comment = $_POST['comment'];

$query = "INSERT INTO `userinfodata`(`user`, `email`, `mobile`, `comment`) VALUES ('".$user."', '".$email."','".$mobile."','".$comment."' )";

// $query = "insert into `userinfodata` (`user`, `email`, `mobile`, `comment`) values (\'test1\',\'normalthins@mail.com\',\'78451212\',\'fkdsjfklfjlaskf\');";

echo "$query";

//mysqli_query($con, $query);
if (mysqli_query($con, $query)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($con);
}

mysqli_close($con);

 
 
  ?>