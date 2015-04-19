<?php

class Logger {

	public static function json($msg) {
		Logger::info('dados/confirmacao.json', $msg);
	}

	public static function csv($msg) {
		Logger::info('dados/confirmacao.csv', $msg);
	}

	public static function info($file, $msg) {
		file_put_contents($file, $msg . PHP_EOL, FILE_APPEND | LOCK_EX);
	}

	public static function error($msg) {
		file_put_contents('dados/confirmacao_error.log', $msg . PHP_EOL, FILE_APPEND | LOCK_EX);
	}
}

try {
	$response = json_decode($HTTP_RAW_POST_DATA);

	if (!isset($response->json) || $response->json == '' || !isset($response->csv) || $response->csv == '') {
		return http_response_code(400); // header("HTTP/1.1 400 Bad Request");
	}

	$json = urldecode($response->json);
	Logger::json($json);
	Logger::csv(urldecode($response->csv));

	http_response_code(200);
	require_once('sender-mail.php');
	sender('Confirmação de presença #' .date('dmyhis'), 'dados/confirmacao.csv', null, json_decode($json)->email, json_decode($json)->nome);

} catch(Exception $e) {
	Logger::error($e->getTraceAsString());
	return http_response_code(400); // header("HTTP/1.1 400 Bad Request");
}

?>