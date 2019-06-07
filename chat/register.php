<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

    input[type=password] {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
    
input[type=submit] {
  width: 90%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
    height: auto;
    width: 40%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
    
     label{
        font-family: monospace;
        font-size: 20px;
    }  
    
    @media only screen and (max-width:768px){
    #input input[type='text']{
        width: 98%;
        
    }
}
    
</style>
<body>


<center>
<h2>Register here</h2>
<div>
  <form action="" method="post">
    <label for="fname"> Username :</label>
    <input type="text" id="fname" name="user" placeholder="Your name..">
<br/>
    <label for="lname">Password :</label>
    <input type="password" id="lname" name="pass" placeholder="Your password..">
    
    <input type="submit" value="Register" name="submit">
    <br/>
    <a href="login.php" >Login here</a>&nbsp;&nbsp;&nbsp;
     <a href="about.php">About this</a>
      
  </form>
</div>
 </center>
 
 <?php

session_start();

    if(isset($_POST["submit"]))
    {
        if(!empty($_POST['user']) && !empty($_POST['pass']))
        {
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            
            //database connection
            $con = mysqli_connect("localhost","root","320270");
            $db=mysqli_select_db($con,'lets');
            $query =mysqli_query($con, "SELECT * FROM account WHERE username='$user'");
         
            $numrows = mysqli_num_rows($query);
            
            if($numrows == 0)
            {
                $sql="INSERT INTO account(username,password) VALUES('$user','$pass')";
                $result=mysqli_query($con,$sql);
                //result
                if($result){
                    echo "your Account created successfully";
                    header('location:login.php');
                 }
                else
                {
                    echo "Failure";
                }
            }
                else
                {
                    echo "That username already exist please try again.";
                }
    }
            else
            {
                ?>
                <script>alert('Require all felds');</script>
                <?php
            }
        }
        ?>
</body>
</html>
