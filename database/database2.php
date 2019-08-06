<?php
session_start();
//session_destroy();
include 'dbfunction.php';
?>
<!DOCTYPE html>
<?php 
    
    if(!isset($_SESSION["dname"])){
    $dname = $_REQUEST["dname"];
    $_SESSION["dname"] = $dname;
    $sql = "create database ".$dname;
    $status = execute_query($sql);
    if($status){ ?>
    <html>
    <body>
        <form method="post" action="database3.php">
        Table Name:<input type="text" name="tname" required>
        <br> 
        <br>     
        Enter column name(without space,split with comma):<input type="text" name="colname" required>
        <br> 
        <br>     
        <input type="submit" value="submit">
        </form>
    </html>
    </body>
    <?php        
    }
}  else{
    echo "<br> database already exists: ".$_SESSION["dname"];
}      
?>