<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Levels Model
 *
 * @property \App\Model\Table\CoursesTable&\Cake\ORM\Association\BelongsTo $Courses
 *
 * @method \App\Model\Entity\Level get($primaryKey, $options = [])
 * @method \App\Model\Entity\Level newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Level[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Level|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Level saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Level patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Level[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Level findOrCreate($search, callable $callback = null, $options = [])
 */
class LevelsTable extends Table
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

        $this->setTable('levels');
        $this->setDisplayField('id_level');
        $this->setPrimaryKey('id_level');

        $this->belongsTo('Courses', [
            'foreignKey' => 'course_id',
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
            ->integer('active')
            ->requirePresence('active', 'create')
            ->notEmptyString('active');

        $validator
            ->integer('id_level')
            ->allowEmptyString('id_level', null, 'create');

        $validator
            ->scalar('description')
            ->maxLength('description', 45)
            ->allowEmptyString('description');

        $validator
            ->integer('next_level')
            ->allowEmptyString('next_level');

        $validator
            ->integer('equiv1')
            ->allowEmptyString('equiv1');

        $validator
            ->integer('equiv2')
            ->allowEmptyString('equiv2');

        $validator
            ->integer('equiv3')
            ->allowEmptyString('equiv3');

        $validator
            ->integer('equiv4')
            ->allowEmptyString('equiv4');

        $validator
            ->integer('ordem')
            ->allowEmptyString('ordem');

        $validator
            ->scalar('book')
            ->maxLength('book', 128)
            ->allowEmptyString('book');

        $validator
            ->scalar('publisher')
            ->maxLength('publisher', 255)
            ->allowEmptyString('publisher');

        $validator
            ->scalar('edition')
            ->maxLength('edition', 45)
            ->allowEmptyString('edition');

        $validator
            ->scalar('isbn')
            ->maxLength('isbn', 45)
            ->allowEmptyString('isbn');

        $validator
            ->allowEmptyString('certificate');

        $validator
            ->integer('hour_load')
            ->allowEmptyString('hour_load');

        $validator
            ->allowEmptyString('beginner');

        $validator
            ->integer('min_age')
            ->allowEmptyString('min_age');

        $validator
            ->integer('max_age')
            ->allowEmptyString('max_age');

        $validator
            ->integer('age')
            ->allowEmptyString('age');

        $validator
            ->allowEmptyString('abs_reprove');

        $validator
            ->allowEmptyString('note_reprove');

        $validator
            ->scalar('modality')
            ->maxLength('modality', 45)
            ->allowEmptyString('modality');

        $validator
            ->scalar('font_color')
            ->maxLength('font_color', 45)
            ->allowEmptyString('font_color');

        $validator
            ->scalar('background')
            ->maxLength('background', 45)
            ->allowEmptyString('background');

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
        $rules->add($rules->existsIn(['course_id'], 'Courses'));

        return $rules;
    }
}
