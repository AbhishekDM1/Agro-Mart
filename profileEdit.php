<?php
    session_start();
?>

<!DOCTYPE HTML>

<html lang="en">
    <head>
        <title>Profile: <?php echo $_SESSION['Username']; ?></title>
        
		<meta charset="UTF-8">
		<title>Agro Mart</title>
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
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
    </head>

    <body class="subpage" style="background-image:linear-gradient( rgba(219, 248, 222, 0.7),rgba(219, 248, 222, 0.7)),url(editpro.jpg);background-size:cover;">

        <?php
            require 'menu.php';
        ?>

        <section id="post" class="wrapper bg-img" data-bg="banner2.jpg">
            <div class="inner">
                <div class="box">
                <header>
                    <span class="image left"><img src="<?php echo 'images/profileImages/'.$_SESSION['picName'].'?'.mt_rand(); ?>" class="img-circle" class="img-responsive" height="200px"></span>
                    <br>
                    <h2><?php echo $_SESSION['Name'];?></h2>
                    <h4><?php echo $_SESSION['Username'];?></h4>
                    <br>
                    <form method="post" action="Profile/updatePic.php" enctype="multipart/form-data">
                        <input type="file" name="profilePic" id="profilePic">
                        <br>
                        <div class="12u$">
                            <input type="submit" class="button special small" name="upload" value="Upload" />
                            <input type="submit" class="button special small" name="remove" value="Remove" />
                        </div>
                    </form>
                </header>
                <form method="post" action="Profile/updateProfile.php">
                    <div class="row uniform">
                        <div class="8u 12u$(xsmall)">
                            <input type="text" name="name" id="name"  placeholder="Full Name" required />
                        </div>
                        <div class="4u 12u$(xsmall)">
                            <input type="text" name="mobile" id="mobile"  placeholder="Mobile No" required/>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="uname" id="uname"  placeholder="Username" required/>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="email" name="email" id="email"  placeholder="Email" required/>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <div class="select-wrapper">
                              <select name="section" id="section">
                                    <option value=""></option>
                                    <option value="Band">work 1</option>
                                    <option value="Drama">work 2</option>
                                    <option value="Dance">work 3</option>
                                    <option value="Decoration">work 4</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="6u 12u$(xsmall)" width="100px">
                            <input type="text" name="post" id="post"  placeholder="Post Name" required/>
                        </div>
                        <p>
                            <b>Education : </b>
                        </p>
                        <div class="3u 12u$(small)">
                            <input type="radio" id="diploma" name="edu" value="Diploma" checked>
                            <label for="1">Diploma</label>
                        </div>
                        <div class="3u 12u$(small)">
                            <input type="radio" id="btech" name="edu" value="B.TECH">
                            <label for="btech">B.TECH</label>
                        </div>
                         <div class="3u 12u$(small)">
                            <input type="radio" id="mtech" name="edu" value="M.TECH">
                            <label for="mtech">M.TECH</label>
                        </div>
                        <!-- <div class="3u 12u$(small)">
                            <input type="radio" id="mtech" name="edu" value="M.TECH">
                            <label for="mtech">BSE</label>
                        </div> -->
                        
                        <p>
                            Choose Year : 
                        </p>
                        <div class="2u 12u$(small)">
                          
                            <input type="radio" id="1" name="year" value="1" checked>
                            <label for="1">1<sup>st</sup> Year</label>
                        </div>
                        <div class="2u 12u$(small)">
                            <input type="radio" id="2" name="year" value="2">
                            <label for="2">2<sup>nd</sup> Year</label>
                        </div>
                        <div class="2u 12u$(small)">
                            <input type="radio" id="3" name="year" value="3">
                            <label for="3">3<sup>rd</sup> Year</label>
                        </div>
                         <div class="2u 12u$(small)">
                            <input type="radio" id="4" name="year" value="4">
                            <label for="4">4<sup>th</sup> Year</label>
                        </div>
                        <div class="12u$">
                        <center>
                            <input type="submit" class = "button special" value="Update Profile" />
                        </center>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </section>

        <!-- Scripts -->
            <script src="js/jquery.min.js"></script>
            <script src="js/jquery.scrolly.min.js"></script>
            <script src="js/jquery.scrollex.min.js"></script>
            <script src="js/skel.min.js"></script>
            <script src="js/util.js"></script>
            <script src="js/main.js"></script>

    </body>
</html>
