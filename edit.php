<doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>update</title>
    </head>
    <body>
    <?php session_start(); ob_start();
    case 2:
        include "connection.php";
        $query= "SELECT * FROM student WHERE stud_id=". $id;
        $result=$db->prepare($query);
        $result->execute();
        $row= $result->fetch(PDO::FETCH_ASSOC);
        if (isset($_POST['submit1'])) {
            $name=$_POST['stud_name'];
            $family=$_POST['stud_family'];
            $ave=$_POST['stud_ave'];
            $studid=$_POST['stud_id'];
            $classid=$_POST['class_id'];
            $query="UPDATE student SET name='".$name."'".",family='" . $family . "'" . ",ave=" . $ave . ",stud_id='" . $studid . "'" . " ,class_id='" . $classid . "'" . " WHERE stud_id=" . $id;
            $edit = $db->prepare($query);
            $edit->execute();
            header("location:index.php");
            
        }
    include "connection.php";
    if (isset($_GET['id']) && isset($_GET['page']) ) {
        $id= $_GET['id'];
        $page=$_GET['id'];
        switch ($page) {
            case 1: include "connection.php";
            $query= "SELECT * FROM class WHERE class_id=".$id;
            $result= $db->prepare($query);
            $result->execute();
            $row =$result->fetch(PDO::FETCH_ASSOC);
            if (isset($_POST['submit'])) {
                $class_name =$_POST['txt_class'];
                $class_id = $_POST['txt_class1'];
                $query="UPDATE class SET class_name='" . $class_name . "',class_id='" . $class_id ."' WHERE class_id=" . $id;
                $del= $db->prepare($query);
                $del->execute();
                header("location:index.php");
            }
            echo ' <div id="row1_col1">
    <form action="" method="post">
        <fieldset>
            <legend>class</legend>
                    <label> class</label>
    <input type="text" name="txt_class" value="' . $row['class_name'] . '"/>
                            <label> class<label>
                                    <input type="text" name="txt_class1" value="' . $row['class_id'] . '"/>
                                    <input type="submit" name="submit" value="edit-class"/>
        </fieldset>
    </form>
    </div>
    break;
    
            
        }
    }
    </body>
    </html>
    
