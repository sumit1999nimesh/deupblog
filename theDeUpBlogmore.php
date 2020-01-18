<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="description" content="Give your message to the world and also your valuable feedback">
    <meta name="keywords" content="Write article,post Articles">
    <meta name="author" content="sumit Kumar">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

      <link rel="stylesheet" href="theDeUpBlogstyle.css" type="text/css">
      <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


            <script type="text/javascript" src="theDeUpBlog.js"></script>
      <title>More | Contact Us</title>
      <link rel="icon" type="image/logo_theDeUpBlog.jpg" href="image/logo_theDeUpBlog.jpg"/> 

<!--Adsence-->

<!--Adsence-->

      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127455821-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127455821-1');
</script>

<style type="text/css">
  body
  {
    padding: 80px 0px 0px 0px;
    width: 100%;
  }
  .form
  {
    padding: 40px 10px 20px 10px;
  }
</style>
</head>
 <body>

  <nav class=" navbar navbar-dark navbar-expand-sm fixed-top" style="width: 100%;">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
             <span class="navbar-toggler-icon"></span> 
        </button>
        <a class="navbar-brand mr-auto" href="index.html"><h1>theDeUpBlog</h1></a>
        <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a class="nav-link" href="index.html"><span class="fa fa-home"></span></a></li>
              <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="theDeUpBlogpost.php"><span class="fa"></span> Post </a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href="theDeUpBlogpost.php"><h5 style="color: #abc;">My Post</h5></a></li>
                 <li><a class="nav-link" href="mywork.php"><h5 style="color: #abc;">My Work</h5></a></li>
               </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="theDeUpBloggallary.php"> Gallery </a></li>
              <li class="nav-item"><a class="nav-link" href="theDeUpBlogabout.php"> About </a></li>
              <li class="nav-item active"><a class="nav-link" href="#"> More</a></li>
            </ul> 
        </div>
    </div>
  </nav>
  
   
  <div class="jumbotron">
 		<div class="container">
      <div class="col-12">
        <p class="post">
 			  Post your Thoughts and Articles here
        <br>
          Every single people have his/her own way of thinking and view point for different aspect of life.There is way to show off your thoughts and creativity in the front of whole world.IT may include your own Poem, Story and many more.We will post your article in our website with your name and photo and also promote your blog or pages.If you want so, also provide us link with your article at the end of article..You can also promote your links with your article with this website.
          <br>
        <button class="btn btn-primary"><a href="#form" style="color: #fff;"> Click to Post</a></button>
        </p>
      </div>
    </div>
  </div>

<div class="form" id="form">	  
	<div class="row row-content">
        <div class="col-12">
          <h3>Write your POST || Contact Us</h3>
        </div>
        <div class="col-12 col-md-9">
                <form action="theDeUpBlog.php" method="post" enctype="multipart/form-data">
				   <div class="form-group row">
				       <label for="firstname" class="col-md-2 col-form-label">First Name</label>
				       <div class="col-md-10">
					       <input type="text" class="form-control" id="firstname" name="firstname"
						   placeholder="First Name">
					   </div>
				   </div>
				   <div class="form-group row">
				       <label class="col-md-2 col-form-label">Last Name</label>
				       <div class="col-md-10">
					       <input type="text" class="form-control" id="lastname" name="lastname"
						   placeholder="Last Name">
					   </div>
				   </div>
				   <div class="form-group row">
				       <label for="contactnum" class="col-12 col-md-2 col-form-label">Contact No.</label>
				       <div class="col-5 col-md-3">
					       <input type="tel" class="form-control" id="areacode" name="areacode"
						   placeholder="Area Code eg : +91(India)" maxlength="3">
					   </div>
					   <div class="col-7 col-md-7">
					       <input type="tel" class="form-control" id="contactnum" name="contactnum"
						   placeholder="Enter Contact Number" maxlength="10">
					   </div>
				   </div>
				   <div class="form-group row">
				       <label for="emailid" class="col-md-2 col-form-label">Email</label>
				       <div class="col-md-10">
					       <input type="email" class="form-control" id="emailid" name="emailid"
						     placeholder="Enter Email Ex : username@gmail.com">
					    </div>
				   </div>
				   <!--div class="form-group row">
				       <label for="file" class="col-md-2 col-form-label">Upload Image</label>
				       <div class="col-md-10">
					       <input type="file" class="form-control" id="file" name="file"
						   placeholder="Select Image">
					   </div>
				   </div-->

				   <div class="form-group row">
				       <label for="post" class="col-md-2 col-form-label">Your Post  or  Feedback </label>
				       <div class="col-md-10">
					       <textarea class="form-control" id="post" name="post" rows="12" placeholder="Write Your Post here">
					       </textarea>
					   </div>
				   </div>
				   <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
               <input class="btn btn-primary" type="submit" name="submit" value="Send Post">
						</div>
				   </div>
				</form>
        </div>
        <div class="col-12 col-md">
        </div>
    </div>
</div>


  <footer class="footer" style="bottom: 0;">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html"><span class="fa fa-home"></a></li>
                        <li><a href="theDeUpBloggallary.php">Gallery</a></li>
                        <li><a href="theDeUpBlogpost.php">Post</a></li>
                        <li><a href="theDeUpBlogabout.php">About</a></li>
                        <li><a href="theDeUpBlogmore.php">More</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                	<h4>Contact Us</h4>
                    <address>
		              <i class="fa fa-envelope fa-lg"></i> <a href="mailto:theDeUpBlog@gmail.com">theDeUpBlog@gmail.com</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href=""><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/theDeUpBlog/" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href=""><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
                    </div>
                </div>
           </div> 
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2019
                    <br>	
                    <a href="index.html"> theDeUpBlog</a> | 
                    <a href="privacypolicy.php" target="_blank">Privacy Policy</a></p>
                </div>
           </div>
        </div>
    </footer>

      <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 </body>
</html>