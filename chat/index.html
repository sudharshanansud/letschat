<?php include 'database.php'; ?>
<?php
session_start(); 
if($_SESSION['username']=="")
{
    header("Location: login.php");
}
$query ="SELECT * FROM shouts ORDER BY id DESC";
$shouts = mysqli_query($con, $query);
//create select query
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lets..</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />

</head>
<body>
    <div id="container">
        <header>
            <h1>Let's chat </h1>  
            
            <h4>Loged in <strong><?php echo $_SESSION['username']; ?></strong> </h4>
        </header>  
        <div id="shouts">
            <ul>
            <?php while ($row = mysqli_fetch_assoc($shouts)) : ?>

              <li class="shout"><span><?php echo $row['time'] ?> - </span><strong>
                <?php echo $row['user']; ?>
                    </strong> : <?php echo $row['message'] ?></li>

                    <?php endWhile; ?>

            </ul>
        </div>
       <div id="input">
         <?php if (isset($_GET['error'])): ?>
           <div class="error"><?php echo $_GET['error']; ?> </div>
         <?php endif; ?>
       <form method="post" action="process.php">
          <center><input type="text" name="message" placeholder="Enter your message"> 
           <br/>
           <input class="shout-btn" type="submit" name="submit" value="Send">
           </center>
       </form>
       <p><a href="about.php">About</a> &nbsp;&nbsp;&nbsp;
       <a href="logout.php">Logout</a></p>
    </div>
    
</body>
</html>
