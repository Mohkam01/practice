<?php
session_start();
$_SESSION["variable"] = "session variable";

    $students = array
    (
    array("mohkam",78,"A"),
    array("musa",74,"A"),
    array("osama",81,"A"),
    array("ali",96,"A"),
    array("arslan",67,"A"),
    array("ahmad",59,"A")
    );

   echo "printing the elements of multi-dimensional arrays";
   echo "<br>";  
   echo "<br>";    
    for($i = 0; $i < count($students); $i++){

        echo "<p><b>Student: </b></p>",$i+1;
       // echo ;
        echo "<ul>";
        for($j=0 ; $j < 3 ; $j++){
            echo "<li>".$students[$i][$j]."</li>";
        }
        echo "</ul>";

    }

     echo "<br>";
     echo "<br>";  
     echo "today date is: ".date("d/m/y");
     echo "<br>";      
     echo "time is: ".date("h:i:sa");
    
     echo "<br>";  
     echo "<br>";  

     echo "uploading file";
     echo "<br>";  
     echo "<br>";  
     echo "<br>";  



?>
<html>
<body>

<form action="general2.php" method="post" enctype="multipart/form-data">
    Enter number >3:(try something else for error):<input type="text" name="number">
    Select file to upload: <input type="file" name="file">
    <br>
    <input type="submit" value="Upload File" name="submit">
</form>
<?php include "general2.php" ?>
</html>
</body>