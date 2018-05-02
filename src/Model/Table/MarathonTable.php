<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Marathon Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Events
 *
 * @method \App\Model\Entity\Marathon get($primaryKey, $options = [])
 * @method \App\Model\Entity\Marathon newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Marathon[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Marathon|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Marathon patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Marathon[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Marathon findOrCreate($search, callable $callback = null)
 */
class MarathonTable extends Table
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

        $this->table('marathon');
        $this->displayField('ID');
        $this->primaryKey('ID');

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
            ->integer('ID')
            ->allowEmpty('ID', 'create');

        $validator
            ->allowEmpty('firstname');

        $validator
            ->allowEmpty('lastname');

        $validator
            ->date('date')
            ->allowEmpty('date');

        $validator
            ->allowEmpty('sex');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('mobile_number');

        $validator
            ->allowEmpty('KM');

        $validator
            ->allowEmpty('TSHIRT');

        $validator
            ->allowEmpty('activation_key');

        $validator
            ->integer('Active')
            ->allowEmpty('Active');

        $validator
            ->dateTime('Created')
            ->allowEmpty('Created');

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
        //$rules->add($rules->isUnique(['email']));
        //$rules->add($rules->existsIn(['events_id'], 'Events'));

        return $rules;
    }
}
