<?php
  include '../header.php';
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="../index.php" class="navbar-brand">Quiz Application</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="../index.php" class="nav-item nav-link">Home</a>
            <a href="../pages/leaderboard.php" class="nav-item nav-link">Leaderboard</a>	
            <a href="../about.php" class="nav-item nav-link">About</a>
        </div>
        <div class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['user_name'])) {
  
                }
                else{
                    echo '<a href="#" class="nav-item nav-link active">Register</a>
                            <a href="../login/login.php" class="nav-item nav-link">Login</a>';
                }
            ?>
      </div>
    </div>
</nav>
  
 <?php
        $userexists=$_GET['userexists'];
        $emailexists=$_GET['emailexists'];
        $error=$_GET['error'];
   
  ?> 


<div class="jumbotron p-4">
     <div class="text-center">
        <p class="display-4">Register</p>       
     </div>
  </div>


<div class="container mt-2 mb-2">
       <div class="text-center">
           <?php
            if($userexists)
                echo "<h5>User already exists</h5>";
            else if($emailexists)
                echo "<h5>Email is already registered</h5>";
            else if($error)
                echo "<h5>Something went wrong. try again</h5>";
           ?>
        </div>
     </div>


<form class="jumbotron m-4" method="POST" action="register_details.php">
    <div class="form-group">
        <label for="inputname">Name</label>
        <input type="text" class="form-control" id="inputname" placeholder="name" name="name" required>
    </div> 
    <div class="form-group">
        <label for="inputcollegename">College name</label>
        <input type="text" class="form-control" id="inputcollegename" placeholder="collegename" name="collegename" required>
    </div> 
    <div class="form-group">
        <label for="inputcourse">Course</label>
        <input type="text" class="form-control" id="inputcourse" placeholder="course" name="course" required>
    </div> 
    <div class="form-group">
        <label for="inputcollegename">Contact</label>
        <input type="number" class="form-control" id="inputcontact" placeholder="contact" name="contact" required>
    </div> 
    <div class="form-group">
        <label for="inputusername">Username</label>
        <input type="text" class="form-control" id="inputuser_name" placeholder="username" name="user_name" required>
    </div>
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputemail" placeholder="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" required>
    </div>
    <button type="submit" name="register_user" class="btn btn-dark">Sign up</button>
</form>

</body>
</html>
