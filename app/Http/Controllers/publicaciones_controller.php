<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publicaciones_model;

class publicaciones_controller extends Controller
{
    public function contenido1(){

        $variable=1;

        $informacion = publicaciones_model::find($variable);

        return view("temas",['informacion'=>$informacion]);

    }


    public function contenido2(){

        $variable=2;

        $informacion = publicaciones_model::find($variable);

        return view("temas2",['informacion'=>$informacion]);

    }

    public function contenido3(){

        $variable=3;

        $informacion = publicaciones_model::find($variable);

        return view("temas3",['informacion'=>$informacion]);

    }


    public function contenido4(){

        $variable=4;

        $informacion = publicaciones_model::find($variable);

        return view("temas4",['informacion'=>$informacion]);

    }


    public function contenido5(){

        $variable=5;

        $informacion = publicaciones_model::find($variable);

        return view("temas5",['informacion'=>$informacion]);

    }


    public function contenido6(){

        $variable=6;

        $informacion = publicaciones_model::find($variable);

        return view("temas6",['informacion'=>$informacion]);

    }


    public function contenido7(){

        $variable=7;

        $informacion = publicaciones_model::find($variable);

        return view("temas7",['informacion'=>$informacion]);

    }


    public function contenido8(){

        $variable=8;

        $informacion = publicaciones_model::find($variable);

        return view("temas8",['informacion'=>$informacion]);

    }


    public function contenido9(){

        $variable=9;
        $informacion = publicaciones_model::find($variable);
        return view("temas9",['informacion'=>$informacion]);

    }


    public function contenido10(){

        $variable=10;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-1",['informacion'=>$informacion]);

    }


    public function contenido11(){

        $variable=11;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-2",['informacion'=>$informacion]);

    }


    public function contenido12(){

        $variable=12;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-3",['informacion'=>$informacion]);

    }

    
    public function contenido13(){

        $variable=13;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-4",['informacion'=>$informacion]);

    }


    public function contenido14(){

        $variable=14;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-5",['informacion'=>$informacion]);

    }


    public function contenido15(){

        $variable=15;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-6",['informacion'=>$informacion]);

    }


    public function contenido16(){

        $variable=16;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-7",['informacion'=>$informacion]);

    }


    public function contenido17(){

        $variable=17;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-8",['informacion'=>$informacion]);

    }


    public function contenido18(){

        $variable=18;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-9",['informacion'=>$informacion]);

    }


    public function contenido19(){

        $variable=19;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-10",['informacion'=>$informacion]);

    }


    public function contenido20(){

        $variable=20;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-11",['informacion'=>$informacion]);

    }


    public function contenido21(){

        $variable=21;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-12",['informacion'=>$informacion]);

    }


    public function contenido22(){

        $variable=22;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-13",['informacion'=>$informacion]);

    }


    public function contenido23(){

        $variable=23;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-14",['informacion'=>$informacion]);

    }

    public function contenido24(){

        $variable=24;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-15",['informacion'=>$informacion]);

    }


    public function contenido25(){

        $variable=25;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-16",['informacion'=>$informacion]);

    }

    public function contenido26(){

        $variable=26;
        $informacion = publicaciones_model::find($variable);
        return view("unidad2-17",['informacion'=>$informacion]);

    }




}
