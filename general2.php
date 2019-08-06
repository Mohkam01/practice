<?php
$_SESSION["message"] = "Showing it from other file through 'include'";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_FILES["file"]["name"];
        $temp_name = $_FILES["file"]["tmp_name"];
        $dir = pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION);
        $size = $_FILES["file"]["size"];
        $_SESSION["message"] = "";
        $number = $_POST["number"];
    if($number < 3){
        trigger_error("Value must be greater than 3");
    }
    
    function custom($errno,$errstr){
        echo "<b> showing u the custom error handler: </b> [$errno] $errstr";
        
    }
    set_error_handler("custom");
    echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "name: ".$name."<br> size:".$size."<br> temporary name:".$temp_name."<br> extension:".$dir."<br>";
        echo "<br>";
        echo "<br>";
    echo ($test);
    echo "<br>";
    echo "<br>";     

    try{
        $file = fopen("testing.txt","r");
        $content = fread($file,filesize("testing.txt"));
        echo "<br>";
        echo "contents of file are:  <br>";
        echo $content;
        fclose($file);
    }
    catch(Exception $e){
        echo "kindly create file names as testing.txt".$e->getMessage();
    }
}
?>
<html>
<body>  
        <h2><?php echo $_SESSION["message"] ?></h2>
        <br>
        <br>
</html>
</body>