<?php
    session_start();
    include("../api/connect.php");

{

}
?>

<html>
    <head>

        <title>candidate list - Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">

    </head>
    <body>
        <style>
            body{
                background-image: url(../uploads/result.jpg);
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
                background-color:  rgba(238, 223, 223, 0.850);
                width: 95%;
                padding: 30px;
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
            h2{
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

            }
            






        </style>

        <div id="mainsection">
        <div id="headersection">
           
            <a href="./can.php"> <button id="regibutton"><b>Candidates</b></button> </a>
            <a href="./Admin Panel.php"> <button id="loginbtn" type="submit"><b>Home</b></button></a>
          <a href="./Admin Panel.php"> <center> <img src="../uploads/ee.webp" height="50px" width="120px"></center></a>
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
                          <center>  <img style="float: right" src="../uploads/<?php echo $groupsdata[$i]['photo'] ?>" height="100" width="100" >
                            <b>Party Name: </b><?php echo $groupsdata[$i]['name']?><br><br>
                           <b>Final Votes: </b><?php echo $groupsdata[$i]['votes']?><br><br>
                    </center>
                            <form action="../api/vote.php" method="POST">
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
