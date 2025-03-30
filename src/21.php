<?php
  // Example of a simple PHP script

  function displayHelloWorld() {
    echo "Hello World!";
  }

  // Run the function and output its result
  $result = call_user_func($displayHelloWorld);
  print_r($result);
?>
