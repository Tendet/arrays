;
<?php
if (isset($_GET["id"]))
{
    extract($_GET);
    $conn =mysqli_connect("localhost","root","","practice");
        $query="delete from users where id=$id";
    mysqli_query($conn,$query);
}


?>



<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fetching Data</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

</head>
<body>
<div class="container">

    <table class="table">
        <tr>
            <th>ID</th>
            <th>NAMES</th>
            <th>AGE</th>
            <th>GENDER</th>
            <th>DATE CREATED</th>
            <th>DELETE</th>
        </tr>

    <?php
    $conn =mysqli_connect("localhost","root","","practice");
$query="select * from users";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result))
{
    extract($row);
    echo"<tr>
        <td>$id</td>
        <td>$names</td>
        <td>$age</td>
        <td>$gender</td>
        <td>$date_created</td>
        <td><a class='btn btn-danger' href='fetch.php?id=$id'>Delete</a></td>
    </tr>";

}




    ?>
    </table>








</div>


</body>
</html>