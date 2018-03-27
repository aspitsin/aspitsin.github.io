<div class="container">
    <div class="card col-2 text-center  m-2">
    <?php
        $time = strftime("%H:%M");

        $hour = strftime("%H");
        if($hour >= 0 && $hour <= 6){
            echo '<p>иди спать</p>';
        } elseif ($hour >= 6 && $hour <=  12) {
            echo '<p>доброе утро!</p>';
        } elseif ($hour >= 12 && $hour <=  18) {
            echo '<p>добрый день!</p>';
        } elseif ($hour >= 18 && $hour <=  0){
            echo '<p>добрый ночи!</p>';
        }   
   
      $time = strftime("%H:%M");
      echo '<h3>'. $time .'</h3>'
    ?>
    
    </div>
    </div>
