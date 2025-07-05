<?php

namespace App\Modules\TableEdit;

use Illuminate\Support\Collection;

abstract class AbstractTable
{
    /**
     * Nom du tableau (identifiant logique).
     */
    abstract public function tableName(): string;

    /**
     * Définition des colonnes (array ou Collection de Column).
     */
    abstract public function columns(): array|Collection;

    /**
     * Données à afficher (array ou Collection).
     */
    abstract public function data(): array|Collection;

    /**
     * Assemble le rendu complet du tableau (prêt à envoyer au front).
     */
    public function render(): array
    {
        return TableEditService::make($this->tableName())
            ->setColumns($this->columns())
            ->setData($this->data())
            ->generate();
    }
}
