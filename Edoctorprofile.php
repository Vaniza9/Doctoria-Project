<?php
error_reporting(0);
        if(isset($_POST['done']))
        {
            $server="localhost";
            $username="root";
            $password="";
            $db="doctorprofile";
            $con=mysqli_connect($server,$username,$password,$db);
            if(!$con)
            {
                die("failed to connect database".mysqli_connect_error());
    
            }
            //echo " congraulation your connection has been  establish";
            $DoctorID = $_POST['DoctorID'];
            $Name = $_POST['Name'];
            $EmailID = $_POST['EmailID'];
            $PhoneNumber= $_POST['PhoneNumber'];
            $Eimage=$_FILES['image']['name'];
            $sql= "INSERT INTO editdoctorprofile(DoctorID,Name,EmailID,PhoneNumber,image) VALUES ('$DoctorID','$Name','$EmailID','$PhoneNumber','$Eimage')";
            $result=mysqli_query($con,$sql);


            //object operator
            if($result)
            {
                ?>
                <script>
                    alert("successfully");
                </script>
                <?php   
            }
            else
            {
                ?>
                <script>
                    alert(" not successfully");
                </script>
                <?php   
            }
        }
?>

<!DOCTYPE html>
<html>

<head>

    <title>Eidt Doctor Profile Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body background="images/background.jpg">
    <center>
        <div class="box">
            <form action="Edoctorprofile.php" method="post">
                <input type="file" id="file" name="image" class="form-control">
                <img src="images/profileimage.png" width="100%" height="100%">
              
                <input type="number" name="DoctorID" id="DoctorID" placeholder="Doctor ID">
                <input type="text" name="  Name" id="name" placeholder=" Name">
                <input type="Email" name="EmailID" id="EmailID" placeholder="Email ID">
                <input type="number" name="PhoneNumber" id="PhoneNumber" placeholder="Phone Number">
                <a href="doctor_profile.html">
                    <button name="done" style="float: center;margin:10px 18.2% 0 0;">Submit</button>
                </a>
            </form>
        </div>
    </center>
</body>
</html>
  
