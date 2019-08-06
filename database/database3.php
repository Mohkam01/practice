<?php 
    session_start();
    include "dbfunction.php";
    ?>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){  // start of added if
    $tname = $_REQUEST["tname"];
    $_SESSION["tname"] = $tname;
    $dname = $_SESSION["dname"];
    $colname = $_REQUEST["colname"];
    $_SESSION["colname"] = $colname;
    $col_array = array();
    $col_array = explode(",",$colname);
    // $cols = array();
    foreach($col_array as $key=>$col){
         $col = $col." varchar(255)";
         //echo $col;
         $col_array[$key] = $col;
    }
    //print_r($col_array);
    $columns = implode(",",$col_array);
    $counting = count($col_array);
    $_SESSION["counting"] = $counting;
    $sql = "create table ".$dname.".".$tname."(id int(6) AUTO_INCREMENT PRIMARY KEY, ".$columns." )";
    //echo $sql;
    $status = execute_query($sql);

    if($status){
        echo "<br>";
        echo "table created";
        echo "<br>";
        ?>
    <html>
    <body>

            <form method="post" action="database4.php">
                <h4>Enter the value of <?php echo $counting?> columns</h4>
                <p>Enter values without space and separate with comma</p>
                <input type="text" name="values" >
                <input type="submit" value="submit">
            </form>
    </html>
    </body>
        <?php

    }


}     // ending of added if

else
if($_SERVER["REQUEST_METHOD"]=="GET") {
    $tname = $_SESSION["tname"];
    $dname = $_SESSION["dname"];
    $colname = $_SESSION["colname"];
    $counting = $_SESSION["counting"];
 ?>

    <html>
    <body>

            <form method="post" action="database4.php">
                <h4>Enter the value of <?php echo $counting?> columns</h4>
                <p>Enter values without space and separate with comma</p>
                <input type="text" name="values" >
                <input type="submit" value="submit">
            </form>
    </html>
    </body>
    <?php
}
?>
