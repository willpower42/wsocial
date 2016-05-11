<!doctype html>
<html prefix="og: http://ogp.me/ns#" lang="en">
<head>
	<?php 
		$wsocialVer = '0.2.3';
	?>
	<meta charset="utf-8">

	<meta name="description" content="willpower social v<?php echo $wsocialVer ?> | g+ / facebook / twitter / pinterest">
	<meta name="author" content="Felipe Nunes">
	<meta property="og:author" content="Felipe Nunes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="social share buttons, jquery, willpower">

	<meta name="og:description" content="willpower social v<?php echo $wsocialVer ?> | g+ / facebook / twitter / pinterest">
	<meta name="og:type" content="website">
	<meta name="og:url" content="http://willpower.art.br/wsocial/">
	<meta name="og:image" content="http://willpower.art.br/wsocial/willpower.png">
	<meta name="og:site_name" content="willpower social v<?php echo $wsocialVer ?> | g+ / facebook / twitter / pinterest">
	<meta name="og:title" content="willpower social v<?php echo $wsocialVer ?> | g+ / facebook / twitter / pinterest">

	<style>
		/*demo*/
		* {margin:0; padding:0; box-sizing:border-box;}
		#page {min-width:320px;max-width:720px;margin:20px auto;font-family: "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif;}
		h1 {font-size:2em;font-weight:bold;margin-bottom:20px;}
		h2 {font-weight:bold;margin:10px 0;}
	</style>
	<link rel="stylesheet" href="css/wsocial.css?version=<?php echo $wsocialVer ?>">

	<link rel="shortcut icon" href="http://www.willpower.art.br/favicon.png">

	<title>willpower social v<?php echo $wsocialVer ?> | g+ / facebook / twitter / pinterest</title>
</head>
<body>
	<div id="page">
		<h1>willpower social v<?php echo $wsocialVer ?></h1>
		<div class="social-sharing" data-permalink>
			<h2>Default Buttons</h2>
			<a target="_blank" href="#" class="wshare share-facebook">
				<span class="span icon icon-facebook" aria-hidden="true"></span>
				<span class="span share-title">Share</span>
				<span class="span share-count">0</span>
    		</a>
			
			<a target="_blank" href="#" class="wshare share-twitter">
				<span class="span icon icon-twitter" aria-hidden="true"></span>
				<span class="span share-title">Tweet</span>
				<span class="span share-count">0</span>
    		</a>
		
		    <a target="_blank" href="#" class="wshare share-google">
				<span class="span icon icon-gplus" aria-hidden="true"></span>
				<span class="span share-count">+1</span>
			</a>

			<a target="_blank" href="#" class="wshare share-pinterest">
				<span class="span icon icon-pinterest" aria-hidden="true"></span>
				<span class="span share-title">Pin It</span>
				<span class="span share-count">0</span>
    		</a>
		</div>
	
		<div class="social-sharing" data-permalink>
			<h2>Default Buttons / only icons</h2>
			
			<a target="_blank" href="#" class="wshare share-facebook">
				<span class="span icon icon-facebook" aria-hidden="true"></span>
			</a>
			
			<a target="_blank" href="#" class="wshare share-twitter">
				<span class="span icon icon-twitter" aria-hidden="true"></span>
			</a>
			
			<a target="_blank" href="#" class="wshare share-google">
				<span class="span icon icon-gplus" aria-hidden="true"></span>
			</a>

			<a target="_blank" href="#" class="wshare share-pinterest">
				<span class="span icon icon-pinterest" aria-hidden="true"></span>
			</a>
		</div>
		
		<div class="social-sharing is-large" data-permalink>
			<h2>Large Buttons</h2>
			<a target="_blank" href="#" class="wshare share-facebook">
				<span class="span icon icon-facebook" aria-hidden="true"></span>
				<span class="span share-title">Share</span>
				<span class="span share-count">0</span>
			</a>

			<a target="_blank" href="#" class="wshare share-twitter">
				<span class="span icon icon-twitter" aria-hidden="true"></span>
				<span class="span share-title">Tweet</span>
				<span class="span share-count">0</span>
			</a>

			<a target="_blank" href="#" class="wshare share-google">
				<span class="span icon icon-gplus" aria-hidden="true"></span>
				<span class="span share-count">+1</span>
			</a>

			<a target="_blank" href="#" class="wshare share-pinterest">
				<span class="span icon icon-pinterest" aria-hidden="true"></span>
				<span class="span share-title">Pin It</span>
				<span class="span share-count">0</span>
			</a>

		</div>

  		<div class="social-sharing is-large" data-permalink>
			<h2>Large Buttons / only icons</h2>

			<a target="_blank" href="#" class="wshare share-facebook">
				<span class="span icon icon-facebook" aria-hidden="true"></span>
			</a>

			<a target="_blank" href="#" class="wshare share-twitter">
				<span class="span icon icon-twitter" aria-hidden="true"></span>
			</a>

			<a target="_blank" href="#" class="wshare share-google">
				<span class="span icon icon-gplus" aria-hidden="true"></span>
			</a>

			<a target="_blank" href="#" class="wshare share-pinterest">
				<span class="span icon icon-pinterest" aria-hidden="true"></span>
			</a>

		</div>

		<div class="social-sharing is-clean" data-permalink>
			<h2>Clean Buttons</h2>

			<a target="_blank" href="#" class="wshare share-facebook">
				<span class="span icon icon-facebook" aria-hidden="true"></span>
				<span class="span share-title">Share</span>
				<span class="span share-count">0</span>
			</a>

			<a target="_blank" href="#" class="wshare share-twitter">
				<span class="span icon icon-twitter" aria-hidden="true"></span>
				<span class="span share-title">Tweet</span>
				<span class="span share-count">0</span>
			</a>

			<a target="_blank" href="#" class="wshare share-google">
				<span class="span icon icon-gplus" aria-hidden="true"></span>
				<span class="span share-count">+1</span>
			</a>

			<a target="_blank" href="#" class="wshare share-pinterest">
				<span class="span icon icon-pinterest" aria-hidden="true"></span>
				<span class="span share-title">Pin It</span>
				<span class="span share-count">0</span>
			</a>
		</div>

		<div class="social-sharing is-clean" data-permalink>
			<h2>Clean Buttons / only icons</h2>

			<a target="_blank" href="#" class="wshare share-facebook">
				<span class="span icon icon-facebook" aria-hidden="true"></span>
			</a>

			<a target="_blank" href="#" class="wshare share-twitter">
				<span class="span icon icon-twitter" aria-hidden="true"></span>
			</a>

			<a target="_blank" href="#" class="wshare share-google">
				<span class="span icon icon-gplus" aria-hidden="true"></span>
			</a>

			<a target="_blank" href="#" class="wshare share-pinterest">
				<span class="span icon icon-pinterest" aria-hidden="true"></span>
			</a>

		</div>

		<footer class="demo-footer">
			<p>Author: Felipe Nunes | <a href="http://willpower.art.br" title="willpower">willpower</a></p>
			<p>willpower social v<?php echo $wsocialVer ?> | g+ / facebook / twitter / pinterest | <a href="http://willpower.mit-license.org/" target="_blank">MIT License</a></p>
		</footer>

		<!-- fork me on github -->
		<a href="https://github.com/willpowerart/wsocial"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/652c5b9acfaddf3a9c326fa6bde407b87f7be0f4/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6f72616e67655f6666373630302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png"></a>

	</div>
	<!-- js -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/wsocial.js?version=<?php echo $wsocialVer ?>"></script>

</body>
</html>
