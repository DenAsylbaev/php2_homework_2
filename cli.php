<?php

use GeekBrains\LevelTwo\Blog\Repositories\UsersRepository\SqliteUsersRepository;
use GeekBrains\LevelTwo\Blog\Commands\CreateUserCommand;
use GeekBrains\LevelTwo\Blog\Commands\Arguments;


require_once __DIR__ . '/vendor/autoload.php';

$connection = new PDO('sqlite:' . __DIR__ . '/blog.sqlite');

$usersRepository = new SqliteUsersRepository($connection);

$command = new CreateUserCommand($usersRepository);

try {
    $command->handle(Arguments::fromArgv($argv));
} catch (Exception $e) {
    echo $e->getMessage();
}





//КОД ИЗ ПЕРВОГО ДЗ

// include __DIR__ . "/vendor/autoload.php";

// $faker = Faker\Factory::create('ru_RU');

// $name = new Name('Петр', 'Петров');

// $user = new User(
//     101, 
//     $name, 
//     "admin"
// );

// $post = new Post(
//     001,
//     $user,
//     'Приветствие',
//     'Всем привет!'
// );

// try {
//     if ($argv[1] === 'user') {
//         $nameArr = explode(' ',trim($faker->name()));
//         $name = new Name($nameArr[0], $nameArr[1]);
//         $user = new User(102, $name, "Admin");
//         echo $user;
//     } else if ($argv[1] === 'post') {
//         $post = new Post(
//             002,
//             $user,
//             $faker->realText(rand(10, 20)),
//             $faker->realText(rand(30, 100))
//         );    
//         echo $post;
//     } else if ($argv[1] === 'comment') {
//         $comment = new Comment(
//             $user,
//             $post,
//             $faker->realText(rand(20, 100))
//         );    
//         echo $comment;
//     } else {
//         throw new IncorrectInputException("ОШИБКА ВВОДА\n");
//     }


// } catch (IncorrectInputException | Exception $e) {
//     echo $e->getMessage() . PHP_EOL;
// }