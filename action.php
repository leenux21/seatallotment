<?php
       $conn = mysqli_connect('localhost','debleena','test1234','form');
       if(!$conn)
       {
           echo'Connection error' . mysqli_connect_error();
       }
       else
            echo 'success';
       $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        $query = "insert into tab1(fName,lName) values ('$firstname', '$lastname')";
        mysqli_query($conn,$query);

        $sql = "select * from tab1";
        $result = mysqli_query($conn,$sql);
        if($result->num_rows >0)
        {
            while($row = $result -> fetch_assoc()){
                echo "First Name :" . $row["fName"] . "Last Name :" . $row["lName"];
            }
        }
        else
            echo "no result found";
?>
