<?php

require_once('gravatar.php');

function lerMensagem($line) {
	$response = json_decode($line);
	$json->nome = htmlspecialchars(urldecode($response->json->nome),ENT_QUOTES);
	$json->email = htmlspecialchars(urldecode($response->json->email),ENT_QUOTES);
	$json->mensagem = nl2br(htmlspecialchars(urldecode($response->json->mensagem),ENT_QUOTES));

	return $json;
}

try {
	$contents = file_get_contents('dados/mensagem.json');
	$filearray = explode("\n", $contents);

    while (list($var, $val) = each($filearray)) {
        ++$var;
        $line = trim($val);
		if($line == '') continue;

        $json = lerMensagem($line);

?>
	<li class="media">
		<!-- images/gallery-small01.jpg -->
		<span class="pull-left media-photo"><img class="media-object img-rounded img-responsive" src="<?php echo gravatar($json->email); ?>" alt="" /></span>
		<div class="media-body">
			<h6 class="media-heading"><?php echo $json->nome; ?></h6>
			<p><?php echo $json->mensagem; ?></p>
		</div>
	</li>

<?php
    }
	
} catch(Exception $e) {
	return http_response_code(400); // header("HTTP/1.1 400 Bad Request");
}

?>