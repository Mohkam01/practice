<?php 
    session_start();
    echo "<br> your database and table name will be shown below in session array: <br>  ";
    var_dump($_SESSION);
// session_destroy();
?>
<!DOCTYPE html>
<html>
<body>
    <h2> welcome to the database management system. let's start </h2>
    
    <p><b> Only one database and one table can be created  </b></p>
    <form method="post" action="database2.php">
        Enter database name: <input type="text" name="dname" >
        <input type="submit" value="submit">
    </form>
    <form method="get" action="database3.php">
        <input type="submit" value="insert values in current table">C
    </form>
    <form method="get" action="database5.php">
        <input type="submit" name="show" value="show values">R
    </form>
    <form method="get" action="database5.php">   
        <input type="submit" name="update" value="update values in current table">U
    </form>
    <form method="get" action="database5.php">   
        <input type="submit" name="delete" value="delete value">D
    </form>
    <form method="get" action="database5.php">   
        <input type="submit" name="order" value="Order values in descending order">
    </form>

</html>
</body>