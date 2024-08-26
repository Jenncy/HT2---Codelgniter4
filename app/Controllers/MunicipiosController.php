<?php

namespace App\Controllers;
use App\Models\MunicipiosModel;

class MunicipiosController extends BaseController
{
    public function verMunicipios(): string
    {
        $municipios = new MunicipiosModel();
        $datos['datos']=$municipios->findAll();
        return view('municipios',$datos);
    }

    public function insertarMunicipio():string
    {
        return view('form_nuevo_municipio');
    }

    public function guardarMunicipio()
    {
        $municipios = new MunicipiosModel();
        $datos = [
            'cod_muni' => $this->request->getPost('txtCodMuni'),
            'nombre_municipio' => $this->request->getPost('txtNombreMuni'),    
            'cod_depto' => $this->request->getPost('txtCodDepto')
        ];    
        print_r($datos);
        $municipios->insert($datos);
        return redirect()->route('ver_municipios');
    }

    public function eliminarMunicipio($cod=null)
    {
        $municipios = New MunicipiosModel();
        $municipios->delete(['cod_muni'=>$cod]);
        return $this -> verMunicipios();
    }

    public function actualizarMunicipio($cod=null)
    {
        $municipios = new MunicipiosModel();
        $datos['datos']=$municipios->where(['cod_muni'=>$cod])->first();
        return view('form_actualizar_municipio',$datos);
    }

    public function modificarMunicipio()
    {
        $municipios = new MunicipiosModel();
        $datos = [
            'cod_muni' => $this->request->getPost('txtCodMuni'),
            'nombre_municipio' => $this->request->getPost('txtNombreMuni'),    
            'cod_depto' => $this->request->getPost('txtCodDepto')
        ];    
        $municipios->update($datos['cod_muni'],$datos);
        return $this->verMunicipios();
    }
}

