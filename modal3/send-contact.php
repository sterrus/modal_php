<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

<?php
require_once __DIR__ . '/amocrm.phar';

// if(isset($_POST['phone'])) {



try {
    // Создание клиента

    


    $amo = new \AmoCRM\Client('SUBDOMAIN', 'LOGIN', 'HASH');

    $SUBDOMAIN = 'almetal';            // Поддомен в амо срм
    $LOGIN     = 'al-metal@bk.ru';            // Логин в амо срм
    $HASH    = '22f9e715fb7f7d75849801d6997fa64249a1225a'; 

    // SUBDOMAIN может принимать как часть перед .amocrm.ru,
    // так и домен целиком например test.amocrm.ru или test.amocrm.com

    // Получение экземпляра модели для работы с аккаунтом
    $account = $amo->account;

    // Вывод информации об аккаунте
    print_r($account->apiCurrent());

    // Получение экземпляра модели для работы с контактами
    $contact = $amo->contact;

    // Заполнение полей модели
    $contact['name'] = 'ФИО';
    $contact['request_id'] = '123456789';
    $contact['date_create'] = '-2 DAYS';
    $contact['responsible_user_id'] = 697344;
    $contact['company_name'] = 'ООО Тестовая компания';
    $contact['tags'] = ['тест1', 'тест2'];

    // Добавление кастомного поля
    $contact->addCustomField(100, 'Значение');

    // Добавление кастомного поля с типом "мультисписок"
    $contact->addCustomMultiField(200, [
        1237755,
        1237757
    ]);

    // Добавление ENUM кастомного поля
    $contact->addCustomField(300, '+79261112233', 'WORK');

    // Добавление кастомного поля c SUBTYPE поля
    $contact->addCustomField(300, '+79261112233', false, 'subtype');

    // Добавление ENUM кастомного поля с типом "мультисписок"
    $contact->addCustomField(400, [
        ['+79261112233', 'WORK'],
    ]);

    // Добавление нового контакта и получение его ID
    print_r($contact->apiAdd());

    } catch (\AmoCRM\Exception $e) {
        printf('Error (%d): %s' . PHP_EOL, $e->getCode(), $e->getMessage());
    }
// }

// $user=array(
//  'USER_LOGIN'=>'al-metal@bk.ru', #Your login (email)
//  'USER_HASH'=>'22f9e715fb7f7d75849801d6997fa64249a1225a' #Hash for API access (see user profile)
// );
// $subdomain='almetal'; #Our account is a subdomain
// #Form a link to request
// $link='https://'.$subdomain.'.amocrm.com/private/api/auth.php?type=json';
// /* We need to initiate a request to the server. Let's use cURL library (supplied as part of PHP). You also
// can
// use cross-platform cURL program if you don't program in PHP. */
// $curl=curl_init(); #Save the cURL session handle
// #Set the required options for cURL session
// curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
// curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
// curl_setopt($curl,CURLOPT_URL,$link);
// curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
// curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($user));
// curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
// curl_setopt($curl,CURLOPT_HEADER,false);
// curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
// curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
// curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
// curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
// $out=curl_exec($curl); #Initiate a request to the API and store the response in a variable
// $code=curl_getinfo($curl,CURLINFO_HTTP_CODE); #Get HTTP response code of the server
// curl_close($curl); #End the cURL session
// /* We can now process the response received from the server. This example. You can process the data in your own way. */
// $code=(int)$code;
// $errors=array(
//   301=>'Moved permanently',
//   400=>'Bad request',
//   401=>'Unauthorized',
//   403=>'Forbidden',
//   404=>'Not found',
//   500=>'Internal server error',
//   502=>'Bad gateway',
//   503=>'Service unavailable'
// );
// try
// {
//   #If the response code is not 200 or 204 - return an error message
// if($code!=200 && $code!=204)
//     throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error',$code);
// }
// catch(Exception $E)
// {
//   die( ''Error: ' .$E->getMessage().PHP_EOL. 'Error code: ' .$E->getCode());
// }
// /*
// The data is obtained in JSON format, therefore, to obtain readable data,
// we'll have to translate the answer into a PHP-friendly format
//  */
// $Response=json_decode($out,true);
// $Response=$Response['response'];
// if(isset($Response['auth'])) #authorization flag is available in the 'auth' property
// return 'Authorization succeeded' ;
// return 'Authorization failed' ;



?>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ваша заявка успешно отправлена</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'IBM Plex Sans', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 20px;
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title">
            <br><span style="font-size:33px;font-weight:500;">Спасибо!</span><br><br>
            Ваша заявка успешно отправлена.<br>

            <?php if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']) { ?>
                <br><br><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" style="text-decoration: none; border-bottom: 1px dotted">Вернуться назад</a>
             <?php } ?>
        </div>
    </div>
</div>

</body>
</html>