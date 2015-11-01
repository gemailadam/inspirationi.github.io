<?php 
/*
*https://codex.wordpress.org/Theme_Development
*
*
*/ ?>
<!DOCTYPE html>
<html>
<head>
	<!--http://www.metatags.org/meta_name_slurp-->
	<!--Add the following meta tag in the source of your web-page. There is a difference between html and xml. If you see at the end of a line " /> it means it is xml , if you see  "> it is html.-->
	<meta name="keywords" content="web ,development , developer , design , IT , Information , Technology , HTML , PHP , asp.net , javascript , jquery , ajax , HTML5 , CSS , CSS2 ,CSS3 , bootstrap , wordpress , joomla ,drupal "/>
	<meta name="description" content="we have been working to create designs that serve your business goals. That is what I like to do with passion.other people resist change because they just like finensial growing only, I love Internet web Development , Design and Information Technology , So I want The best always for me before you that why your success is my success. Insperation-inspection.com is the starting access point for you and the Garde for your Web security."/>
	<meta name="robots" content="noindex, nofollow"/>
	<meta name="author" content="Hesham Hussain"/>
	<meta name="web_author" content="insperation inspection Orgnization"/>
	<meta name="contact" content="gemail.adam@gmail.com"/>
	<meta name="copyright" content="insperation inspection Orgnization"/>
	<meta name="googlebot" content="noarchive"/>
	<meta name="googlebot" content="nosnippet"/>
	<meta name="googlebot" content="noindex"/>
	<meta name="googlebot" content="nofollow"/> 
	<meta name="rating" content="safe for kids"/>
	<meta name="reply-to" content="gemail.adam@gmail.com"/>
	<meta http-equiv="Cache-control" content="public"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="Set-Cookie" content="ACCOUNT=9983373;path=/; expires=Thursday, 20-May-17 00:15:00 GMT"/>
	<!--used for home blog page for not cached for new posts-->
	<meta http-equiv="pragma" content="no-cache"/>
	<!--This meta tag makes sure that others are not able to show your page in a frame on their own website.-->
	<meta http-equiv="window-target" content="_top"/>
	<!--http://www.w3.org/PICS/-->
	<meta http-equiv="pics-label" content="text"/>
   
<!-- from hh -->
    <meta charset="UTF-8"><!---->
	<meta name="viewport" content="width=device-width,initial-scale=1"><!--mobil first media query to work at mobile good -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" ><!--for bootstrap to work good at IE-->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="">

		<!-- IE 9 use different method than IE 7 & 8 to start good -->		
		<!--[if it ie 9]>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
		<![endif]-->

		<!--search difference between wordpress html5.js vs html5shiv.js by cdn-->
<!-- from hh END -->

	<link rel="shortcut icon" href="favicon.ico" />

<!--microsoft Latest compiled and minified JavaScript \/ #fff; 
	http://www.asp.net/ajax/cdn-->		
	<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>

<!--jQuery UI 1.11.4 on the Microsoft ajax CDN \/ #f87;
http://www.asp.net/ajax/cdn/jquery-ui/cdnjqueryui1114 \/
UI-Darkness-->		
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.4/themes/ui-darkness/jquery-ui.css"></script>

<!-- Latest Bootstrap \/ #77f;
http://getbootstrap.com/getting-started/
-->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous"/>

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous"/>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>	

<!-- Wordpress -->

	<title><?php wp_title( "|", true, right ); ?> </title>

</head>
<body>
	<div class="container">

		<!-- 1) header-->
		<header>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					#Part 1 Title and logo and menus 1
                </div>	
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					#Part 2 banner or slider
                </div>	
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					#Part 3 nav menus 2
                </div>
                	
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
	                #Part 4 #sample 1 		
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
	                #Part 4 #sample 2 		
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
	                #Part 4 #sample 3	
                </div>	
			</div>
		</header>								
		<!-- END header-->


		<!-- 2 ) main -->
		<div class="main">
		<div class="row">
			<!-- 2-1 ) page part -->
			<div class="page">
				<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
					page part					
				</div>
			</div>	
		    <!-- 2-2 ) sidebar part if you want -->
			<div class="sidrbar">
				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
					Sidebar part
				</div>
			</div>
		    <!-- END sidebar if you want -->
		</div>
		<!--End Row -->
		</div>
		<!--End main -->
	
		<!-- 3 ) footer-->
		<footer>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h5>@ copyright adam</h5>
				</div>
			</div>
		</footer>
		<!-- End footer-->
	
	</div>
	<!-- End Container-->
	<script type="text/javascript">codes</script>
</body>
</html>