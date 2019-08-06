<?php
session_start();
include 'dbfunction.php';
    $values = $_REQUEST["values"];
    $tname = $_SESSION["tname"];
    $dname = $_SESSION["dname"];
    $colname = $_SESSION["colname"];

    //$values_array = array();
    $values_array = explode(",",$values);
   
    $count = $_SESSION["counting"];
    //echo $count;
    $array = array_slice($values_array,0,$count);
    //print_r($array);
    echo "<br>";
    echo "<br>";
  
    foreach($array as $key => $value){
        $array[$key] = "'".$value."'";
    }
    $values = implode(",",$array);

    $sql = "insert into ".$dname.".".$tname." ( ".$colname.") values ( ".$values.")";
    //echo $sql;
    $status = execute_query($sql);
    if($status){ ?>
    <form method="get"  action="database3.php">
    <input type="submit" value="enter more values">
    </form>
    <form method="post" action="database.php">
    <input type="submit" value="return to main">
    </form>
<?php
    }

?>