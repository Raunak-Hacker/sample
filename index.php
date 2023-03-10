<?php

require __DIR__ . '/vendor/autoload.php';
app()->config('debug', false);
// db()->connect([
// 	// '127.0.0.1', 'test', 'root', ''
// 	'host' => '127.0.0.1',
// 	'username' => 'root',
// 	'password' => '',
// ]);
// db()->autoConnect('127.0.0.1', 'test', 'root', '');

app()->cors();
// $app()->set404(
// 	function () {
// 		response()->page('./404.html');
// 	}
// );
// try {
// 	db()->drop('dbname')->execute();
// } catch (Exception $e) {
// 	echo $e->getMessage();
// }

app()->get('/', function () {
	response()->json([
		'hello' => 'word',
		'foo' => 'bar',
	]);
});
app()->get('/notes', function () {
	// notes where id = 1
	// $notes = db()->select('notes')->where('id', 2)->first();
	// response()->json(
	// 	$notes
	// );
});

app()->run();
