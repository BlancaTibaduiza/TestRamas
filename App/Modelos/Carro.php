<?php


namespace App\Modelos;


class Carro
{
private $Marca;
private $Modelo;
private $Tipo;
private $Color;

    /**
     * Carro constructor.
     * @param $Marca
     * @param $Modelo
     * @param $Tipo
     * @param $Color
     */
    public function __construct($Marca, $Modelo, $Tipo, $Color)
    {
        $this->Marca = $Marca;
        $this->Modelo = $Modelo;
        $this->Tipo = $Tipo;
        $this->Color = $Color;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->Marca;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->Modelo;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->Tipo;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->Color;
    }

    /**
     * @param mixed $Marca
     */
    public function setMarca($Marca)
    {
        $this->Marca = $Marca;
    }

    /**
     * @param mixed $Modelo
     */
    public function setModelo($Modelo)
    {
        $this->Modelo = $Modelo;
    }

    /**
     * @param mixed $Tipo
     */
    public function setTipo($Tipo)
    {
        $this->Tipo = $Tipo;
    }

    /**
     * @param mixed $Color
     */
    public function setColor($Color)
    {
        $this->Color = $Color;
    }

    public function mostrardatos()
    {
      echo "<h4>los datos de los carros son:</h4>";
        echo "<li><strong>Marca</strong>".$this->getMarca()."</li>";
        echo "<li><strong>Modelo</strong>".$this->getModelo()."</li>";
        echo "<li><strong>Tipo</strong>".$this->getTipo()."</li>";
        echo "<li><strong>Color</strong>".$this->getColor()."<li/>";
    }
}

