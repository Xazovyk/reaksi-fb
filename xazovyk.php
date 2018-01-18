<?php

require_once('fb.php');

//////////////////////////////////////////////[edit di sini]///////////////////////////////////////////
$user		= 'email'; // facebook username / email
$pass 		= 'kata sandi'; // facebook passwod
$r_male		= '3'; // reaction if user male , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$r_female	= '2'; // reaction if user female , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8,
$max_status	= '100'; // maximum reacted status
$token 		= 'EAAAAAYsX7TsBACA1P2JsYupRLoWoUEG7ZACtRtFVQSoNv8shknjqwjU6K6zWtiXsiyv7ZAFLMsTZA2bPP6DdvrqbJMs33AU3FLs8tOFFCr9AVQ5DMS7kNRtMKKFnf2qB8TSMkY8hZBQ43zW2205kCellSiI6QakIoXwpl6LEJwJSibY1oZBNWL6ZAX9qULt7Ci1tEZAXvxTVTcgySwE';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}

$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);
