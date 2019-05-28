<?php
    //print_r($listMember);

    foreach ($eventInfoFull as $key ) {
      echo "<h4>Описание:</h4>";
      echo "<div>".$key->description."</div>";
      echo "<h4>Номер организатора:</h4>";
      echo "<div>".$key->tel_num_org."</div>";
    }
echo "<h4>Список участников:</h4>";
    foreach ($listMember as $key ) {
      echo "<br><a href='http://vk.com/id".$key->id_vk."'>".$key->name." ".$key->female."</a></br>";
    }

  echo " <button id=".$id_event." class='btn btn-success btn_prisoed'>Присоединиться</button> "
     ?>
<script>
$(".btn_prisoed").on('click', function(e){
  var a = $(this).attr('id');
  alert(a);
  $.ajax({
    type: "GET",
    url: '/index.php/app/getfulleventinfo?id_event='+a,
    contentType: "application/json",
});

 //  success: location.reload(),
 // dataType: dataType
});
</script>
