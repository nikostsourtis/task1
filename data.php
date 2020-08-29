<?php
    $htmlData = '<table border="1">';
    $cnt = 1;
    for ($y = 1; $y <= 100; $y++) {
      if($y % 3 == 0 && $y % 5 == 0){
        $data = '<span class="red"><strong>Coating Damage and Lighting Strike</strong></span>';
        //$data = 'Coating Damage and Lighting Strike';
      }else if ($y % 3 == 0) {
        $data = '<span class="green"><strong>Coating Damage</strong></span>';
        //$data = 'Coating Damage';
      }else if ($y % 5 == 0) {
        $data ='<span class="orange"><strong>Lightning Strike</strong></span>';
        //$data = 'Lighting Strike';
      }else{
        $data = '-';
        //$data = $y;
      }
      if($cnt === 1){
        $htmlData = $htmlData.'<tr class="firstLine"><td>'.$y.'</td><td>'.$data.'</td></tr>';
        $cnt = 0;
      }else{
        $htmlData = $htmlData.'<tr class="secondLine"><td>'.$y.'</td><td>'.$data.'</td></tr>';
        $cnt = 1;
      }
      $data2[$y] = $data;
    }
    $htmlData = $htmlData."</table>";
    echo $htmlData;
?>