<?php

namespace App\Repository;

use App\Models\Serie;
use Illuminate\Database\Eloquent\Collection;

class SeriesRepository
{
    private Serie $serie;

    public function __construct(Serie $serie)
    {

        $this->serie = $serie;
    }

    public function addNewSerie(Serie $serie)
    {
        $this->serie = $serie;
        $this->serie->save();
    }

    /**
     * @return Collection
     */
    public function getSeries(): Collection
    {
        return $this->serie->all();
    }
}
