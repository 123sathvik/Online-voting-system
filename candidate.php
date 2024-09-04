<?php
    session_start();
    include("./api/connect.php");

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
            h1{
                height: 50px;
    text-align: center;
    padding-top : 5px;
    padding-left: 240px;
    padding-right: 240px;
    font-size: 50px;
    color: yellow;
    font-family:Georgia, 'Times New Roman', Times, serif;
    text-align:center;
            }
            body{
                background-image: url(./uploads/main.jpeg);
                background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
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
                background-color:   rgba(255, 255, 255, 0.781);;
                width:95%;
                padding: 30px;
                float: right;
                color: black;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 19px;
                align-items: center;
            }
            #mainpannel{
                padding: 20px;
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
            header{
                background-color:purple;
            }






        </style>
       
        <div id="mainsection">
        <div id="headersection">
            <a href="./index.php"> <button id="logoutbtn"><b>Logout</b></button> </a>
            <a href="./routes/dashboard.php"> <button id="loginbtn" type="submit"><b>Back</b></button></a>
           <center> <img src="./uploads/can.jpg" height="60px" width="250px"></center>
        </div>
        </header>
        <hr>
      <center>  <div id="mainpannel"></center>


       <div id="Group">
          <?php
                $groupsdata = $_SESSION['groupsdata'];
                

                if($_SESSION['groupsdata'])
                {
                    for ($i=0; $i<count($groupsdata); $i++)
                    {
                        ?>
                        <div>
                            <img style="float: right" src="./uploads/<?php echo $groupsdata[$i]['photo'] ?>" height="70" width="100">&nbsp;
                            <b>Group Name: </b><?php echo $groupsdata[$i]['name']?>
                      <!--      <b>Votes: </b><?php echo $groupsdata[$i]['votes']?><br><br>-->
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
