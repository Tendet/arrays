<?php
$username ="xyz";
$password ="1234";

$db_username="xyz";
$db_password="1234";

if( $username ==$db_username and $password==$db_password)
{ echo "logged in succesfully";
}
else
{
    echo "wrong username or password";
}