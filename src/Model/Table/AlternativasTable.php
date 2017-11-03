<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alternativas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Datos
 * @property \Cake\ORM\Association\BelongsTo $Estados
 *
 * @method \App\Model\Entity\Alternativa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Alternativa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Alternativa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alternativa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alternativa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Alternativa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alternativa findOrCreate($search, callable $callback = null, $options = [])
 */
class AlternativasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('alternativas');
        $this->setDisplayField('descripcion');
        $this->setPrimaryKey('id');

        $this->belongsTo('Datos', [
            'foreignKey' => 'dato_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Estados', [
            'foreignKey' => 'estado_id',
            'joinType' => 'INNER'
        ]);
    }
}