<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>university database</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
include "connection.php";
if (isset($_POST['submit'])) {
    $classid = $_POST['txt_classid'];
    $classname = $_POST['txt_class'];
    $sql = "INSERT INTO class(class_id,class_anme) VALUES ('$classid','classname')";
    $sql_pre = $db->prepare($sql);
    $sql_pre->execute();
}
if (isset($_POST['submit1'])) {
    $classid = $_POST['classid'];
    $stud_id = $_POST['studid'];
    $stud_name = $_POST['stud_name'];
    $stud_family = $_POST['stud_family'];
    $stud_ave = $_POST['stud_ave'];
    $sql = "INSERT INTO student(stud_id,class_id,name,family,ave) VALUES ('$stud_id','$classid','$stud_name','$stud_family','$stud_ave')";
    $sql_pre = $db->prepare($sql);
    $sql_pre->execute();
}
?>
<div id="wrapper">
    <div id="row1">
        <div id="row1_col1">

            <fieldset>
                <legend>class</legend>
                <label>class id</label>
                <input type="text" name="txt_classid"/><br/>
                <label>class name</label>
                <input type="text" name="txt_class"/><br/>
                <input type="submit" name="submit" value="inser-class"/><br/>
            </fieldset>
            </form>
            
        </div>
    </div>
</div>
</body>
</html>


