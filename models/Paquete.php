<?php

namespace Model;

class Paquete extends ActiveRecord
{
    protected static $tabla = 'paquetes';
    protected static $columnasDB = ['id', 'nombre'];
}
