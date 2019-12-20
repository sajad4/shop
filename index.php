<?php
	session_start();
	include_once ('shop_sc_fns.php');
	do_html_header('فروشگاه اینترنتی',get_categories());
	display_latest();
	do_html_footer();
?>
