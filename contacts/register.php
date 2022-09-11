<?php include "connect.php";?>
<?php
if(isset($_POST['submit'])){
	$surname=$_POST['surname'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$number=$_POST['number'];
	$address=$_POST['address'];
	$query="INSERT INTO users(surname,firstname,lastname,number,address)";
	$query.= "VALUES('{$surname}','{$firstname}','{$lastname}','{$number}','{$address}')";
	$result=mysqli_query($connection,$query);
		if (!$result)
		{
		die("Failed to register".mysqli_error($connection));
		}else
		{
	echo "Data registered successfully". "<a href='index.php'>&nbsp;&nbsp;&nbsp;&nbsp;View User </a>";  
		}
		
	
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Phonebook System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Phonebook Management System</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Register Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
     <!-- Page Content -->
    <div class="container">
	<h1>
        Register Contact
     </h1>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="surname">Surname </label>
        <input type="text" class="form-control" name="surname">
    </div>
    <div class="form-group">
        <label for="firstname">Firstname </label>
        <input type="text" class="form-control" name="firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Lastname </label>
        <input type="text" class="form-control" name="lastname">
    </div>
    <div class="form-group">
        <label for="number">Phone number </label>
        <input type="text" class="form-control" name="number">
    </div>
	<div class="form-group">
        <label for="address">Address </label>
        <textarea type="text" class="form-control" name="address"> </textarea>
    </div>
    
    <div class="form-group">
        <input class="btn btn-primary" type="submit"  name="submit" value="Create User">
    </div>
    
</form>


        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Phonebook 2021</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
