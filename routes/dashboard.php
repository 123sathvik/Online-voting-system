<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: ../");
    }
    $userdata = $_SESSION['userdata'];
    $groupsdata = $_SESSION['groupsdata'];

    if($_SESSION['userdata']['status']==0){
        $status = '<b style="color:red">Not Voted</b>';
    }
    else{
        $status = '<b style="color:green">Voted</b>';
    }
?>

<html>
    <head>
        
        <title>Online Voting System - Dashboard</title>
        <header>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 

        <link rel="stylesheet" href="../css/stylesheet.css">
        <link rel="stylesheet" href="./css/styl.css">


    </head>
    <body>
        <style>
            body{
                background-image: url(../uploads/adm.jpg);
            }
            #profile{
                background-color:  rgba(238, 223, 223, 0.596);
                width: 20%;
                padding: 30px;
                float: left;
                color: black;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            #group{
                background-color:  rgba(238, 223, 223, 0.596);
                width: 60%;
                padding: 30px;
                float: right;
                color: black;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 15px;
            }
            #votebtn{
                padding: 7px;
                border-radius: 5px;
                background-color: Green;
                color: black;
                float: left;
            }
            #mainpannel{
                padding: 10px;
            }

            #voted{
                padding: 7px;
                border-radius: 5px;
                background-color: red;
                color: black;
                float: left;
            }




        
        </style>
         <nav class="navbar navbar-expand-lg  ">
            
            
            <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              </button><br>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent"><br>

                   
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../about us/about.html">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="../candidate.php">Candidates</a></li>
                        <li class="nav-item"><a class="nav-link" href="../index.php">LogOut</a></li>
                        <li class="nav-item"><a class="nav-link" href="../admin/admins.php">Admin</a></li>
                        

        
        </header>

            
        <a href="../index.php">   <center> <h1>Online Voting System</h1></center></a>
        </div>
        <hr>
        <div id="mainpannel">
        <div id="profile">
            <center><img src="../uploads/<?php echo $userdata['photo'] ?>" hight=100; width=100; ></center><br><br>
            <b>Name:</b><?php echo $userdata['name']?> <br><br>
            <b>Mobile:</b><?php echo $userdata['mobile']?><br><br>
            <b>Register No:</b><?php echo $userdata['rnum']?><br><br>
            <b>Status:</b><?php echo $status?> <br><br>
        </div>

        <div id="Group">
          <?php
                if($_SESSION['groupsdata'])
                {
                    for ($i=0; $i<count($groupsdata); $i++)
                    {
                        ?>
                        <div>
                            <img style="float: right" src="../uploads/<?php echo $groupsdata[$i]['photo'] ?>" height="100" width="100">
                            <b>Group Name: </b><?php echo $groupsdata[$i]['name']?><br><br>
                            <!-- //<b>Votes: </b><?php echo $groupsdata[$i]['votes']?><br><br> -->
                            <form action="../api/vote.php" method="POST">
                                <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>">
                                <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id'] ?>">
                                <?php
                                    if($_SESSION['userdata']['status']==0){
                                        ?>
                                         <input type="submit" name="votebtn" value="vote" id="votebtn"><br>
                                        <?php
                                    }
                                    else{
                                        ?>
                                       <button disabled type="button" name="votebtn" value="vote" id="voted">Voted</button><br>
                                       <?php

                                    }
                                ?>
                         </form>
                        </div><br>
                        <hr>
                      <?php
                    }
                }
                else{

                }
                ?>
    
            </div>
            </div>
            </nav>
        
            
            <script src="./js/bootstrap.min.js">
        </script>
          
    </body>
</html>