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
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('bienes');
        $this->setDisplayField('id');
        $this->setEntityClass('bien');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tipos', [
            'foreignKey' => 'tipo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Marcas', [
            'foreignKey' => 'marca_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Estados', [
            'foreignKey' => 'estado_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('BienDatos', [
            'foreignKey' => 'bien_id'
        ])->setSaveStrategy('replace');
        
        $this->hasMany('Movimientos', [
            'foreignKey' => 'bien_id'
        ]);
    }
}