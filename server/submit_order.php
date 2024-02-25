<?php
// Стартуем новую сессию или продолжаем текущую
session_start();

// Включаем вывод ошибок для разработки (не использовать в продакшене)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Проверяем, был ли запрос отправлен методом POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Проверяем, отправлялась ли форма ранее
    if (isset($_SESSION['form_submitted'])) {
        // Если да, перенаправляем на страницу с ошибкой
        header('Location: ../public/error.php');
        exit;
    }

    // Извлекаем данные из POST-запроса
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $sub1 = $_POST['sub1'];

    // Формируем массив с данными для отправки
    $data = [
        'stream_code' => 'iu244',
        'client' => [
            'name' => $name,
            'phone' => $phone,
        ],
        'sub1' => $sub1,
    ];

    // Настраиваем cURL для отправки запроса
    $curl = curl_init('https://order.drcash.sh/v1/order');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Возвращать ответ в качестве строки
    curl_setopt($curl, CURLOPT_POST, true); // Устанавливаем метод POST
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data)); // Добавляем тело запроса
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json', // Устанавливаем заголовок Content-Type
        'Authorization: Bearer NWJLZGEWOWETNTGZMS00MZK4LWFIZJUTNJVMOTG0NJQXOTI3', // Добавляем заголовок авторизации
    ]);

    // Выполняем запрос и получаем ответ
    $response = curl_exec($curl);
    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE); // Получаем HTTP-код ответа
    curl_close($curl); // Закрываем сессию cURL

    // Проверяем статус ответа
    if ($status == 200) {
        // Если ответ успешный, отмечаем в сессии, что форма отправлена
        $_SESSION['form_submitted'] = true;
        // Перенаправляем на страницу успеха
        header('Location: ../public/success.php');
        exit;
    } else {
        // Если возникла ошибка, перенаправляем на страницу ошибки
        header('Location: ../public/error.php');
        exit;
    }
}
?>
