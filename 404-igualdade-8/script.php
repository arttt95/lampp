<?php

// Comparando os retornos de igualdade entre o PHP7 e o PHP8

echo '0 == "0": ' . (0 == '0'); // PHP7: true | PHP8: true

echo '<br>';

echo '0 == "0.0": ' . (0 == '0.0'); // PHP7: true | PHP8: true

echo '<br>';

echo '0 == "teste": ' . (0 == 'teste'); // PHP7: true | PHP8: false

echo '<br>';

echo '0 == "": ' . (0 == ''); // PHP7: true | PHP8: false

echo '<br>';

echo '50 == "   50": ' . (50 == '   50'); // PHP7: true | PHP8: true

echo '<br>';

echo '50 == "50teste": ' . (0 == '50teste'); // PHP7: true | PHP8: false

?>