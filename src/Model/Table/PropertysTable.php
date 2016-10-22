<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Propertys Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Props
 *
 * @method \App\Model\Entity\Property get($primaryKey, $options = [])
 * @method \App\Model\Entity\Property newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Property[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Property|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Property patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Property[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Property findOrCreate($search, callable $callback = null)
 */
class PropertysTable extends Table
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

        $this->table('propertys');
        $this->displayField('prop_id');
        $this->primaryKey('prop_id');

        $this->belongsTo('Props', [
            'foreignKey' => 'prop_id',
            'joinType' => 'INNER'
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
            ->requirePresence('prop_street', 'create')
            ->notEmpty('prop_street');

        $validator
            ->requirePresence('prop_suburb', 'create')
            ->notEmpty('prop_suburb');

        $validator
            ->requirePresence('prop_state', 'create')
            ->notEmpty('prop_state');

        $validator
            ->requirePresence('prop_pc', 'create')
            ->notEmpty('prop_pc');

        $validator
            ->integer('prop_type')
            ->requirePresence('prop_type', 'create')
            ->notEmpty('prop_type');

        $validator
            ->decimal('price')
            ->allowEmpty('price');

        $validator
            ->requirePresence('prop_desc', 'create')
            ->notEmpty('prop_desc');

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
        $rules->add($rules->existsIn(['prop_id'], 'Props'));

        return $rules;
    }
}
