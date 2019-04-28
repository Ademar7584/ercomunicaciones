<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;

/**
 * User Entity
 *
 * @property int $id
 * @property string $names
 * @property string $email
 * @property string $password
 * @property string $rol
 * @property bool $estado
 * @property int $persona_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Persona $persona
 */
class User extends Entity
{

    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    protected function _setPassword($value) {

        if(!empty($value)) {
            $hasher = new DefaultPasswordHasher();
            return $hasher->hash($value);
        } else {
            $id_user = $this->_properties['id'];
            $user = TableRegistry::get('Users')->recoverPassword($id_user);
            return $user;
        }
    }
}
