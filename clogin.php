<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">

    <title>Document</title>
</head>
<body>
    <style>
        h1 {
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            text-align: center; 
        }
    </style>
    <center>
    <div id="headersection">
    <div id="buton" type="submit">
        <a href="index.php">Home</a>
            
</div>
        <h1>Online Voting System</h1>
        </div>
        
        <hr>
      <div id="hello">
       <div id="bodysection">
        <form action="api/log.php" method="POST">
            <div class="loginbtn">Login</div><br><br><br><br>
            <input type="text" class="input-field" name="rnum" placeholder="Enter Register Number"><br><br>
            <input type="text" class="input-field" name="email" placeholder="E-Mail"><br><br>
            <input type="password" class="input-field" name="password" placeholder="Enter password"><br><br>

            <select id="dropbox" name="role">
                <option value="1">Voter</option>
                <option value="2">group</option>
            </select><br><br> 
            <button id="loginbtn" type="submit">Login</button><br>
             New user? <a href="routes/register.html">Register here</a>
            </select>
        </form><br>
        </div><br><br>
    </div>
</center>
</body><br><br><br><br><br><br>
</html><br>