<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BienDatos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Bienes
 * @property \Cake\ORM\Association\BelongsTo $Datos
 *
 * @method \App\Model\Entity\BienDato get($primaryKey, $options = [])
 * @method \App\Model\Entity\BienDato newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BienDato[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BienDato|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BienDato patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BienDato[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BienDato findOrCreate($search, callable $callback = null, $options = [])
 */
class BienDatosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('bien_datos');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'bien_id', 'dato_id']);

        $this->belongsTo('Bienes', [
            'foreignKey' => 'bien_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Datos', [
            'foreignKey' => 'dato_id',
            'joinType' => 'INNER'
        ]);
    }
}
