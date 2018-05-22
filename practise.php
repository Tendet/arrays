<?php
//Database Operations
$conn =mysqli_connect("localhost","root","","practice");






if(isset($_POST["names"]))
{

    extract($_POST);
    $today =date("y-m-d");
    $query="insert into users values(null,'$names',$age,'$gender','$today')";



    mysqli_query($conn,$query) or die(mysqli_error($conn));
    print "Inserted!!!";



}



?>
<form action="" method="post">
    <input type="text" name="names" required placeholder="Enter Names">
    <input type="number" name="age" required placeholder="Enter Age">
    <input type="radio" name="gender" checked  value="Female"> Female
    <input type="radio" name="gender"  value="Male"> Male

    <button>Submit</button>


</form>

