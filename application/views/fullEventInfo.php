<?php
    //print_r($listMember);
    foreach ($listMember as $key ) {
      echo "<a href='http://vk.com/id".$key->id_vk."'>".$key->name." ".$key->female."</a><br>";
    }
    foreach ($eventInfoFull as $key ) {
      echo "<div>".$key->description."</div>";
      echo "<div>".$key->tel_num_org."</div>";
    }
     ?>
