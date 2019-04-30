<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProductosTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('productos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categorias', [
            'foreignKey' => 'categoria_id',
            'joinType' => 'INNER'
        ]);

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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('marca', 'create')
            ->notEmpty('marca', 'rellene este campo');

        $validator
            ->requirePresence('modelo', 'create')
            ->notEmpty('modelo', 'rellene este campo');

        $validator
            ->integer('precio')
            ->requirePresence('precio', 'create')
            ->notEmpty('precio', 'rellene este campo');

        $validator
            ->integer('stock')
            ->requirePresence('stock', 'create')
            ->notEmpty('stock', 'rellene este campo');

        $validator
            ->integer('estado')
            ->requirePresence('estado', 'create')
            ->notEmpty('estado');
        
            $validator
            ->provider('proffer', 'Proffer\Model\Validation\ProfferRules')
            ->add('image', 'proffer', [
                'rule' => ['dimensions', [
                    'min' => ['w' => 300, 'h' => 300],
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
                'rule' => ['fileSize', '<=', '1MB'],
                'message' => 'La imagen no debe exceder 1MB.',
            ])
            ->add('image', 'mimeType', [
                'rule' => ['mimeType', ['image/jpeg', 'image/png']],
                'message' => 'La imagen no tiene un correcto formato.',
            ])
            ->requirePresence('image', 'create')
            ->notEmpty('image', null, 'create');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'));

        return $rules;
    }
}
