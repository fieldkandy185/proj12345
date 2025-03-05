<?php
function randomCode() {
    $code = "";
    for ($i = 0; $i < 10; $i++) {
        $code .= chr(rand(97, 122)); //Generates a random lowercase letter
    }
    return $code;
}
?>
