<?php

session_start();

// Variável que verifica se o usuário foi autenticado
$usuario_autenticado = false;

// Relação de usuários do sistema
$usuarios = [

    ['email' => 'adm@teste.com.br', 'senha' => '123456'],
    ['email' => 'user@teste.com.br', 'senha' => 'abcd']

];

/*
echo '<pre>';
print_r($usuarios);
echo '</pre>';
*/

foreach ($usuarios as $user) {

    /*
    echo 'Usuário app: ' . $user['email'] . ' / ' . $user['senha'];
    echo '<br>';
    echo 'Usuário form: ' . $_POST['email'] . ' / ' . $_POST['senha'];

    echo '<hr>';
    */

    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {

        $usuario_autenticado = true;

    }

}

if ($usuario_autenticado) {

    echo 'Usuário autenticado.';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['x'] = 'um valor';
    $_SESSION['y'] = 'outro valor';
    header('Location: home.php');

} else {

    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');

}


/*
print_r($_GET);

echo '<br>';

echo $_GET['email'];

echo '<br>';

echo $_GET['senha'];
*/

/*
print_r($_POST);

echo '<br>';

echo $_POST['email'];

echo '<br>';

echo $_POST['senha'];
*/

?>