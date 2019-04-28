<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ClientesTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('clientes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Personas', [
            'foreignKey' => 'persona_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Notificacionescliente', [
            'foreignKey' => 'cliente_id'
        ]);
        $this->hasMany('Ventasproducto', [
            'foreignKey' => 'cliente_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre', 'rellene este campo');

        $validator
            ->requirePresence('apellido', 'create')
            ->notEmpty('apellido', 'rellene este campo');

        $validator
            ->requirePresence('ci', 'create')
            ->notEmpty('ci', 'rellene este campo');

        $validator
            ->requirePresence('direccion', 'create')
            ->notEmpty('direccion', 'rellene este campo');

        $validator
            ->requirePresence('telefono', 'create')
            ->notEmpty('telefono', 'rellene este campo');

        $validator
            ->add('correo', 'valid', ['rule' => 'email', 'message' => 'Ingrese un correo electrónico válido.'])
            ->requirePresence('correo', 'create')
            ->notEmpty('correo', 'rellene este campo');

        $validator
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo', 'rellene este campo');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['persona_id'], 'Personas'));

        return $rules;
    }
}
