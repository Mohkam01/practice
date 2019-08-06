<?php 
    session_start();
    include 'dbfunction.php';

    $tname = $_SESSION["tname"];
    $dname = $_SESSION["dname"];
    $colname = $_SESSION["colname"];
    $count = $_SESSION["counting"];
    if(isset($_REQUEST["show"])){
        $sql = "select * from ".$dname.".".$tname;
        show($sql);
        ?>
        <form method="" action="database.php">
        <input type="submit" value="get back to main page">
        </form>
<?php
    }elseif(isset($_REQUEST["delete"])){
        $sql = "select * from ".$dname.".".$tname;
        show($sql);
        echo "<br> welcome back <br>";
        echo "<br>";
        ?>
        <form method="get" action="database6.php" >
        Enter id which u want to delete: <input type="text" name="id" >
        <input type="submit" >
        </form>
        <?php
    }elseif(isset($_REQUEST["update"])){
        $columns = explode(",",$colname);
        // print_r($columns);
        $count = $count - 1;
        $value = $columns[$count];
        // echo $value;
        $sql = "update ".$dname.".".$tname." set ".$value."= 'updated' where id=1";
        // echo $sql;
        $status = execute_query($sql);
        if($status){
        echo "<br><br> updated the value of last column with 'UPDATED'  <br><br>"; ?>
        <form method="" action="database.php">
        <input type="submit" value="get back to main page">
        </form>
        <?php
    }

    }elseif(isset($_REQUEST["order"])){
        $sql = "select * from ".$dname.".".$tname." order by id desc";
        echo "<br><br> showing u the values in descending order <br><br>";
        show($sql);
        echo "<br> welcome back <br>";
        echo "<br>";
        ?>
        <form method="" action="database.php">
        <input type="submit" value="get back to main page">
        </form>
        <?php
    }
?>