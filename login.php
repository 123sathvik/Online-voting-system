
    <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="lg.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<center>
    <h2>Modal Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</center>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="api/log.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="hello">
      <label for="rnum"><b>Enter Register Number</b></label>
      <input type="text" name="rnum" placeholder="Enter Register Number" required>

      <label for="email"><b>Enter Email</b></label>
      <<input type="text" name="email" placeholder="E-Mail" required>
      
       <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
     <button type="submit">Login</button></a>
      <select id="dropbox" name="role">
        <option value="1">Voter</option>
        </select>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

</center>
</body><br><br><br><br><br><br>
</html><br>