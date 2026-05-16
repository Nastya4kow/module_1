<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Название сайта</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">
      <img src="assets/img/image03.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Название сайта
    </a>
    <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="register.html">Зарегистрироваться</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.html">Войти</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="orders.html">Сформировать заявку</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="user_dashboard.html">Мои заявки</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="admin.html">Админ панель</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.html">Выход</a>
  </li>
    </ul>
    </div>
    </nav>
    <h1>Регистрация</h1>
    <div class="alert alert-success" role="alert">
      Пользователь успешно создан!
    </div>
    <!-- <div class="alert alert-danger" role="alert">
      Ошибка: Логин должен содержать минимум 6 символов (латиница и цифры).
    </div> -->
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ФИО</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Фамилия Имя Отчество">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Телефон</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Телефон">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Логин</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Логин">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
  </div>
 <button type="button" class="btn btn-outline-info">Зарегистрироваться</button>
  <p class="mt-3 text-center">Уже есть аккаунт? <a href="login.html">Войти</a></p>
</form>
  <script src="assets/js/bootstrap.bundle.min.js"></script>  
</body>
</html>