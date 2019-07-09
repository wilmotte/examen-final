<?php

class Association extends Db
{

    const TABLE_NAME = " association_vehicule_conducteur";

    protected $id;
    protected $vehicule_id;
    protected $conducteur_id;


    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setVehiculeId($vehicule_id)
    {
        if (strlen($vehicule_id) < 1) {
            throw new Exception('Le champ est vide.');
        }

        $this->vehicule_id = $vehicule_id;
        return $this;
    }

    public function setConducteurId($conducteur_id)
    {
        if (strlen($conducteur_id) < 1) {
            throw new Exception('Le champ est vide.');
        }

        $this->conducteur_id = $conducteur_id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getVehiculeId()
    {
        return $this->vehicule_id;
    }

    public function getConducteurId()
    {
        return $this->conducteur_id;
    }

    public function save()
    {
        $data = [
            "vehicule_id"    => $this->getVehiculeId(),
            "conducteur_id"     => $this->getConducteurId(),
        ];
        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

    public function update()
    {
        if ($this->id > 0) {
            $data = [
                "id"            => $this->getId(),
                "vehicule_id"    => $this->getVehiculeId(),
                "conducteur_id"     => $this->getConducteurId()
            ];
            Db::dbUpdate(self::TABLE_NAME, $data);
            return $this;
        }
        return;
    }

    public function delete()
    {
        $data = [
            'id' => $this->getId(),
        ];

        Db::dbDelete(self::TABLE_NAME, $data);
        return;
    }

    public static function findAll()
    {
        $data = Db::dbFind(self::TABLE_NAME);

        $associations = [];
        foreach ($data as $d) {
            $association = new Association;
            $association->setId($d['id']);
            $association->setVehiculeId($d['vehicule_id']);
            $association->setConducteurId($d['conducteur_id']);

            $associations[] = $association;
        }

        return $associations;
    }

    public static function findOne(int $id)
    {
        $request = [
            ['id', '=', $id]
        ];
        $element = Db::dbFind(self::TABLE_NAME, $request);
        if (count($element) > 0) $element = $element[0];
        else return;

        $association = new Association;
        $association->setId($element['id']);
        $association->setVehiculeId($element['vehicule_id']);
        $association->setConducteurId($element['conducteur_id']);

        return $association;
    }

    public function getVehicule()
    {
        $vehicule = Vehicule::findOne($this->getVehiculeId());
        return $vehicule;
    }

    public function getConducteur()
    {
        $conducteur = Conducteur::findOne($this->getConducteurId());
        return $conducteur;
    }
}
