<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Features Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Feats
 *
 * @method \App\Model\Entity\Feature get($primaryKey, $options = [])
 * @method \App\Model\Entity\Feature newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Feature[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Feature|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Feature patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Feature[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Feature findOrCreate($search, callable $callback = null)
 */
class FeaturesTable extends Table
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

        $this->table('features');
        $this->displayField('feat_id');
        $this->primaryKey('feat_id');

        $this->belongsTo('Feats', [
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
            ->requirePresence('feat_name', 'create')
            ->notEmpty('feat_name');

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
        $rules->add($rules->existsIn(['feat_id'], 'Feats'));

        return $rules;
    }
}