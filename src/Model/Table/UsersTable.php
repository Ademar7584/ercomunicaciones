<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Personas', [
            'foreignKey' => 'persona_id',
            'joinType' => 'INNER'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->notEmpty('id', 'create');

        $validator
            ->requirePresence('names', 'create')
            ->notEmpty('names', 'rellene este campo');
        
        $validator
            ->add('email', 'valid', ['rule' => 'email', 'message' => 'Ingrese un correo electrónico válido.'])
            ->requirePresence('email', 'create')
            ->notEmpty('email', 'rellene este campo');
        
        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password', 'rellene este campo', 'create');
        
        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email'], 'ya existe un usuario con este correo electronico'));
        $rules->add($rules->existsIn(['persona_id'], 'Personas'));

        return $rules;
    }

    public function findAuth(\Cake\ORM\Query $query, array $options)
    {
        $query
            ->select(['id', 'names', 'email', 'password', 'rol'])
            ->where(['Users.estado' => 1]);

        return $query;
    }

    public function recoverPassword($id) {
        $user = $this->get($id);
        return $user->password;
    }

    public function beforeDelete($event, $entity, $options) {
        if($entity->rol == 'admin') {
            return false;
        }
        return true;
    }
}
