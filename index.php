<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DataHacking</title>
</head>
<body>
<h2>S e a r c h N o t F o u n d</h2>
<p>the quieter you become, the more able to hear</p>


<button class="open-button" onclick="openForm()">account for anonymous</button>
<div class="form-popup" id="myForm">
  <form action="Work.php" class="form-container">
    <h1>Admin</h1>

    <label for="email"><b>YourEmail</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw"><b>Repeat Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">account</button>
    <button type="button" class="btn cancel" onclick="closeForm()">LogOut</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>