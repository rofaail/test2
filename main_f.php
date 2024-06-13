<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST["enter"] )){
            $connect = mysqli_connect("localhost","root","","test2");
        
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $phone = $_POST['phone'];

            
            // $insert = "insert into tdb1 values($name,$email,$pass,$phone)";
            $insert = "insert into tdb1 values('$name','$email','$pass',$phone)";
            $add = mysqli_query($connect,$insert);
}
    
        
    ?>
    <form method="POST" action="main_f.php">
        <input type="text" name='name' placeholder="Enter Your Name">
        <input type="email" name='email' placeholder="Enter Your Email">
        <input type="password" name='pass' placeholder="Enter The PassWord">
        <input type="number" name='phone' placeholder="Enter Your Telephone Number">
        <button type="submit" name="enter">Enter</button>
    </form>
</body>
</html>