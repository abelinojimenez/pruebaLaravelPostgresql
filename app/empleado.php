<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
   protected $table ='empleados';
   protected $fillable=["primernombre",'segundonombre','primerapellido','segundoapellido','cargo','salario','fecha_nacimiento'];
   protected $guarded=['idEmpleado'];
}
