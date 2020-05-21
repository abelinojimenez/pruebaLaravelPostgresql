<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\empleado as Empleado;
class empleadoController extends Controller
{

    function guardarEmpleado(Request $request){
        $empleado=new Empleado;
        $empleado->primernombre=$request->input('primernombre');
        $empleado->segundonombre=$request->input('segundonombre');
        $empleado->primerapellido=$request->input('primerapellido');
        $empleado->segundoapellido=$request->input('segundoapellido');
        $empleado->salario=$request->input('salario');
        $empleado->cargo=$request->input('cargo');
        $empleado->fecha_nacimiento=$request->input('fecha_nacimiento');
        $empleado->save();
       /* $empleado->create($request->all());*/
        return redirect('/');
    }
    function showPageStart(Request $request){
        $empleados=Empleado::all();function salarioMenor(Request $request){
        $empleados=Empleado::orderBy('salario','asc')->take(1)->get();
        $data=[];
        $data['empleados']=$empleados;
        return "el cargo es:".$empleados[0]['cargo']."";
       return view('tables',$data);
    }
        $data=[];
        $data['empleados']=$empleados;
        $data['accion']='sho';
       return view('tables',$data);

    }
    function salarioMenor(Request $request){
        $empleados=Empleado::orderBy('salario','asc')->take(1)->get();
        $data=[];
        $data['empleados']=$empleados;
        $data['accion']='salariomenor';
     //    return "el cargo es:".$empleados[0]['cargo']."";
        //return $empleados;  
       return view('tables',$data);
    
    }
    function salarioMayor(Request $request){
        $empleados=Empleado::orderBy('salario','desc')->take(1)->get();
        $data=[];
        $data['empleados']=$empleados;
        $data['accion']='salariomayor';
       return view('tables',$data);
    }
    function empleadosMismoSalario(Request $request){
        $empleados=DB::table('empleados')
        ->select('salario', DB::raw('count(*) as total'))
        ->groupBy('salario')->get();
        //->pluck('total','salario')->all();
        $data=[];
        $data['empleados']=$empleados;
        $data['accion']='mismoSalario';
        //return $empleados;
        return view('tables',$data);

    }
    function calculaedad($fechanacimiento){
        list($ano,$mes,$dia) = explode("-",$fechanacimiento);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
          $ano_diferencia--;
        return $ano_diferencia;
      }
    function edadEmpleadosfecha(Request $request){
        $empleados=Empleado::orderBy('fecha_nacimiento','desc')->get();
        for($i=0;$i<count($empleados);$i++){
                $empleados[$i]->fecha_nacimiento=$this->calculaedad($empleados[$i]->fecha_nacimiento);
        }
        $data=[];
        $data['empleados']=$empleados;
        $data['accion']='salariomayor';
       return view('tables',$data);
    }
    

}
