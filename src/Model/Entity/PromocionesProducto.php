<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class PromocionesProducto extends Entity
{

    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
