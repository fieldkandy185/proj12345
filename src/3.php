  <?php
    $name = $_POST['name'];
    if(isset($name)){
      echo "Hello, ". $name;
    }else{
      echo "No name entered";
    }
 ?>