<?php include('connect.php');?>

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
                        <a href="register.php">Register Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- First Blog Post -->
<br><br><br>
	 <h1>
       Registered Contacts
     </h1>

<table class="table table-bordered table-hover">
		<thead>
       <tr>  
			  <th>Id</th>
			 <th>Surname</th>
			 <th>Firstname</th>
			 <th>Lastname</th>
			<th>Number</th>
			<th>Address</th>
			<th>Edit</th>
			<th>Delete</th>
         </tr>
      </thead>
          <tbody>
<?php
$query= "SELECT * FROM users ";
$select_users= mysqli_query ($connection,$query);
	while ($row=mysqli_fetch_assoc($select_users)){
	$id=$row['id'];
	$surname=$row['surname'];
	$firstname=$row['firstname'];
	$lastname=$row['lastname'];
	$number=$row['number'];
	$address=$row['address'];
		
		echo"<tr>";
		  echo"<td>{$id}</td>";
		 echo"<td>{$surname}</td>";
		echo"<td>{$firstname}</td>";
		 echo"<td>{$lastname}</td>";
		echo"<td>{$number}</td>";
		echo"<td>{$address}</td>";
		echo "<td><a href='update_user.php?source=update_user&number={$number}'>Edit </a></td>" ;
		echo "<td><a href='users.php?delete={$number}'>Delete </a></td>" ;
		 //echo "<td><a href='update_users.php?source=update_user&u_id={$user_id}'>Edit </a></td>" ;
           
		 echo "</tr>";
		}
		if(isset($_GET['delete'])){
			$query= "DELETE FROM users WHERE number={$number}";
			$result=mysqli_query($connection,$query);
			if (!$result){
				die("Failed to Delete Data".mysqli_error($connection));
			}else
			{
				echo"Record Deleted";
			}
			
			//header("LOCATION:users.php");
			
		}
?>
		  </tbody>
	

</table> 
        </div>
			   <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Search Contact</h4>
                    <div class="input-group">
                        <input type="text" name="phone" placeholder="Enter user number"class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

            </div>
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
