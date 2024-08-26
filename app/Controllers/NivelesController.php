<?php

namespace App\Controllers;
use App\Models\NivelesModel;

class NivelesController extends BaseController
{
    public function verNiveles(): string
    {
        $niveles = new NivelesModel();
        $datos['datos']=$niveles->findAll();
        return view('nivelesacademicos',$datos);
    }

    public function insertarNivel():string
    {
        return view('form_nuevo_nivel');
    }

    public function guardarNivel()
    {
        $niveles = new NivelesModel();
        $datos = [
            'cod_nivel_acad' => $this->request->getPost('txtCodNiv'),
            'nombre' => $this->request->getPost('txtNombreNivel'),    
            'descripcion' => $this->request->getPost('txtDescripcion')
        ];    
        print_r($datos);
        $niveles->insert($datos);
        return redirect()->route('ver_niveles');
    }

    public function eliminarNivel($cod=null)
    {
        $niveles = New NivelesModel();
        $niveles->delete(['cod_nivel_acad'=>$cod]);
        return $this -> verNiveles();
    }

    public function actualizarNivel($cod=null)
    {
        $niveles = new NivelesModel();
        $datos['datos']=$niveles->where(['cod_nivel_acad'=>$cod])->first();
        return view('form_actualizar_nivel',$datos);
    }

    public function modificarNivel()
    {
        $niveles = new NivelesModel();
        $datos = [
            'cod_nivel_acad' => $this->request->getPost('txtCodNiv'),
            'nombre' => $this->request->getPost('txtNombreNivel'),    
            'descripcion' => $this->request->getPost('txtDescripcion')
        ];    
        $niveles->update($datos['cod_nivel_acad'],$datos);
        return $this->verNiveles();
    }
}

