<?php
$uname="admin";
$pwd="admin";
session_start();

if (isset($_SESSION['uname'])){
    echo "<h1> Welcome" .$_SESSION['uname']. "</h1>";
    echo "<a href= 'product.php>Product</a><br>";
    echo " <br> <a href='signout.php'><input type=button value= signout name=signout></a>";

}
else{
    if($_POST['uname']==$uname && $_POST['pwd']==$pwd{
        $_SESSION['uname']=$uname;

    echo "<script>location.href='Welcome.php'</script>;
    }
    else{
        echo "<script>alert('username or password incorrect!')</script>";
    }
    
}