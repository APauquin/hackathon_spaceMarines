<?php

namespace App\Model;

use PDO;

class FlyManager extends AbstractManager
{
    public const TABLE = 'fly';

    public function insert(array $fly): int
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`provenance`,`arrivee`,`depart`,`retour`)
         VALUES (:provenance, :arrivee, :depart, :retour)");
        $statement->bindValue('provenance', $fly['provenance'], \PDO::PARAM_STR);
        $statement->bindValue('arrivee', $fly['arrivee'], \PDO::PARAM_STR);
        $statement->bindValue('depart', $fly['depart'], \PDO::PARAM_STR);
        $statement->bindValue('retour', $fly['retour'], \PDO::PARAM_STR);


        $statement->execute();
        return (int)$this->pdo->lastInsertId();
    }
}
