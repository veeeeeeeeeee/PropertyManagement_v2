<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PropertyFeatures Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Properties
 * @property \Cake\ORM\Association\BelongsTo $Features
 *
 * @method \App\Model\Entity\PropertyFeature get($primaryKey, $options = [])
 * @method \App\Model\Entity\PropertyFeature newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PropertyFeature[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PropertyFeature|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PropertyFeature patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PropertyFeature[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PropertyFeature findOrCreate($search, callable $callback = null)
 */
class PropertyFeaturesTable extends Table
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

        $this->table('property_features');
        $this->displayField('prop_id');
        $this->primaryKey(['prop_id', 'feat_id']);

        $this->belongsTo('Properties', [
            'foreignKey' => 'property_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Features', [
            'foreignKey' => 'feature_id',
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
            ->integer('property_feature_no')
            ->requirePresence('property_feature_no', 'create')
            ->notEmpty('property_feature_no');

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
        $rules->add($rules->existsIn(['property_id'], 'Properties'));
        $rules->add($rules->existsIn(['feature_id'], 'Features'));

        return $rules;
    }
}
