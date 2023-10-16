<?php // так для php 


// подключение к базе данных 

$dbc = mysqli_connect('localhost', 'root', '', 'gosha_urok'); // хост - пользователь - пароль - название базы данных

// получаем значение из тела запроса
$data = json_decode(file_get_contents('php://input'), true);

$name = $data['name'];
$comment = $data['comment'];

// создали переменную где сказали что добавим значения в нужные нам столбцы
$query = "INSERT INTO test_table (first_name, comment)  
    VALUES ('$name', '$comment')"; 

// отправка в базу данных
$result = mysqli_query($dbc, $query);

http_response_code('201');
header('Content-type:  application/json');
print json_encode(array('message'=> 'fefdsfsfsd'));


mysqli_close($dbc); // закрыли соединение с базой данных

// непонятные вопросы запрос(тело запроса заголовок ) что такое echo var_dump 