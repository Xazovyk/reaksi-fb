<?php

require_once('fb.php');

echo "\n\e[93m
 __   __                                                    
/\ \ /\ \                                                   
\ `\`\/'/'      __      ____      ___    __  __   __  __    
 `\/ > <      /'__`\   /\_ ,`\   / __`\ /\ \/\ \ /\ \/\ \   
    \/'/\`\  /\ \L\.\_ \/_/  /_ /\ \L\ \\ \ \_/ |\ \ \_\ \  
    /\_\\ \_\\ \__/.\_\  /\____\\ \____/ \ \___/  \/`____ \ 
    \/_/ \/_/ \/__/\/_/  \/____/ \/___/   \/__/    `/___/> \
                          
                                           
\e[36m▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄\n\e[36m
Github  : http://github.com/Xazovyk

\e[36m▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄";
echo "\n\e";
$user		= 'email'; // facebook username / email
$pass 		= 'kata sandi'; // facebook passwod
$r_male		= '1'; // reaction if user male , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$r_female	= '1'; // reaction if user female , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8,
$max_status	= '400'; // maximum reacted status
$token 		= 'EAAAAAYsX7TsBACAkdUw1P2JsYupRLoWoUEG7ZACtRtFVQSoNv8shknjqwjU6K6zWtiXsiyv7ZAFbPP6DdvrqbJMs33AU3FLs8tOFFCr9AVQ5DMS7kNRtMKKFnf2qB8TSMkY8hZBQ43zW2205kCellSiI6QakIoXwpl6LEJwJSibY1oZBNWL6ZAX9qULt7Ci1tEZAXvxTVTcgySwE';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}

$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);
