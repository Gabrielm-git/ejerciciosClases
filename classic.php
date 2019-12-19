<?php

include_once("cuenta.php");
/*
Implementar los métodos debitar y acreditar en cada clase, con las siguientes reglas de negocio:
Debitar:
Classic: Si la transacción es desde un cajero Banelco, debe debitar un 5% mas. De Link un 10% mas. Desde caja no se agrega importe extra.

Acreditar: Utiliza la cuenta que realiza su padre, pero debe modificar el importe a acreditar según el tipo de cuenta.
El banco se queda con un 5% si es Classic.
Se queda con un 3% si es Gold, salvo que se esté acreditando 25.000 o más.
Si es Platinum el banco no retiene nada.
0% para Black o 4% para montos superiores a 1.000.000.
*/
//Classic, Gold, Platinum y Black.
class  Persona extends Cuenta {







}
