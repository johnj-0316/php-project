<!DOCTYPE HTML>
<?php        
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']==false){
        header("location:index.php");         
    }
?>
<html>
<body>    
    <h3> You have logged in successfully!</h3>
</body>
</html>
