<?php

session_start();

/*
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

unset($_SESSION['x']); // Remove o índice apenas se existir

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

// Remover índices do array de sessão
// unset()

// Destruir a variável de sessão
// session_destroy()

session_destroy(); // Após a destruição do índice de sessão, este índice ainda permanece disponível na requisição atual
// Por isso é normal forçar um redirecionamento após a destruição total de uma sessão, forçando assim uma nova requisição http


echo '<pre>';
print_r($_SESSION);
echo '</pre>';
*/

session_destroy();

header('Location: index.php');

?>