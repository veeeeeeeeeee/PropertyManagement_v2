<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PropertyImage Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Imgs
 * @property \Cake\ORM\Association\BelongsTo $Property
 *
 * @method \App\Model\Entity\PropertyImage get($primaryKey, $options = [])
 * @method \App\Model\Entity\PropertyImage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PropertyImage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PropertyImage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PropertyImage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PropertyImage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PropertyImage findOrCreate($search, callable $callback = null)
 */
class PropertyImageTable extends Table
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

        $this->table('property_image');
        $this->displayField('img_id');
        $this->primaryKey('img_id');

        $this->belongsTo('Imgs', [
            'foreignKey' => 'img_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Property', [
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
            ->requirePresence('img_path', 'create')
            ->notEmpty('img_path');

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
        $rules->add($rules->existsIn(['img_id'], 'Imgs'));
        $rules->add($rules->existsIn(['prop_id'], 'Property'));

        return $rules;
    }
}
