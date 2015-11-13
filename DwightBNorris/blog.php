<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/navigation.css" rel="stylesheet" />
    <link href="Content/body.css" rel="stylesheet" />
    <title>Blog</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar btn-primary"></span>
                        <span class="icon-bar btn-primary"></span>
                        <span class="icon-bar btn-primary"></span>
                    </button>

                </div>
                 <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="nav navbar-nav">
                        <li><a href="index.html" class="textBlack">Home</a></li>
                        <li><a href="about.html" class="textBlack">About Me</a></li>
                        <li><a href="contact.php" class="textBlack">Contact</a></li>
                        <li><a href="blog.php" class="textBlack">Blog</a></li>
                        <li><a href="resume.html" class="textBlack">Resume</a></li>
                        <li><a href="projects.html" class="textBlack">Projects</a></li>
                        <li><a href="certifications.html" class="textBlack">Certifications</a></li>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.column -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <div class="container-fluid" id="marginTop2">
        <div class="row">
			<div class="col-xs-2"></div>
			<div class="col-xs-8">
			   <h1 class="text-center">Blog - <a href="blog/wp-login.php" class="btn btn-primary">Admin Login</a></h1>

			   <?php
				require('blog/wp-blog-header.php');
				?>

				<?php
				$posts = get_posts('numberposts=10');
				foreach ($posts as $post) : setup_postdata( $post ); ?>
				<div class="date"><?php the_date(); echo "<br />"; ?></div>
				<div class="title"><?php the_title(); ?></div>
				<?php the_content(); ?> 
				<?php
				endforeach;
				?>
		   </div>

		   <div class="col-xs-2">

		   </div>
        </div>
    </div>






    <script src="Scripts/jquery-1.9.1.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
</body>

<footer>
    <div class="navbar" role="navigation">
        <div class="container">
            <div class="navbar-text pull-left">
                Copyright ©2015 DwightBNorris.com | by Dwight Norris | All Rights Reserved
            </div>
        </div>
    </div>
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67685422-3', 'auto');
  ga('send', 'pageview');

</script>
</html>
