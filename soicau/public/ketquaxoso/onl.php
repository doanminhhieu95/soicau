<?php
	include('simple_html_dom.php');
	$html = file_get_html('http://ketqua.net/');
	
	echo $html->find('#' . $_POST['input'], 0) -> plaintext;
?>