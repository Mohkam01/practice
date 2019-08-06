<?php 
    session_start();
    include 'dbfunction.php';
    $tname = $_SESSION["tname"];
    $dname = $_SESSION["dname"];
    $colname = $_SESSION["colname"];

    $id = $_REQUEST["id"];

    $sql = "delete from ".$dname.".".$tname." where id=".$id; 
    delete($sql);
    $sql = "ALTER TABLE ".$dname.".".$tname." AUTO_INCREMENT = ".$id;
    execute_query($sql);
    ?>
    <form method="" action="database.php">
        <input type="submit" value="get back to main page">
        </form>
