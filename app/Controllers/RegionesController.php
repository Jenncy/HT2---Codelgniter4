<?php

namespace App\Controllers;
use App\Models\RegionesModel;

class RegionesController extends BaseController
{
    public function verRegiones(): string
    {
        $regiones = new RegionesModel();
        $datos['datos']=$regiones->findAll();
        return view('regiones',$datos);
    }

    public function insertarRegion():string
    {
        return view('form_nueva_region');
    }

    public function guardarRegion()
    {
        $regiones = new RegionesModel();
        $datos = [
            'cod_region' => $this->request->getPost('txtCodReg'),
            'nombre' => $this->request->getPost('txtNombreRegion'),    
            'descripcion' => $this->request->getPost('txtDescripcion')
        ];    
        print_r($datos);
        $regiones->insert($datos);
        return redirect()->route('ver_regiones');
    }

    public function eliminarRegion($cod=null)
    {
        $regiones = New RegionesModel();
        $regiones->delete(['cod_region'=>$cod]);
        return $this -> verRegiones();
    }

    public function actualizarRegion($cod=null)
    {
        $regiones = new RegionesModel();
        $datos['datos']=$regiones->where(['cod_region'=>$cod])->first();
        return view('form_actualizar_region',$datos);
    }

    public function modificarRegion()
    {
        $regiones = new RegionesModel();
        $datos = [
            'cod_region' => $this->request->getPost('txtCodReg'),
            'nombre' => $this->request->getPost('txtNombreRegion'),    
            'descripcion' => $this->request->getPost('txtDescripcion')
        ];    
        $regiones->update($datos['cod_region'],$datos);
        return $this->verRegiones();
    }
}

