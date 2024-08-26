<?php

namespace App\Controllers;
use App\Models\CiudadanosModel;

class CiudadanosController extends BaseController
{
    public function verCiudadanos(): string
    {
        $ciudadanos = new CiudadanosModel();
        $datos['datos']=$ciudadanos->findAll();
        return view('ciudadanos',$datos);
    }

    public function insertarCiudadano():string
    {
        return view('form_nuevo_ciudadano');
    }

    public function guardarCiudadano()
    {
        $ciudadanos = new CiudadanosModel();
        $datos = [
            'dpi' => $this->request->getPost('txtDPI'),
            'apellido' => $this->request->getPost('txtApellidos'),    
            'nombre' => $this->request->getPost('txtNombres'),
            'direccion' => $this->request->getPost('txtDireccion'),
            'tel_casa' => $this->request->getPost('txtTelCasa'),    
            'tel_movil' => $this->request->getPost('txtTelMovil'),
            'email' => $this->request->getPost('txtEmail'),
            'fechanac' => $this->request->getPost('txtFechaNac'),    
            'cod_nivel_acad' => $this->request->getPost('txtCodNivAca'),
            'cod_muni' => $this->request->getPost('txtCodMuni'),
            'contra' => $this->request->getPost('txtContra')
        ];    
        print_r($datos);
        $ciudadanos->insert($datos);
        return redirect()->route('ver_ciudadanos');
    }

    public function eliminarCiudadano($cod=null)
    {
        $ciudadanos = New CiudadanosModel();
        $ciudadanos->delete(['dpi'=>$cod]);
        return $this -> verCiudadanos();
    }

    public function actualizarCiudadano($cod=null)
    {
        $ciudadanos = new CiudadanosModel();
        $datos['datos']=$ciudadanos->where(['dpi'=>$cod])->first();
        return view('form_actualizar_ciudadano',$datos);
    }

    public function modificarCiudadano()
    {
        $ciudadanos = new CiudadanosModel();
        $datos = [
            'dpi' => $this->request->getPost('txtDPI'),
            'apellido' => $this->request->getPost('txtApellidos'),    
            'nombre' => $this->request->getPost('txtNombres'),
            'direccion' => $this->request->getPost('txtDireccion'),
            'tel_casa' => $this->request->getPost('txtTelCasa'),    
            'tel_movil' => $this->request->getPost('txtTelMovil'),
            'email' => $this->request->getPost('txtEmail'),
            'fechanac' => $this->request->getPost('txtFechaNac'),    
            'cod_nivel_acad' => $this->request->getPost('txtCodNivAca'),
            'cod_muni' => $this->request->getPost('txtCodMuni'),
            'contra' => $this->request->getPost('txtContra')
        ];    
        $ciudadanos->update($datos['dpi'],$datos);
        return $this->verCiudadanos();
    }
}

