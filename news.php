<?php 
require('db.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:index.php');
	die();
}

if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];

    $sql="INSERT INTO admin_user (username, password, role) values  ('$username','$password','$role')";
    $result=mysqli_query($con,$sql);
    if($result){

        header("Location: user-index.php");
    }
    else{
    }
         die(mysqli_error($con));
}


?>




<?php include('header.php')?>
  <!-- Font Icon -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<div class="container-fluid">
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-fw fa-newspaper"></i>
            Add new user
        </div>
        <div class="card-body">
            <div class="main">

                <!-- Sign up form -->
                <section class="signup">
                    <div class="container">
                        <div class="signup-content">
                            <div class="signup-form">
                                <h2 class="form-title">Sign up</h2>
                                <form method="POST" class="register-form" id="register-form">
                                    <div class="form-group">
                                        <label for="username"><i
                                                class="zmdi zmdi-account material-icons-name"></i></label>
                                        <input type="text" name="username" id="username" placeholder="Username" autocomplete="off"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                        <input type="password" name="password" id="password" placeholder="Password" autocomplete="off"/>
                                    </div>
									<div class="form-group">
                                        <label for="role"><i class="zmdi zmdi-lock"></i></label>
                                        <input type="password" name="role" id="role" placeholder="Role" autocomplete="off"/>
                                    </div>
                                    <div class="form-group form-button">
                                        <input type="submit" name="submit" id="submit" class="form-submit"
                                            value="Register" />
                                    </div>
                                </form>
                            </div>
                            <div class="signup-image">
                                <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>

                            </div>
                        </div>
                    </div>
                </section>

				   <!-- JS -->
				   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>


            </div>

        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php include('footer.php')?>