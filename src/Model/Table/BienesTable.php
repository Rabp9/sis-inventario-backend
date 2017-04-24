<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bienes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tipos
 * @property \Cake\ORM\Association\BelongsTo $Marcas
 * @property \Cake\ORM\Association\BelongsTo $Biens
 * @property \Cake\ORM\Association\BelongsTo $Estados
 *
 * @method \App\Model\Entity\Biene get($primaryKey, $options = [])
 * @method \App\Model\Entity\Biene newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Biene[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Biene|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Biene patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Biene[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Biene findOrCreate($search, callable $callback = null, $options = [])
 */
class BienesTable extends Table
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

        $this->setTable('bienes');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'tipo_id', 'marca_id', 'estado_id']);

        $this->belongsTo('Tipos', [
            'foreignKey' => 'tipo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Marcas', [
            'foreignKey' => 'marca_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Biens', [
            'foreignKey' => 'bien_id'
        ]);
        $this->belongsTo('Estados', [
            'foreignKey' => 'estado_id',
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
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->allowEmpty('modelo');

        $validator
            ->allowEmpty('serie');

        $validator
            ->allowEmpty('codigo_patrimonial');

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
        $rules->add($rules->existsIn(['tipo_id'], 'Tipos'));
        $rules->add($rules->existsIn(['marca_id'], 'Marcas'));
        $rules->add($rules->existsIn(['bien_id'], 'Biens'));
        $rules->add($rules->existsIn(['estado_id'], 'Estados'));

        return $rules;
    }
}
