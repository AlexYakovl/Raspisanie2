<?php
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <style>
    *{
      box-sizing: border-box;
    }
    body {
      padding: 0;
      margin: 0;
      background-color: #eaeaea;
    }

    .card{
      padding: 20px;
      background: white;
      border-radius: 20px;
      margin-top: 20px;
      font-family: 'Comic Sans MS', cursive;
      width: 350px;
    }

    .card2{
      padding: 20px;
      background: white;
      border-radius: 20px;
      margin-top: 20px;
      font-family: 'Comic Sans MS', cursive;
      width: 800px;
    }

    .card-title{
      font-size: 18px;
      font-weight: bold;
      font-family: 'Comic Sans MS', cursive;
    }


    .container{
      padding: 10px;
      background-image: url("pic/dostav.webp");
      background-repeat: no-repeat;
      height: 1343px;
      background-size: cover;
    }

    .texthold{
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 60px;
      flex-wrap: wrap;
    }

    .topmid > * {
      margin: 0;
    }

    .topmid{
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      gap: 10px;
      background-color: rgb(0,0,0);
      padding: 15px;
    }
    .toptext{
      color: darkred;
      font-family: 'Sigmar', cursive;
    }
    .toptext2{
        color: darkred;
        font-family: 'Comic Sans MS', cursive;
    }





  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Авиакасса "Five nights at freddy's" </title>
</head>
<body>
<div class="topmid" >
  <h1 class="toptext">Air ticket office << Five nights at freddy's >></h1>
  <p class="toptext" > The best ticket office, because others without Freddy</p>
    <?php if (!isset($_SESSION['username'])): ?>
        <a href="login.php" class="toptext" > LOGIN </a>
    <?php else: ?>
        <a href="Profile.php" class="toptext2" > <?php echo $_SESSION['username']; ?> Личный кабинет</a>
    <?php endif; ?>
</div>
<div class="container">
  <div class="texthold">
    <div class="card2">
      <div class="card-title">
        Гарантия
      </div>
      <div class="card-body">
        <p>Как авиакасса, мы гарантируем следующее:</p>

        <p>Безопасность и безопасность во время путешествия: Мы гарантируем, что все наши партнеры-авиакомпании строго соблюдают международные стандарты безопасности и безопасности. Мы также предоставляем информацию о безопасности путешествий и дополнительные услуги, такие как страхование от несчастных случаев, чтобы гарантировать максимальную безопасность во время вашего путешествия.</p>

        <p>Полная прозрачность: Мы гарантируем полную прозрачность в отношении наших цен, платежей и услуг. Мы предоставляем точную информацию о стоимости билетов, дополнительных услугах, таких как багаж и выбор места, а также ясную информацию о наших правилах и условиях.</p>

        <p>Удобство и доступность: Мы гарантируем, что наши услуги доступны для всех пользователей. Мы предлагаем широкий выбор опций покупки билетов, включая онлайн-бронирование, посредством мобильных приложений и через нашу контактную службу. Мы также гарантируем, что наши пользователи получат максимальный комфорт и удобство во время путешествия.</p>

        <p>Разнообразие: Мы гарантируем разнообразие в нашем выборе авиакомпаний и направлений. Мы предлагаем большой выбор маршрутов и авиакомпаний, чтобы наши пользователи могли выбрать наиболее подходящий вариант для своих потребностей.</p>

        <p>Клиентоориентированность: Мы гарантируем высокий уровень обслуживания и поддержки для наших пользователей. Мы предоставляем профессиональную помощь и советы на каждом этапе путешествия, начиная от выбора билета и заканчивая прибытием в пункт назначения.</p>

        <p>Мы гордимся нашей репутацией надежной и ответственной авиакассы и всегда готовы предоставить нашим пользователям высококачественные услуги.</p>
      </div>
    </div>

    <div class="card">
      <div class="card-title">
        <a href="main.php"> Вернуться обратно</a>
    </div>





  </div>
</div>
</body>
</html>