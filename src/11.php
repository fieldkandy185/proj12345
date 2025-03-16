  <?php
    //Get the current date and time
    $current_time = time();
    
    //Get the current day of the week
    $day_of_week = date('l', $current_time);
    
    //Determine the greeting based on the day of the week
    if ($day_of_week == 'Sunday') {
        $greeting = 'Good Sunday!';
    } elseif ($day_of_week == 'Monday') {
        $greeting = 'Good Monday!';
    } elseif ($day_of_week == 'Tuesday') {
        $greeting = 'Good Tuesday!';
    } elseif ($day_of_week == 'Wednesday') {
        $greeting = 'Good Wednesday!';
    } elseif ($day_of_week == 'Thursday') {
        $greeting = 'Good Thursday!';
    } elseif ($day_of_week == 'Friday') {
        $greeting = 'Good Friday!';
    } elseif ($day_of_week == 'Saturday') {
        $greeting = 'Good Saturday!';
    } else {
        //If the day of the week is not recognized, default to Good Monday
        $greeting = 'Good Monday!';
    }
    
    echo $greeting;
  ?>