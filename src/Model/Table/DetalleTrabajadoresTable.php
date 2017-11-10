<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Core\Configure;

/**
 * DetalleTrabajadores Model
 *
 * @method \App\Model\Entity\DetalleTrabajador get($primaryKey, $options = [])
 * @method \App\Model\Entity\DetalleTrabajador newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DetalleTrabajador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DetalleTrabajador|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DetalleTrabajador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DetalleTrabajador[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DetalleTrabajador findOrCreate($search, callable $callback = null, $options = [])
 */
class DetalleTrabajadoresTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable(Configure::read('prefix_systram') . '.std_detalle_cargo_area');
        $this->setEntityClass('DetalleTrabajador');
        $this->setDisplayField('PerCod');
        $this->setPrimaryKey('cod_detalle_cargo');
        
        $this->belongsTo('Personas', [
            'foreignKey' => 'PerCod'
        ]);
    }

    /**
     * Returns the database connection name to use by default.
     *
     * @return string
     */
    public static function defaultConnectionName() {
        return 'systram_tmt';
    }
}
