<?php
session_start();
error_reporting(0);
include("index.php");
if(isset($_POST['submit']))
  {
    include("../api/connect.php");
   $rnum = $_POST['rnum'];
   $name = $_POST['name'];
   $date = $_POST['bdate'];
   $mobile = $_POST['mobile'];
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];
   $address = $_POST['address'];
   $email = $_POST['email'];
   $image = $_FILES['photo']['name'];
   $tmp_name = $_FILES['photo']['tmp_name'];
   $role = $_POST['role'];




   $ret=mysqli_query($connect, "select rnum from user where rnum='$rnum'");
      $result=mysqli_fetch_array($ret);
      if($result>0){
        echo '
    <script>
        alert("This register number is already exist");
        window.location = "./candregister.html";
    </script>
  ';
    }

    elseif($password!=$cpassword){
      echo '
        <script>
            alert("Password and confirm password does not match!");
            window.location = "./candregister.html";
        </script>
      ';

}

      else{
        move_uploaded_file($tmp_name, "../uploads/$image");
        $insert = mysqli_query($connect, "INSERT INTO user (rnum, name, bdate, mobile, address, email, password, photo, role, status, votes) VALUES ('$rnum', '$name', '$date', '$mobile', '$address', '$email', '$password', '$image', '$role', 0, 0)");
        if ($insert) {
          echo '
      <script>
          alert("Registraion Successfull");
          window.location = "./candregister.html";
      </script>
    ';
        }


        }
      }

  ?>
