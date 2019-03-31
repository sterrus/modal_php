<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


<?php

  $name = htmlspecialchars($_POST['fullname'], ENT_NOQUOTES, 'UTF-8');
  $phone = htmlspecialchars($_POST['mobile'], ENT_NOQUOTES, 'UTF-8');
  $email = htmlspecialchars($_POST['email'],ENT_NOQUOTES,'UTF-8');
  $message = htmlspecialchars($_POST['letter'],ENT_NOQUOTES,'UTF-8');

  $subdomain = 'subDomain'; //Наш аккаунт - поддомен
  $user = array(
      'USER_LOGIN' => 'userLogin', //Ваш логин (электронная почта)
      'USER_HASH' => 'userAPIHash' //Хэш для доступа к API (смотрите в профиле пользователя)
  );
  $phoneFieldId = '169815'; //ID поля "Телефон" в amocrm
  $emailFieldId = '169817'; //ID поля "Email" в amocrm
  $responsibleId = '2614519'; //ID Ответственного сотрудника в amocrm

  $dealName = 'ТЕСТ INTERVOLGA'; //Название создаваемой сделки
  $dealStatusID = '20476129'; //ID статуса сделки
  $dealSale = '1'; //Сумма сделки
  $dealTags = 'test';  //Теги для сделки
  $contactTags = 'test'; //Теги для контакта

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
