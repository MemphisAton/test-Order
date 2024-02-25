<!-- header.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ваш Заголовок</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%; /* Устанавливаем высоту для <html> и <body> */
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        body {
            padding-top: 56px; /* Отступ для навигационной панели */
        }
        .main-content {
            flex: 1; /* Флекс-контейнер для основного содержимого, занимающий доступное пространство */
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-toggler {
            background-color: #fff !important;
        }
        .footer {
            padding: 20px 0;
            background-color: #f7f7f7;
            text-align: center;
            margin-top: auto; /* Автоматический отступ сверху */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/testOrder/public/index.php">Лого Компании</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/testOrder/public/index.php">Главная</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
