<?php
include "../controller/Employec.php";
$empC= new  employeC() ;
$empC->Deleteemployes($_GET['id']) ;
header('Location:Listemployes.php') ;

?>