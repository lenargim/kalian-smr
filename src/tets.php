<?php 
echo "string";
 
/*** PHP CODE ***/
/****************/
$prxy       = '199.189.27.34:1080'; // адрес:порт прокси
$prxy_auth = 'auth_user:auth_pass';       // логин:пароль для аутентификации
/****************/
$ch  = curl_init();
$url = "https://api.telegram.org/bot789628557:AAExu0RFZqa9X6gvo1L4Bdehhm_x3eX8lyQ/sendMessage?chat_id=-1001185460919&text=asdfasda"; // где XXXXX - ваши значения
curl_setopt_array ($ch, array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true)); 
/********************* Код для подключения к прокси *********************/
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);  // тип прокси 
    curl_setopt($ch, CURLOPT_PROXY,  $prxy);                 // ip, port прокси
   // curl_setopt($ch, CURLOPT_PROXYUSERPWD, $prxy_auth);  // авторизация на прокси
    curl_setopt($ch, CURLOPT_HEADER, false);                // отключение передачи заголовков в запросе 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);            // возврат результата в качестве строки
   // curl_setopt($ch, CURLOPT_POST, 1);                      // использование простого HTTP POST
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);        // отмена проверки сертификата удаленным сервером
/***********************************************************************/

$result = curl_exec($ch);  // DIGITAL RESISTANCE!
curl_close($ch);
var_dump($result);