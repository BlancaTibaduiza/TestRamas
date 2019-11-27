<?php


namespace App\Modelos;

class Persona
{
    private $Nombre;
    private $Apellido;
    private $Telefono;
    Private $Direccion;
    /**
     * Persona constructor.
     * @param $Nombre
     * @param $Apellido
     * @param $Telefono
     * @param $Direccion
     */
    public function __construct($Nombre, $Apellido, $Telefono, $Direccion)
    {
        $this->Nombre = $Nombre;
        $this->Apellido = $Apellido;
        $this->Telefono = $Telefono;
        $this->Direccion = $Direccion;
    }


    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->Apellido;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->Telefono;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->Direccion;
    }

    /**
     * @param mixed $Nombre
     */
    public function setNombre($Nombre): void
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @param mixed $Apellido
     */
    public function setApellido($Apellido): void
    {
        $this->Apellido = $Apellido;
    }

    /**
     * @param mixed $Telefono
     */
    public function setTelefono($Telefono): void
    {
        $this->Telefono = $Telefono;
    }

    /**

     * @param mixed $Direccion
     */
    public function setDireccion($Direccion): void
    {
        $this->Direccion= $Direccion;
    }



    public function mostrardatos ()
    {
        echo"<h4>Los datos de la persona son :</h4>";
        echo "<ul>";
        echo"<li><strong>Nombre</strong>".$this->getNombre()."</li>";
        echo "<li><strong>Apellidos</strong>".$this->getApellido()."</li>";
        echo"<li><strong>Telefono</strong>".$this->getTelefono()."</li>";
        echo"<li><strong>Direccion</strong>".$this->getDireccion()."</li>";
        echo "</ul>";
    }

}