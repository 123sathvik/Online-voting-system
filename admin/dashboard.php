<?php
    session_start();
    include("../api/connect.php");

   

?>

<html>
    <head>
        
        <title>Online Voting System - Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">

    </head>
    <body>
        <style>
            #backtn{
                padding: 7px;
                border-radius: 5px;
                background-color: aqua;
                color: black;
                float: left;
                margin: 10px;
            }

            #logoutbtn{
                padding: 7px;
                border-radius: 5px;
                background-color: aqua;
                color: black;
                float: right;
                margin: 10px;
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

            #regibutton {
                padding: 7px;
                border-radius: 5px;
                background-color: aqua;
                color: black;
                float: right;
                margin: 10px;
            }

            #loginbtn {
                padding: 7px;
                border-radius: 5px;
                background-color: aqua;
                color: black;
                float: left;
                margin: 10px;
                cursor: pointer;
            }
            
            



        
        </style>
        
        <div id="mainsection">
        <div id="headersection">
            <a href="./Admin Panel.php"> <button id="backtn"> Back</button> </a>
            <a href="logout.php"> <button id="logoutbtn">Logout</button> </a>
            <a href="../routes/register.html"> <button id="regibutton">Register</button> </a>
            <a href="../index.php"> <button id="loginbtn" type="submit"><b>Home</b></button></a>
            <li class="nav-item"><a class="nav-link" href="../candidate.php">Candidates</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Results.php">Results</a></li>

            
            <h1>Online Voting System</h1>
        </div>
        <hr>
        <div id="mainpannel">


        <div id="Group">
          <?php
          $groupsdata = $_SESSION['groupsdata'];
                if($_SESSION['groupsdata'])
                {
                    for ($i=0; $i<count($groupsdata); $i++)
                    {
                        ?>
                        <div>
                            <img style="float: right" src="../uploads/<?php echo $groupsdata[$i]['photo'] ?>" height="100" width="100">
                            <b>Group Name: </b><?php echo $groupsdata[$i]['name']?><br><br>
                            <!-- //<b>Votes: </b><?php echo $groupsdata[$i]['votes']?><br><br> -->
                        
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
        
            
           
    </body>
</html>