<?php
require_once('config.php');
?>

<?php

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $pass= $_POST['pass'];
    $pass_repeat= $_POST['pass-repeat'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $timestamp = date("Y/m/d-H.i.s"); //timestamp when the user resgisters

    //Encrypt the passwords
    $passnew = password_hash($pass, PASSWORD_BCRYPT);
    $pass_repeat_new = password_hash($pass_repeat, PASSWORD_BCRYPT);

    $emailquery = "SELECT * FROM `registration` WHERE email='$email'";
    $equery = $conn->query($emailquery);
    $emailcount = mysqli_num_rows($equery);

    // To check any exisiting email and passwords matching
    if($emailcount>0){
        ?>
        <script>alert('You have already registered')</script>
        <script type="text/javascript">
        window.location.href = 'index.php';
        </script>
        <?php
    }else{
        if($pass === $pass_repeat){
            $sql = "INSERT INTO `registration` (`name`, `email`, `pass`, `pass_repeat`, `dob`, `gender`, `timestamp` ) VALUES('$name','$email','$passnew','$pass_repeat_new','$dob','$gender','$timestamp')";
            $result = $conn->query($sql);
            if($result){
               ?>
               <script>alert("Successfuly registered")</script>
               <?php
                header("location: thankyou.php");
            }
        }else{
            ?>
            <script>alert("Passwords do not match")</script>
            <script type="text/javascript">
            window.location.href = 'index.php';
            </script>
            <?php
        }
    }}
?>
