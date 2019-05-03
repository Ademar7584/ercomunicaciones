<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->addBehavior('Proffer.Proffer', [
            'image' => [
                'root' => WWW_ROOT . 'files',
                'dir' => 'image_dir',
                'thumbnailSizes' => [
                    'square' => [
                        'w' => 700,
                        'h' => 700,
                        'crop' => true,
                        'jpeg_quality'	=> 100
                    ],
                    'portrait' => [
                        'w' => 150,
                        'h' => 150,
                        'crop' => true,
                        'jpeg_quality'	=> 100
                    ]
                ],
                'thumbnailMethod' => 'gd'
            ]
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

        $validator
            ->provider('proffer', 'Proffer\Model\Validation\ProfferRules')
            ->add('image', 'proffer', [
                'rule' => ['dimensions', [
                    'min' => ['w' => 200, 'h' => 200],
                    'max' => ['w' => 1500, 'h' => 1500]
                ]],
                'message' => 'La imagen no tiene correctas dimensiones.',
                'provider' => 'proffer'
            ])
            ->add('image', 'extension', [
                'rule' => ['extension', ['jpeg', 'png', 'jpg']],
                'message' => 'La imagen no tiene una correcta extensión.',
            ])
            ->add('image', 'fileSize', [
                'rule' => ['fileSize', '<=', '10MB'],
                'message' => 'La imagen no debe exceder 10MB.',
            ])
            ->add('image', 'mimeType', [
                'rule' => ['mimeType', ['image/jpeg', 'image/png']],
                'message' => 'La imagen no tiene un correcto formato.',
            ]);
        
        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email'], 'ya existe un usuario con este correo electronico'));

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
