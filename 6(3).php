<?php
session_start();

if (isset($_SESSION['uname'])){
    echo "<h1> Welcome to Product page</h1>"; 
    echo " <br> <a href='welcome.php'><input type=button value= back name=name></a>";

}
else{
        echo "<script>location.href='lab test 6.php'</script>";
    }
    
?>