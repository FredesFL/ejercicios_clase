<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CLASE 9 DE MAYO</title>
  </head>
  <body>
    <h2>Consigna 1</h2>
    <?php
      $persona = [
        "Nombre" => "Jon",
        "Apellido" => "Snow",
        "Edad" => 27,
        "Hobbies" => [
          "Netflix",
          "Fútbol",
          "Programar",
        ]
      ];

      var_dump($persona);
     ?>

     <h2>Consigna 2</h2>
     <?php
     $persona["edad"] = 25;
     echo $persona ["edad"];

      ?>

      <h2>Consigna 3</h2>
      <?php
      $persona["Dirección"]= "Winterfel";
      echo $persona ["Dirección"];
       ?>

       <h2>Consigna 4</h2>
       <?php
       $persona["Hobbies"][] = "Pesca";
       var_dump($persona);
        ?>

        <h2>Consigna 5</h2>
        <?php
        $num1 = 6;
        $num2 = 30;

        if ($num1 >= $num2) {
          echo 

        } ?>
  </body>
</html>
