<?php

$servername="localhost:5222";
$username="root";
$password="";
$database="library_db";

$con=new mysqli($servername,$username,$password,$database);

if($con -> connect_error)
{
    die("connecion failed: ".$con ->connect_error);

}


