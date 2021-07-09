<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Parcellist Model
 *
 * @method \App\Model\Entity\Parcellist get($primaryKey, $options = [])
 * @method \App\Model\Entity\Parcellist newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Parcellist[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Parcellist|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parcellist saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parcellist patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Parcellist[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Parcellist findOrCreate($search, callable $callback = null, $options = [])
 */
class ParcellistTable extends Table
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

        $this->setTable('parcellist');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('street')
            ->maxLength('street', 255)
            ->requirePresence('street', 'create')
            ->notEmptyString('street');

        $validator
            ->scalar('driver')
            ->maxLength('driver', 255)
            ->allowEmptyString('driver');

        $validator
            ->scalar('zone')
            ->maxLength('zone', 255)
            ->allowEmptyString('zone');

        $validator
            ->scalar('note')
            ->maxLength('note', 255)
            ->allowEmptyString('note');

        $validator
            ->scalar('suburb')
            ->maxLength('suburb', 255)
            ->allowEmptyString('suburb');

        return $validator;
    }
}
