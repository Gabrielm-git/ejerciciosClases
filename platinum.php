<?php

include_once("cuenta.php");
/*
Implementar los métodos debitar y acreditar en cada clase, con las siguientes reglas de negocio:
Debitar:
Platinum: 5% desde cualquier medio, a menos que la cuenta tenga un balance de 5.000 o más.
Acreditar: Utiliza la cuenta que realiza su padre, pero debe modificar el importe a acreditar según el tipo de cuenta.
El banco se queda con un 5% si es Classic.
Si es Platinum el banco no retiene nada.
*/
//Classic, Gold, Platinum y Black.
class  Persona extends Cuenta {







}
