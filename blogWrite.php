<?php
	session_start();
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>AgroMart : Write a Blog</title>
	
		<meta charset="UTF-8">
		
		<link rel="icon" type="image/png" href="logo.png">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
		<script src="https://cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
	</head>
	<body class="subpage" style="background-image:url(bw.jpg);">

		<?php
			require 'menu.php';
		?>



		<!-- <div class="btn-group-lg btn-group-justified">
			<div class="row">
				<div class="4u$ 12u$(small)">
    				<a href="#" class="button alt fit">Blogs & Poetry</a>
				</div>
				<div class="4u$ 12u$(small)">
    				<a href="#" class="button alt fit">Photography</a>
				</div>
				<div class="4u$ 12u$(small)">
					<a href="#" class="button alt fit">Paintings and Sketches</a>
				</div>
			</div>
  		</div>

		<br> -->

	<form method="post" action="Blog/blogSubmit.php" >
        <section id="main" class="wrapper"  >
            <div class="inner">
				<div class="container" style="width: 70%">
				<div class="row uniform">
					<div class="9u 12u$(small)">

					</div>
					<div class="3u 12u$(small)">
						<a href="blogView.php" class="button special fit">View Blogs</a>
					</div>
				</div>
				<br />
                <div class="box" style="border: 2px solid black;border-radius:12px; padding: 15px;backdrop-filter: blur(20px);">
                    <div class="row uniform">
                        <div class="12u$">
                            <input type="text" name="blogTitle" id="blogTitle" value="" placeholder="Blog Title" required/>
                        </div>
                       	<div class="12u$">
							<textarea name="blogContent" id="blogContent" rows="12" placeholder="Blog Content"></textarea>
						</div>
						<br>
						<div class="12u$">
						<center>
							<input type="submit" name="submit" class="button special" value="SUBMIT"/>
						</center>
						</div>
                    </div>
                </div>
            </div>
        </section>
    </form>

		<script>
			 CKEDITOR.replace( 'blogContent' );
		</script>

		<!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

	</body>
</html>
