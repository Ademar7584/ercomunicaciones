<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PromocionesTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('promociones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Notificacionescliente', [
            'foreignKey' => 'promocione_id'
        ]);
        $this->hasMany('Promocionesproducto', [
            'foreignKey' => 'promocione_id'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre', 'rellene este campo');

        $validator
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion', 'rellene este campo');

        $validator
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo', 'rellene este campo');

        return $validator;
    }
}
