<?php

namespace App\App\Peliculas;

class PeliculaTO
{
    private $id;
    private $paginate;
    private $sortByEstrellasPromedio;
    private $sortByTotalRentas;
    private $query;
    private $estrellas;
    private $name;
    private $comentario;
    private $periodo_id;

    /**
     * @return mixed
     */
    public function getPeriodoId()
    {
        return $this->periodo_id;
    }

    /**
     * @param mixed $periodo_id
     */
    public function setPeriodoId($periodo_id): void
    {
        $this->periodo_id = $periodo_id;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio): void
    {
        $this->precio = $precio;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha): void
    {
        $this->fecha = $fecha;
    }
    private $precio;
    private $precio_total;
    private $fecha;

    /**
     * @return mixed
     */
    public function getPaginate()
    {
        return $this->paginate;
    }

    /**
     * @param mixed $paginate
     */
    public function setPaginate($paginate): void
    {
        $this->paginate = $paginate;
    }

    /**
     * @return mixed
     */
    public function getSortByTotalRentas()
    {
        return $this->sortByTotalRentas;
    }

    /**
     * @param mixed $sortByTotalRentas
     */
    public function setSortByTotalRentas($sortByTotalRentas): void
    {
        $this->sortByTotalRentas = $sortByTotalRentas;
    }

    /**
     * @return mixed
     */
    public function getSortByEstrellasPromedio()
    {
        return $this->sortByEstrellasPromedio;
    }

    /**
     * @param mixed $sortByEstrellasPromedio
     */
    public function setSortByEstrellasPromedio($sortByEstrellasPromedio): void
    {
        $this->sortByEstrellasPromedio = $sortByEstrellasPromedio;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param mixed $query
     */
    public function setQuery($query): void
    {
        $this->query = $query;
    }

    /**
     * @return mixed
     */
    public function getEstrellas()
    {
        return $this->estrellas;
    }

    /**
     * @param mixed $estrellas
     */
    public function setEstrellas($estrellas): void
    {
        $this->estrellas = $estrellas;
    }

    /**
     * @return mixed
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * @param mixed $comentario
     */
    public function setComentario($comentario): void
    {
        $this->comentario = $comentario;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrecioTotal()
    {
        return $this->precio_total;
    }

    /**
     * @param mixed $precio_total
     */
    public function setPrecioTotal($precio_total): void
    {
        $this->precio_total = $precio_total;
    }
}
