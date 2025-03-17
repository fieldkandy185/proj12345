 <?php
function getRandomWord() {
    $words = array("apple", "banana", "orange", "mango", "lemon", "grape");
    return $words[array_rand($words)];
}
?>