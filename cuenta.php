<?php
include_once("cliente.php");

abstract class  Cuenta{
//Crear una clase abstracta Cuenta con atributos: CBU, Balance, Fecha de último movimiento.
//Agregar setters y getters para obtener los datos de la cuenta. Agregar un constructor que permite inicializar el CBU.

//Agregar un método abstracto para debitar cierto monto que reciba como parámetro el monto y
//desde donde se está haciendo la transacción (cajero Banelco, cajero Link, caja).
//Agregar otro método (no abstracto) que permita acreditar cierto monto (y programar su comportamiento).
// (Tener en cuenta que cada método debe, además, modificar la fecha de último movimiento).
   protected $cbu;
   protected $balance;
   protected $fechaUltimoMov;


   public function __construct($cbu) {
      $this->cbu = $cbu;


    }

   public abstract function debitar($montoDebitar,$origenTransaccion);

   public function setAcreditar($unMonto,$unaFecha) {
    $this->setFechaUltimoMov($unaFecha);
    $this->balance = ($this->getBalance() + $balance);
   }
   public function getBalance() {
     return $this->balance;
   }
    public function getCbu() {
      return $this->cbu;
    }

    public function setCbu($cbu) {
      $this->nombre = $cbu;
    }

    public function getFechaUltimoMov() {
      return $this->fechaUltimoMov;
    }

    public function setFechaUltimoMov($unaFechaMovimiento) {
      $this->nombre = $unaFechaMovimiento;
    }

}
