<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id
 * @property string $marca
 * @property string $modelo
 * @property int $precio
 * @property int $stock
 * @property int $estado
 * @property int $categoria_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Promocionesproducto[] $promocionesproducto
 * @property \App\Model\Entity\Ventasproducto[] $ventasproducto
 */
class Producto extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'image_dir' => false
    ];
}
