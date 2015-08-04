<html>
	<head>
		<title>Fakku Manga Downloader</title>
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
	</head>
	<body>
		<div class="container">
			<div class="row" style="margin-top:20px;">
				<div class="col-md-12">
					<form role="form" method="post" action="r.php">
						<div class="form-group">
							<div class="input-group">
								<input id="url" type="text" name="url" class="form-control" placeholder="Fakku Manga URL, example link: https://www.fakku.net/doujinshi/namu-paipai-english">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit" name="submit_url">Download!</button>
								</span>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1 align="center">This program just for shit. Do what the fuck you want!</h1>
					<h3 align="center"><span style="font-weight: bold;">Not safe for children. <span style="color:red;">R18+</span></span></h3>
					<p><strong>Feature Included:</strong></p>
					<ul>
						<li>Best experience for reading fakku manga.</li>
						<li>Simple reading without ads.</li>
						<li>You can save all image by doing right click mouse button and click "save your page as...". Then all of your images will be saved to your harddrive.</li>
					</ul>
					<p><strong>Notes: Recommended using firefox web browser to automatically name the web page that you saved.</strong></p>
					<hr>
					<p align="center">Copyright &copy; 2015. Seorang Pelajar.</p>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="dist/js/jquery.js"></script>
		<script type="text/javascript">
		$('#url').click(function() {
			$('#url').val('');
		});
		</script>
	</body>
</html>
