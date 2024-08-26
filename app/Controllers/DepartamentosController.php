<?php

namespace App\Controllers;
use App\Models\DepartamentosModel;

class DepartamentosController extends BaseController
{
    public function verDepartamentos(): string
    {
        $departamentos = new DepartamentosModel();
        $datos['datos']=$departamentos->findAll();
        return view('departamentos',$datos);
    }

    public function insertarDepartamento():string
    {
        return view('form_nuevo_departamento');
    }

    public function guardarDepartamento()
    {
        $departamentos = new DepartamentosModel();
        $datos = [
            'cod_depto' => $this->request->getPost('txtCodDepto'),
            'nombre_depto' => $this->request->getPost('txtNombreDepto'),    
            'cod_region' => $this->request->getPost('txtCodRegion')
        ];    
        print_r($datos);
        $departamentos->insert($datos);
        return redirect()->route('ver_departamentos');
    }

    public function eliminarDepartamento($cod=null)
    {
        $departamentos = New DepartamentosModel();
        $departamentos->delete(['cod_depto'=>$cod]);
        return $this -> verDepartamentos();
    }

    public function actualizarDepartamento($cod=null)
    {
        $departamentos = new DepartamentosModel();
        $datos['datos']=$departamentos->where(['cod_depto'=>$cod])->first();
        return view('form_actualizar_departamento',$datos);
    }

    public function modificarDepartamento()
    {
        $departamentos = new DepartamentosModel();
        $datos = [
            'cod_depto' => $this->request->getPost('txtCodDepto'),
            'nombre_depto' => $this->request->getPost('txtNombreDepto'),    
            'cod_region' => $this->request->getPost('txtCodRegion')
        ];    
        $departamentos->update($datos['cod_depto'],$datos);
        return $this->verDepartamentos();
    }
}

