<doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>update</title>
    </head>
    <body>
    <?php session_start(); ob_start();
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
        }
    }
    </body>
    </html>