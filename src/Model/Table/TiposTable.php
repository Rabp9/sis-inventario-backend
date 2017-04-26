<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Estados
 * @property \Cake\ORM\Association\HasMany $Datos
 *
 * @method \App\Model\Entity\Tipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipo findOrCreate($search, callable $callback = null, $options = [])
 */
class TiposTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('tipos');
        $this->setDisplayField('descripcion');
        $this->setPrimaryKey('id');

        $this->belongsTo('Estados', [
            'foreignKey' => 'estado_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Datos', [
            'foreignKey' => 'tipo_id'
        ]);
    }
}
