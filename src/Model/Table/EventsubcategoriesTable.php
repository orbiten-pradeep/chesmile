<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Eventsubcategories Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Events
 *
 * @method \App\Model\Entity\Eventsubcategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\Eventsubcategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Eventsubcategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Eventsubcategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Eventsubcategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Eventsubcategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Eventsubcategory findOrCreate($search, callable $callback = null)
 */
class EventsubcategoriesTable extends Table
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

        $this->table('eventsubcategories');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Events', [
            'className' => 'Eventsubcategories',
        ]);
        
        $this->belongsTo('Events', [
            'foreignKey' => 'events_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('sub_categories')
            ->requirePresence('sub_categories', 'create')
            ->notEmpty('sub_categories');

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
        $rules->add($rules->existsIn(['events_id'], 'Events'));

        return $rules;
    }
}
