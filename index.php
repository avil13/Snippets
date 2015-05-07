<?php
/**
 * Все сниппеты складывать в под папку snippets
 * Название папок хранятся в файле list.php
 */

// debug
function dd($var) {
    echo '<pre>';
    var_dump($var);
    exit();
}

// Класс с экшенами
include 'class/AppClass.php';
$app = new AppClass();

// =======
// название папок в которых будет поиск
$names= include 'list.php';

// =======
foreach ($names as $k => $v) {
    $app->folders[$k] = $app->search($k);
}


// === === ===
// apps
if($app->is_ajax()){
    header('Content-Type: application/json; charset=utf-8');

    if(empty($_GET['a'])){
        exit("actinon не может быть пустым");
    }

    $act = $_GET['a'];
    $param = empty($_GET['p']) ? false : $_GET['p'];

    if(!method_exists($app, $act)){
        exit("actinon такого экшена нет");
    }

    $res = $app->$act($param);
    echo json_encode($res);

}else{
    header('Content-Type: text/html; charset=utf-8');

    include 'view/main.php';
}