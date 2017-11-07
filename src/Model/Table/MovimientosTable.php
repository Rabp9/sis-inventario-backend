<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Movimientos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Bienes
 * @property \Cake\ORM\Association\BelongsTo $AreaActivas
 * @property \Cake\ORM\Association\BelongsTo $UsuarioActivos
 * @property \Cake\ORM\Association\BelongsTo $Estados
 *
 * @method \App\Model\Entity\Movimiento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Movimiento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Movimiento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Movimiento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movimiento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Movimiento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Movimiento findOrCreate($search, callable $callback = null, $options = [])
 */
class MovimientosTable extends Table
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

        $this->setTable('movimientos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Bienes', [
            'foreignKey' => 'bien_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('AreaActivas', [
            'foreignKey' => 'area_activa_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('UsuarioActivos', [
            'foreignKey' => 'usuario_activo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Estados', [
            'foreignKey' => 'estado_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Areas', [
            'foreignKey' => 'area_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Responsable', [
            'className' => 'Personas',
            'foreignKey' => 'responsable',
            'propertyName' => 'responsable',
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
            ->date('fecha_inicio')
            ->requirePresence('fecha_inicio', 'create')
            ->notEmpty('fecha_inicio');

        $validator
            ->date('fecha_fin')
            ->allowEmpty('fecha_fin');

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
        $rules->add($rules->existsIn(['bien_id'], 'Bienes'));
        $rules->add($rules->existsIn(['area_activa_id'], 'AreaActivas'));
        $rules->add($rules->existsIn(['estado_id'], 'Estados'));

        return $rules;
    }
}
