<?php
require_once('./db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Получаем данные из формы
  $username = trim($_POST['userName']);
  $password = $_POST['userPass'];

  // Валидация данных
  $errors = [];

  if (empty($username)) {
    $errors[] = "Имя пользователя обязательно для заполнения";
  }

  if (empty($password)) {
    $errors[] = "Пароль обязателен для заполнения";
  }

  // Если ошибок нет, пробуем авторизовать пользователя
  if (empty($errors)) {
    try {
      // Ищем пользователя в базе данных
      $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = ?");
      $stmt->execute([$username]);
      $user = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($user && password_verify($password, $user['password'])) {
        // Авторизация успешна
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['logged_in'] = true;

        // Перенаправляем на защищенную страницу
        header("Location: ./profile.php");
        exit();
      } else {
        $errors[] = "Неверное имя пользователя или пароль";
      }
    } catch (PDOException $e) {
      $errors[] = "Ошибка при авторизации: " . $e->getMessage();
    }
  }

  // Если есть ошибки, сохраняем их в сессию и возвращаем на форму
  if (!empty($errors)) {
    session_start();
    $_SESSION['auth_errors'] = $errors;
    $_SESSION['auth_data'] = ['userName' => $username];
    header("Location: ./auth.php");
    exit();
  }
} else {
  header("Location: ./auth.php");
  exit();
}
