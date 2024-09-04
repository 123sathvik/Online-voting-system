<?php
    session_start();
    if(!isset($_SESSION['AdminLoginId']))
    {
        header("location: admins.php");
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style> 
    html{
        height: 100%;
    }
        body{
            margin:0px;
            background-image: url(../uploads/adm.jpg);
            background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
        }
        div.header{
            font-family:poopins;
            display: flex;
            justify-content: space-between;
            align-items:center;
            padding: 0px 60px;
            background-color: #204969;
        }
        div.header button{
            background-color: #f0f0f0;
            font-size: 16px;
            font-weight: 550;
            padding: 8px 12px;
            border: 2px solid black;
            border-radius: 5px;
            cursor: pointer;
        }
        #loginbtn{
    padding: 8px 20px;
        margin: 50px auto;
        border: 2px solid black;
        border-radius: 8px;
        background: rgb(220, 226, 226);
        color: black;
        cursor: pointer;
        transition: .5s;
        float:var(center);
        
    
        
}
main{
    height: 400px;
    text-align: center;
    padding-top : 80px;
    padding-left: 240px;
    padding-right: 240px;
    font-size: 50px;
    color: rgb(176, 236, 106);
    font-family:Georgia, 'Times New Roman', Times, serif;
    text-align:center;
    
    

}
a{
    text-decoration: none;
}

    </style>
</head>
<body>
    <div class="header">

    <h1>WELCOME TO ADMIN PANEL - <?php echo $_SESSION['AdminLoginId']?></h1>
    <form method="POST">
    <button name="Logout">Log Out</button>
    <a id="loginbtn" href="./candregister.html"><b>Candidate Register</b></a>
    <a id="loginbtn" href="./can.php"><b>Candidate lists</b></a>
    <a id="loginbtn" href="./Results.php"><b>Result</b></a>
    
    
    </form>
</div>

<?php
if(isset($_POST['Logout']))
{
    session_destroy();
    header("location: admins.php");
}
?>
<main>
<img src="../uploads/logo2.PNG" href="index.php" alt="logo for Online Voting System" height="110px" width="300px" href="index.php" ><br><br>
<center> <b> Online Voting System</b></center></main>
</body>
</html>
