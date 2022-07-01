<?php

namespace App\App\Peliculas;

class PeliculaTO
{
    private $id;
    private $paginate;
    private $sortByEstrellasPromedio;
    private $sortByTotalRentas;
    private $query;

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
}
