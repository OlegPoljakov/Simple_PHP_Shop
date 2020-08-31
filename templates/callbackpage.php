<!DOCTYPE html>
<html>
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Carousel Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    
    <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">   
</head>

<body>

	<header>
	  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	    <a class="navbar-brand" href="main.php">Modern Toys</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarCollapse">
	      <ul class="navbar-nav mr-auto">
	        <!--<li class="nav-item active">-->
	          <li class="nav-item">
	          <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="shop.php">Shop</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="delivery.php">Delivery</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href=contact.php>Contact Us</a>
	        </li>
	        
	        <li class="nav-item">
	          <a class="nav-link" href=callback.php>Get a callback!</a>
	        </li>
	      
	      </ul>
	    </div>
	    <a href="#" class="fa fa-facebook"></a>
	    <a href="#" class="fa fa-instagram"></a>
	  </nav>
	</header>

	<!--
	<form action="" method="post">
		First Name: <input type="text" name="first_name"><br>
		Last Name: <input type="text" name="last_name"><br>
		Email: <input type="text" name="email"><br>
		Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	-->

	<div class="container">  
	<form action="" method="post">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">First name</label>
	    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter first name">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Last name</label>
	    <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter last name">
	  </div>
	  <div class="form-group">
		<label for="comment">Message:</label>
		<textarea class="form-control" name="message" rows="5" id="comment"></textarea>
	  </div>
	  <button type="submit" name="submit" value="Submit">Submit</button>

	  <!--
	  <div class="form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	  -->	
	</form>
	</div>

	<?php
	if ($sent==true) {
		?>
		<div style="text-align:center">
    		<h2><?php echo $feedback ?></h2>
		</div>
		<?php
	}
	?>
	</body>
</html>  
