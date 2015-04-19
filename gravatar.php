<?php
/**
 *
 * How to use?
 *
 * <?php echo gravatar('donotreply@wordpress.com'); ?>
 *
 */
function gravatar($email, $s = 170, $d = 'mm', $r = 'g', $img = false) {
	$url = "http://www.gravatar.com/avatar/";
	$url .= md5( strtolower( trim( $email ) ) );
	$url .= "?s=$s&d=$d&r=$r";
	if ( $img ) {
		$url = '<img src="' . $url . '"';
		foreach ( $atts as $key => $val ) {
			$url .= ' ' . $key . '="' . $val . '"';
		}
		$url .= ' />';
	}
	return $url;
}
?>