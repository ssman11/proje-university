<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>university database</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
include "connection.php";
if (isset($_POST['submit'])){
    $classid=$_POST['txt_classid'];
    $classname=$_POST['txt_class'];
    $sql="INSERT INTO class(class_id,class_anme) VALUES ('$classid','classname')";
    $sql_pre=$db->prepare($query);
    $sql_pre->execute();
}
if (isset($_POST['submit1'])){
    $classid=$_POST
}
?>
</body>
</html>


