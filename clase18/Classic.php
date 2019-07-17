<?php
class Classic extends cuenta {

  public function debitar($monto, $ubicacionTransaccion){
    if ($ubicacionTransaccion == "Banelco"){$balance-$monto-$monto*5/100}

  }

  public function acreditar(){

  }

}

 ?>
