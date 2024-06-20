<?php

class nombre_usuario
{
    public $id;
    public $nombre;
    public $apellidos;
    public $curso;
    public $edad;
    public $domicilio;
    public $nombre_usuario;
    public $contrasena;
    public $correo;
    public $foto_carnet;
    public $partida_bautismo;
    public $traslado_foto;
    public $contacto_personal;
    public $contacto_tutor;
    public $estado;

    public function __construct($id, $nombre, $apellidos, $curso, $edad, $domicilio, $nombre_usuario, $contrasena, $correo, $foto_carnet, $partida_bautismo, $contacto_personal, $contacto_tutor, $traslado_foto, $estado)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->curso = $curso;
        $this->edad = $edad;
        $this->domicilio = $domicilio;
        $this->nombre_usuario = $nombre_usuario;
        $this->contrasena = $contrasena;
        $this->correo = $correo;
        $this->foto_carnet = $foto_carnet;
        $this->partida_bautismo = $partida_bautismo;
        $this->contacto_personal = $contacto_personal;
        $this->contacto_tutor = $contacto_tutor;
        $this->traslado_foto = $traslado_foto;
        $this->estado = $estado;
    }
}
