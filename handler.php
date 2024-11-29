<?php
$user_name = htmlspecialchars($_POST['username']);
$user_phone = htmlspecialchars($_POST['userphone']);

echo "Привет <b>" . $user_name . "</b><br>";
echo "Твой телефон <b>" . $user_phone . "</b>";
