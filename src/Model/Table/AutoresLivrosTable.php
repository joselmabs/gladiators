<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AutoresLivros Model
 *
 * @property \App\Model\Table\AutoresTable|\Cake\ORM\Association\BelongsTo $Autores
 * @property \App\Model\Table\LivrosTable|\Cake\ORM\Association\BelongsTo $Livros
 *
 * @method \App\Model\Entity\AutoresLivro get($primaryKey, $options = [])
 * @method \App\Model\Entity\AutoresLivro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AutoresLivro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AutoresLivro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AutoresLivro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AutoresLivro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AutoresLivro findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AutoresLivrosTable extends Table
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

        $this->setTable('autores_livros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Autores', [
            'foreignKey' => 'autor_id'
        ]);
        $this->belongsTo('Livros', [
            'foreignKey' => 'livro_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['autor_id'], 'Autores'));
        $rules->add($rules->existsIn(['livro_id'], 'Livros'));

        return $rules;
    }
}
