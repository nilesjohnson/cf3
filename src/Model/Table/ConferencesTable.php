<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Conferences Model
 *
 * @property \App\Model\Table\TagsTable|\Cake\ORM\Association\BelongsToMany $Tags
 *
 * @method \App\Model\Entity\Conference get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conference newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Conference[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conference|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conference|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conference patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conference[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conference findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConferencesTable extends Table
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

        $this->setTable('conferences');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Tags', [
            'foreignKey' => 'conference_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'conferences_tags'
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
            ->scalar('edit_key')
            ->maxLength('edit_key', 10)
            ->allowEmpty('edit_key');

        $validator
            ->scalar('title')
            ->maxLength('title', 200)
            ->allowEmpty('title');

        $validator
            ->date('start_date')
            ->allowEmpty('start_date');

        $validator
            ->date('end_date')
            ->allowEmpty('end_date');

        $validator
            ->scalar('institution')
            ->maxLength('institution', 100)
            ->allowEmpty('institution');

        $validator
            ->scalar('city')
            ->maxLength('city', 100)
            ->allowEmpty('city');

        $validator
            ->scalar('country')
            ->maxLength('country', 100)
            ->allowEmpty('country');

        $validator
            ->scalar('meeting_type')
            ->maxLength('meeting_type', 100)
            ->allowEmpty('meeting_type');

        $validator
            ->scalar('subject_area')
            ->maxLength('subject_area', 100)
            ->allowEmpty('subject_area');

        $validator
            ->scalar('homepage')
            ->maxLength('homepage', 400)
            ->allowEmpty('homepage');

        $validator
            ->scalar('contact_name')
            ->maxLength('contact_name', 100)
            ->allowEmpty('contact_name');

        $validator
            ->scalar('contact_email')
            ->maxLength('contact_email', 100)
            ->allowEmpty('contact_email');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        return $validator;
    }
}
