<?php
//session_start();
//session_destroy();
    // $sql = "drop database testing";
    // drop($sql);
    
    function connect(){
    $server = "localhost";
    $user = "root";
    $pass = "";
       $conn = new mysqli($server,$user,$pass);
       if($conn->connect_error){
           echo "problem in connecting".$conn->connect->error;
           echo "|||||||||||||||||||||||||||";
       }
       else{
           echo "<br> database connected <br>";
           echo "|||||||||||||||||||||||||||";
           return $conn;
       }  
    }
    function execute_query($query){
        $conn = connect();
        if($conn->query($query)){
            echo "<br> executed <br>";
           echo "|||||||||||||||||||||||||||";

            return true;
        }
        else{
            echo "<br> having problem <br>";
           echo "|||||||||||||||||||||||||||";

        }
    }
    function drop($sql){
        $conn = connect();
        if($conn->query($sql)){
            echo "<br> dropped <br>";
           echo "|||||||||||||||||||||||||||";
            //session_destroy();
            echo "<br>";
        }
        else{
            echo "nope";
            echo "<br>";
            
        }
    }

    function show($sql){
        $conn = connect();
        $result = $conn->query($sql);    
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                //print_r($row);
                foreach($row as $key=>$value){
                    echo "<br> $key ---->  $value  <br>";
                }
                echo "<br> -------------------------------- <br>";
            }
        }
        }
        function delete($sql){
            $conn = connect();

            if($conn->query($sql)){
                echo "<br> record deleted <br>";
           echo "|||||||||||||||||||||||||||";


            }
            else{
                echo "invalid record";
           echo "|||||||||||||||||||||||||||";

            }
        }
    

?>