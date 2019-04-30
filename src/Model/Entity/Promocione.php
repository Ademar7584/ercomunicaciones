<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Promocione Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $tipo
 * @property int $estado
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Notificacionescliente[] $notificacionescliente
 * @property \App\Model\Entity\Promocionesproducto[] $promocionesproducto
 */
class Promocione extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}