<link href="http://localhost/css/for_dialog.css" rel="stylesheet" type="text/css">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Заголовок модального окна -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title id_pl" id='<?php echo $data[1][0]->id_pl ?>'>
            <div class="name_pl"><?php
          if ($data[1][0]->PorN == 0) {
            echo $data[1][0]->name;?>

          </div>
          <div class="name_pl">
            <?php
          }
          elseif ($data[1][0]->PorN == 1) {
            echo $data[1][0]->name."<br></div>";
            echo "Это платная площадка, стоимость аренды: ".$data[1][0]->pay." руб.";
          }
            ?>
        </h4>
      </div>

      <div class="modal-body">
        <?php


        echo "<table class='table'>";
        echo "<thead>";
        echo "<tr><b>";
        echo "<td>Время</td>";
        echo "<td>Описание</td>";
        echo "<td>Команда</td>";
        echo "<td>Отказаться</td>";
        echo "</b></tr>";
        echo "</thead>";
        echo "</table class='table'>";
        echo "<tbody>";

        for ($i= $data[1][0]->begin; $i <= $data[1][0]->end ; $i++) {
          $b=0;
          $index=0;
          foreach ($data[0] as $key => $value) {
            if ($value->time_begin == $i) {//если событие есть
              $b=$b+1;
              $index=$key;
                      // echo "<tr>";
                      // echo "<td>".$i."</td>";
                      // echo "<td>".$value->header."</td>";
                      // echo "<td>".$value->count_people.' / '.$value->max_people."</td>";
                      // echo "<td><button class='btn btn-success'>Присоединиться</button></td>";
                      // echo "</tr>";
            }
            else {//если события нет
              //$b=$b+1;
                      // echo "<tr>";
                      // echo "<td>".$i."</td>";
                      // echo "<td></td>";
                      // echo "<td></td>";
                      // echo "<td><button class='btn btn-primary'>Добавить</button></td>";
                      // echo "</tr>";
            }}
            if($b){
              $a= $i+1;
              echo "<table class='table'>";
              echo "<tr>";
              echo "<td>".$i.":00 - ".$a.":00</td>";
              echo "<td>".$data[0][$index]->header."</td>";
              echo "<td>".$data[0][$index]->count_people.' / '.$data[0][$index]->max_people."</td>";
              echo "<td class='td_for_btn'>
              <button id=".$data[0][$index]->id_event." class='btn btn-success btn-primary btn_info' type='button' class='btn btn-primary' data-toggle='collapse' data-target='#toggleSample".$data[0][$index]->id_event."' value='Элемент управления'>Информация</button>
              </td></tr>
              <tr>";
              echo "</tr>";
              echo "</table class='table'>
              <div id='toggleSample".$data[0][$index]->id_event."' class='collapse div_for_info'>

              </div>

              ";

            }
            /**/
            //<button data-toggle="collapse" data-target="#demo">Collapsible</button>





            else{
              $a=$i+1;
              echo "<table class='table'>";
              echo "<tr>";
              echo "<td>".$i.":00 - ".$a.":00</td>";
              echo "<td></td>";
              echo "<td></td>";
              echo "<td class='td_for_btn'><button type='button' class='timet btn btn-primary' id=".$i."   type='button' class='btn btn-primary' data-toggle='collapse' data-target='#toggleSample".$i."' value='Элемент управления'>Добавить</button>"
/*data-toggle='modal' data-target='#mym'*/
              ?>
                <!-- Окно 2 -->

              <?php
              echo "</td>";
              echo "</tr>";
              echo "</table class='table'>
              <div id='toggleSample".$i."' class='collapse'>
              <form >

                <div class='input-group'><span class='input-group-addon'>Название:</span>
                  <input id='header' type='text' class='form-control' name='msg'>
                </div>

                <div class='form-group'>
                <label for='comment'>Описание:</label>
                <textarea class='form-control' rows='3' id='description'></textarea>
              </div>

                <div class='input-group'><span class='input-group-addon'>Телефон:</span>
                  <input id='tel_number' type='tel' class='form-control' name='msg'>
                </div>

                <div class='input-group'><span class='input-group-addon'>Необходимо для игры:</span>
                  <input id='max_people' type='number' class='form-control' name='msg'>
                </div>

                <div class='input-group'><span class='input-group-addon'>Регистрируемых сейчас:</span>
                  <input id='count_people' type='number' class='form-control' name='msg'>
                </div>
                  <button class='btn btn-primary dobav'>Ок</button>
              </form>
                    </div>";

            }
          }

        echo "</tbody>";
        echo "</table>";






        //$key->id_event;

        // print_r($data[0]);
        // echo "<br><br>";
        // print_r($data[1]);
        //print_r($data[0]->header);
         ?>
      </div>
      <!-- Футер модального окна -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
  <div class="modal-body">


<div class="empty"></div>
</div>





  <script  type="text/javascript" charset="UTF-8" >


//НЕ ВСЕГДА КОРРЕКТНО ДОБАВЛЯЕТ СОБЫТИЯ


  $(document).on('hidden.bs.modal', '.modal', function () {
    $('.modal:visible').length && $(document.body).addClass('modal-open');
});
var tim ;
$(".timet").on('click', function(e) {
tim =  $(this).attr('id');

});

$(".dobav").on('click', function(e) {
  var data = {};
  data["header"] = $("#header").val();
  //alert(data["header"]);

  data["description"] = $("#description").val();
  //alert(data["description"]);

  data["tel_number"] = $("#tel_number").val();
//  alert(data["tel_number"]);

  data["max_people"] = $("#max_people").val();
//  alert(data["max_people"]);

  data["count_people"] = $("#count_people").val();
//  alert(data["count_people"]);
  data["datepicker_here"] = $(".datepicker-here").val();
  data["datepicker_here"] = data["datepicker_here"].split('.');
  data["datepicker_here"] = data["datepicker_here"][2] +'/'+ data["datepicker_here"][1]+'/'+ data["datepicker_here"][0];
 //alert(data["datepicker-here"]);

  data["id_pl"]=$(".id_pl").attr("id");
//  alert(data["id_pl"]);
  data["time_begin"]=tim;
  //alert(data['time_begin']);
  var str=JSON.stringify(data);
//  str=JSON.stringify(str);
  console.log(typeof str);

$.ajax({
  type: "GET",
  url: '/index.php/app/add_event',
  contentType: "application/json",
  data: {name :str},
 //success: location.reload()
//  dataType: dataType
});
});




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

$(".btn_info").on('click', function(e){
  var a = $(this).attr('id');
  //alert(a);
  $.ajax({
    type: "GET",
    url: '/index.php/app/get_Full_info?id_event='+a,
    contentType: "application/json",
    success: function(e){
      $('#toggleSample'+a).html(e);

  }

})

 //  success: location.reload(),
 // dataType: dataType
});

  </script>
