<?php
require_once('./db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Получаем данные из формы
  $username = trim($_POST['userName']);
  $password = $_POST['userPass'];
  $password_confirm = $_POST['userPassVerif'];

  // Валидация данных
  $errors = [];

  if (empty($username)) {
    $errors[] = "Имя пользователя обязательно для заполнения";
  }

  if (empty($password)) {
    $errors[] = "Пароль обязателен для заполнения";
  }

  if ($password !== $password_confirm) {
    $errors[] = "Пароли не совпадают";
  }

  if (strlen($password) < 6) {
    $errors[] = "Пароль должен содержать минимум 6 символов";
  }

  // Проверяем, есть ли уже такой пользователь
  if (empty($errors)) {
    $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->execute([$username]);
    if ($stmt->fetch()) {
      $errors[] = "Пользователь с таким именем уже существует";
    }
  }

  // Если ошибок нет, регистрируем пользователя
  if (empty($errors)) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
      $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
      $stmt->execute([$username, $hashed_password]);

      // Перенаправляем на страницу успешной регистрации
      header("Location: ./registration_success.php");
      exit();
    } catch (PDOException $e) {
      $errors[] = "Ошибка при регистрации: " . $e->getMessage();
    }
  }

  // Если есть ошибки, сохраняем их в сессию и возвращаем на форму
  if (!empty($errors)) {
    session_start();
    $_SESSION['errors'] = $errors;
    $_SESSION['form_data'] = ['userName' => $username];
    header("Location: ../auth.php");
    exit();
  }
} else {
  header("Location: ../auth.php");
  exit();
}
