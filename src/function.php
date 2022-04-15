<?php

function task1()
{
    $names = ['Андрей', 'Лев', 'Ипполит', 'Дарья', 'Стефания'];

    //формируем массив пользоватей
    $count = 0;
    while (++$count <= 50) {
        $arr[$count]['user'] = ['id' => $count, 'name' => $names[rand(0, 4)], 'age' => rand(18, 45)];
    }

    $json = json_encode($arr);
    file_put_contents('users.json', $json);

    $content= file_get_contents('users.json');
    $users = json_decode($content, true);

    //средний возраст
    for ($i = 0; $i <= sizeof($users); $i++) {
        $age = (int) $age + (int)$users[$i]['user']['age'];
    }
    echo 'Средний возраст: ' . intdiv($age, 50) . '<br>';

    //количество пользователй с каждым именем в массиве
    $countName = [];
    for ($i = 0; $i <= sizeof($users); $i++) {
        $name = $users[$i]['user']['name'];
        switch ($name) {
            case 'Андрей':
                ++$countName['Андрей'];
                break;
            case 'Лев':
                ++$countName['Лев'];
                break;
            case 'Ипполит':
                ++$countName['Ипполит'];
                break;
            case 'Дарья':
                ++$countName['Дарья'];
                break;
            case 'Стефания':
                ++$countName['Стефания'];
                break;
        }
    }
    echo 'Количество пользователей с каждым именев в массиве: <br>';
    var_dump($countName);
}
