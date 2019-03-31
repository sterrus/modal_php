<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

<?php
require_once __DIR__ . 'amocrm.phar';

// if(isset($_POST['phone'])) {



try {
    // Создание клиента

    $SUBDOMAIN = 'almetal';            // Поддомен в амо срм
    $LOGIN     = 'al-metal@bk.ru';            // Логин в амо срм
    $HASH    = '22f9e715fb7f7d75849801d6997fa64249a1225a'; 


    $amo = new \AmoCRM\Client('SUBDOMAIN', 'LOGIN', 'HASH');

  

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
}

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