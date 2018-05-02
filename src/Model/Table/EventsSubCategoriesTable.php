<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EventsSubCategories Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Events
 * @property \Cake\ORM\Association\BelongsTo $SubCategories
 *
 * @method \App\Model\Entity\EventsSubCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\EventsSubCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EventsSubCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EventsSubCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EventsSubCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EventsSubCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EventsSubCategory findOrCreate($search, callable $callback = null)
 */
class EventsSubCategoriesTable extends Table
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

        $this->table('events_sub_categories');
        $this->displayField('ID');
        $this->primaryKey('ID');

        $this->belongsTo('Events', [
            'foreignKey' => 'events_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SubCategories', [
            'foreignKey' => 'sub_categories_id',
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
            ->integer('ID')
            ->allowEmpty('ID', 'create');

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
        $rules->add($rules->existsIn(['sub_categories_id'], 'SubCategories'));

        return $rules;
    }
}
