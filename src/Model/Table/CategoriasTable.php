<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CategoriasTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('categorias');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        
        $this->addBehavior('Timestamp');

        $this->hasMany('Productos', [
            'foreignKey' => 'categoria_id'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
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
