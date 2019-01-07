<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bookingonline Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Events
 *
 * @method \App\Model\Entity\Bookingonline get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bookingonline newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bookingonline[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bookingonline|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bookingonline patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bookingonline[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bookingonline findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BookingonlineTable extends Table
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

        $this->table('bookingonline');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

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
            ->allowEmpty('name');

        $validator
            ->requirePresence('tickettype', 'create')
            ->notEmpty('tickettype');

        $validator
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->requirePresence('noofseats', 'create')
            ->notEmpty('noofseats');

        $validator
            ->requirePresence('commission_per', 'create')
            ->notEmpty('commission_per');

        $validator
            ->requirePresence('commission_amt', 'create')
            ->notEmpty('commission_amt');

        $validator
            ->date('enddate')
            ->allowEmpty('enddate');

        $validator
            ->date('startdate')
            ->allowEmpty('startdate');

        $validator
            ->integer('status')
            ->allowEmpty('status');

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
