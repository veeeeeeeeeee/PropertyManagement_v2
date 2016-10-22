<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PropertyFeature Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Property
 * @property \Cake\ORM\Association\BelongsTo $Feature
 *
 * @method \App\Model\Entity\PropertyFeature get($primaryKey, $options = [])
 * @method \App\Model\Entity\PropertyFeature newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PropertyFeature[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PropertyFeature|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PropertyFeature patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PropertyFeature[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PropertyFeature findOrCreate($search, callable $callback = null)
 */
class PropertyFeatureTable extends Table
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

        $this->table('property_feature');
        $this->displayField('prop_id');
        $this->primaryKey(['prop_id', 'feat_id']);

        $this->belongsTo('Property', [
            'foreignKey' => 'prop_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Feature', [
            'foreignKey' => 'feat_id',
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
            ->integer('no_feat')
            ->requirePresence('no_feat', 'create')
            ->notEmpty('no_feat');

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
        $rules->add($rules->existsIn(['prop_id'], 'Property'));
        $rules->add($rules->existsIn(['feat_id'], 'Feature'));

        return $rules;
    }
}
