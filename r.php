<?php
require_once 'simple_html_dom.php';

if (isset($_POST['submit_url'])) {
	$url = $_POST['url'];

	$html = file_get_html($url);
	$html_contents = $html->find('div[class=nine columns content-right]',0);
	$html_content = str_get_html($html_contents);

	//get title
	$html_title = $html_content->find('h1',0);
	$title = $html_title->plaintext;

	//get pages
	$pages = explode('<div class="left">Pages</div>', $html);
	$pages1 = explode('</div>',$pages[1]);
	$pages2 = $pages1[0];
	$pages3 = strip_tags($pages2);
	$pages4 = explode(' ', $pages3);
	$page = $pages4[1];

	//get image
	$html_image = file_get_html($url.'/read');
	$return = explode("return '//",$html_image);
	$return1 = explode("' + x + '.jpg'",$return[1]);
	$image_link_raw = $return1[0];

}
?>
<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<?php
		for ($i=1;$i<=$page;++$i) {
			if ($i<10) {
				$num = '00'.$i;
			} elseif ($i<100) {
				$num = '0'.$i;
			} else {
				$num = $i;
			}
			echo '<img src="//'.str_replace(' ', '_', $image_link_raw).$num.'.jpg">';
		}
		?>
	</body>
</html>