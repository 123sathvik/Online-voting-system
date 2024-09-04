<?php
    session_start();
    include("../api/connect.php");

       

        ?>
<html>
    <head>

        <title>candidate list - Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">

    </head>
    <body>
        <style>
            body{
                background-color:black;
            }
            #backtn{
                padding: 7px;
                border-radius: 5px;
                background-color: aqua;
                color: black;
                float: left;
                margin: 10px;
                cursor: pointer;
            }

            #logoutbtn{
                padding: 7px;
                border-radius: 5px;
                background-color: aqua;
                color: black;
                float: right;
                margin: 10px;
                cursor: pointer;
            }
           
            #group{
                background-color:  rgba(238, 223, 223, 0.596);
                width: 95%;
                padding: 25px;
                float: right;
                color: black;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 15px;
            }
            #mainpannel{
                padding: 10px;
            }


            #regibutton {
                padding: 7px;
                border-radius: 5px;
                background-color: aqua;
                color: black;
                float: right;
                margin: 10px;
                cursor: pointer;
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
            <a href="./candregister.html"> <button id="regibutton"><b>Register</b></button> </a>
            <a href="./Admin Panel.php"> <button id="loginbtn" type="submit"><b>Home</b></button></a>
           <center> <img src="../uploads/can.jpg" height="60px" width="200px"></center>
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
                            <img style="float: right" src="../uploads/<?php echo $groupsdata[$i]['photo'] ?>" height="60" width="100">
                            <b>Group Name: </b><?php echo $groupsdata[$i]['name']?><br><br>
                      <!--      <b>Votes: </b><?php echo $groupsdata[$i]['votes']?><br><br>-->
                      <form action="./candidate.php" method="POST">
                                <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>">
                                <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id'] ?>">
                                

                                    
                            
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
