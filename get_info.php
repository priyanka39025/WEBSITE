<?php

$con = mysqli_connect('localhost', 'root');
if($con){
	//echo "connection successful";
} else {
	//echo "No connection";
}

mysqli_select_db ($con,'touristdatabase') ;



$query = "SELECT * FROM `userinfodata`";

// $query = "insert into `userinfodata` (`user`, `email`, `mobile`, `comment`) values (\'test1\',\'normalthins@mail.com\',\'78451212\',\'fkdsjfklfjlaskf\');";

// $result = mysqli_query($con, $query);
// Print the data
// $row=mysqli_fetch_row($result); //Fetch array
// $no_of_row = mysqli_num_rows($result);
// echo "no of row ".$no_of_row. "dkfjslfsa";
$result = $con->query($query);

if ($result->num_rows > 0) {
  // output data of each row
	echo "<table style=\"border: 1px solid black\"><tr style=\"border: 1px solid black\"><th>User Name</th> <th>email</th> <th>mobile</th> </tr>";
  while($row = $result->fetch_assoc()) { 
    echo "<tr><td style=\"border: 2px solid cyan\">" . $row["user"]." </td><td style=\"border: 2px solid cyan\">" . $row["email"]. "</td><td style=\"border: 2px solid cyan\">" . $row["mobile"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

// echo $str_concat;
// if (mysqli_query($con, $query)) {


//   echo "New record fetched";
// } else {
//   echo "Error: " . $query . "<br>" . mysqli_error($con);
// }

mysqli_close($con);

 
 
  ?>