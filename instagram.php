<?php 
	include( 'emoji/emoji.php' );

	$photo_limit = isset($photo_limit) ? (int) $photo_limit : 0;

	function callInstagram( $url )
	{
		$ch = curl_init();
		curl_setopt_array( $ch, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_SSL_VERIFYHOST => 2
		));

		$result = curl_exec( $ch );
		curl_close( $ch );
		return $result;
	}

	$tag       = 'suatag';
	$client_id = "3a44e6ca1e6046fcab3f0087b1c8d790";
	$url       = 'https://api.instagram.com/v1/tags/'.$tag.'/media/recent?client_id='.$client_id;

	$inst_stream = callInstagram( $url );
	$results     = json_decode( $inst_stream, true );

	$i = 0;
	foreach( $results['data'] as $item )
	{
	    $thumbnail  = $item['images']['thumbnail']['url'];
	    $image_link = $item['images']['standard_resolution']['url'];
	    $username   = $item['caption']['from']['username'];
	    $fullname   = $item['caption']['from']['full_name'];
	    $text       = $item['caption']['text'];
	    $caption    = "@$username: $text";

	    $caption = emoji_docomo_to_unified($caption);
	    $caption = emoji_unified_to_html($caption);

	if($i==0) {
		echo '<div class="row">';
	} else if($i%3==0) { 
?>
	</div><!-- end row -->

	<div class="row">
<?php } ?>

<div class="col-xs-6 col-md-4">
	<a href="<?php echo $image_link; ?>" class="fancybox hover-effect" data-fancybox-group="group">
		<img src="<?php echo $thumbnail; ?>" class="img-rounded img-responsive" />
		<span class="img-rounded">
			<i class="fa fa-search fa-3x"></i>
		</span>
	</a>
	
	<div class="text-instagram">
	<?php echo $caption; ?>

	</div><!-- end text-instagram -->

</div><!-- end cell -->
<?php
		$i++;
		if ($i==$photo_limit) { break; }
	}
?>
</div><!-- end row -->