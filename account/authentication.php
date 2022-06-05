<?php     
session_start();  
    include('../../../connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];
    

        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      




        //old login
        /*
        $sql = "select *from user where username = '$username'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        */

        $sql = $con->prepare("SELECT *FROM user WHERE username = ?");
        $sql->bind_param('s', $username);
        $sql->execute();
        $result = $sql->get_result();
        $row = $result->fetch_assoc();

        $sql2 = "select *from user where username = '$username'";  
        $result2 = mysqli_query($con, $sql2);  
        $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);  
        $count2 = mysqli_num_rows($result2);
        
        
        if (password_verify($password, $row['password'])) {
            echo "connected";
            $_SESSION['username'] = $username;
            $_SESSION['discord'] = $row['discordname'];
            echo "<br><br>Redirecting...";
            header('Location: ../shop/cosmetics.php');


        } else {
            echo 'Invalid username or password';
        }
        
      


  
?>  