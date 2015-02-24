<?php

class Logger {

	public static function json($msg) {
		Logger::info('dados/mensagem.json', $msg);
	}

	public static function csv($msg) {
		Logger::info('dados/mensagem.csv', $msg);
	}

	public static function info($file, $msg) {
		file_put_contents($file, $msg . PHP_EOL, FILE_APPEND | LOCK_EX);
	}

	public static function error($msg) {
		file_put_contents('dados/mensagem_error.log', $msg . PHP_EOL, FILE_APPEND | LOCK_EX);
	}
}

function lerMensagem($json) {
	$json->nome = htmlspecialchars(urldecode($json->nome),ENT_QUOTES);
	$json->email = htmlspecialchars(urldecode($json->email),ENT_QUOTES);
	$json->mensagem = nl2br(htmlspecialchars(urldecode($json->mensagem),ENT_QUOTES));

	return $json;
}

try {
	$response = json_decode($HTTP_RAW_POST_DATA);

	if (!isset($response->json) || $response->json == '') {
		return http_response_code(400); // header("HTTP/1.1 400 Bad Request");
	}
	$json = lerMensagem($response->json);

	$json->nome = htmlspecialchars(urldecode($json->nome),ENT_QUOTES);
	$json->email = htmlspecialchars(urldecode($json->email),ENT_QUOTES);
	$json->mensagem = nl2br(htmlspecialchars(urldecode($json->mensagem),ENT_QUOTES));

	Logger::json($HTTP_RAW_POST_DATA);
	
	$mensagemEmail = "<div style='background:#f7f7f7; border:5px solid #ccc; padding:10px'><p><b>$json->nome ($json->email)</b></p><p><u>deixou uma mensagem para vocês:</u><br><br>$json->mensagem</p></div>";

	require_once('sender-mail.php');
	sender('Mensagem aos noivos #' .date('dmyhis'), null, $mensagemEmail);

	http_response_code(200);

} catch(Exception $e) {
	Logger::error($e->getTraceAsString());
	return http_response_code(400); // header("HTTP/1.1 400 Bad Request");
}

?>