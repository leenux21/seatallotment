<?php

$conn=mysqli_connect('localhost','souvik','test1234','jeca sign up');

if(!$conn)
{
    echo'Connection error: '.mysqli_connect_error();
}
else
{
    echo'success';
}
$fN = $_POST['firstName'];
$lN =  $_POST['lastName'];
$email =  $_POST['email'];
$pass1 =  $_POST['password'];
$pass2 =  $_POST['password2'];

echo $fN;

$query = "insert into signup(FirstName,LastName,Email,Password,ConfirmPassword) values ('$fN', '$lN', '$email', '$pass1', '$pass2' )";
$data = mysqli_query($conn,$query);

$sql = "SELECT FirstName, LastName FROM signup where id=3";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["FirstName"]. "Last Name: " . $row["LastName"]. "<br>";
    }
} else {
    echo "0 results";
}

// if(!$data)
// {
//     echo'data not inserted in the database';
// }
?>