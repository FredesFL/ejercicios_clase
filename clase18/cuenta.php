<?php

abstract class Cuenta{
  private $CBU;
  private $balance;
  private $fechaUltimoMovimiento;

  public function __construct ($CBU,){
    $this->CBU=$CBU;

  }

public function getCBU(){
  return $this->CBU;
}
public function setCBU($CBU){
  $this->CBU=$CBU;
}

public function getBalance(){
  return $this->balance;
}
public function setBalance($balance){
  $this->balance=$balance;
}

public function getFechaDeUltimoMovimiento(){
  return $this->fechaDeUltimoMovimiento;
}
public function setFechaDeUltimoMovimiento($fechaDeUltimoMovimiento){
  $this->fechaDeUltimoMovimiento=$fechaDeUltimoMovimiento;
}

public abstract function debitar($monto, $ubicacionTransaccion);

public function acreditar($monto){
  $this->balance=$this->balance+$monto;
  $this->fechaUltimoMovimiento= date();
}


}


 ?>
