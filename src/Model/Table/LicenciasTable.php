<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Licencias Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Estados
 *
 * @method \App\Model\Entity\Licencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Licencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Licencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Licencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Licencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Licencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Licencia findOrCreate($search, callable $callback = null, $options = [])
 */
class LicenciasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('licencias');
        $this->setDisplayField('descripcion');
        $this->setPrimaryKey('id');

        $this->belongsTo('Estados', [
            'foreignKey' => 'estado_id',
            'joinType' => 'INNER'
        ]);
    }
}
