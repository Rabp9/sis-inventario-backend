<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estados Model
 *
 * @property \Cake\ORM\Association\HasMany $AreaActivas
 * @property \Cake\ORM\Association\HasMany $Bienes
 * @property \Cake\ORM\Association\HasMany $Datos
 * @property \Cake\ORM\Association\HasMany $Marcas
 * @property \Cake\ORM\Association\HasMany $Movimientos
 * @property \Cake\ORM\Association\HasMany $Tipos
 * @property \Cake\ORM\Association\HasMany $UsuarioActivos
 *
 * @method \App\Model\Entity\Estado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estado findOrCreate($search, callable $callback = null, $options = [])
 */
class EstadosTable extends Table
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

        $this->setTable('estados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('AreaActivas', [
            'foreignKey' => 'estado_id'
        ]);
        $this->hasMany('Bienes', [
            'foreignKey' => 'estado_id'
        ]);
        $this->hasMany('Datos', [
            'foreignKey' => 'estado_id'
        ]);
        $this->hasMany('Marcas', [
            'foreignKey' => 'estado_id'
        ]);
        $this->hasMany('Movimientos', [
            'foreignKey' => 'estado_id'
        ]);
        $this->hasMany('Tipos', [
            'foreignKey' => 'estado_id'
        ]);
        $this->hasMany('UsuarioActivos', [
            'foreignKey' => 'estado_id'
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

        return $validator;
    }
}
