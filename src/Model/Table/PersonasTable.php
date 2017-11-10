<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Core\Configure;

/**
 * Personas Model
 * 
 * @property \Cake\ORM\Association\HasMany $DetalleTrabajadores
 *
 * @method \App\Model\Entity\Persona get($primaryKey, $options = [])
 * @method \App\Model\Entity\Persona newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Persona[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Persona|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Persona patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Persona[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Persona findOrCreate($search, callable $callback = null, $options = [])
 */
class PersonasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable(Configure::read('prefix_systram') . '.personal');
        $this->setDisplayField('Per_nom');
        $this->setPrimaryKey('PerCod');
        
        $this->hasMany('DetalleTrabajadores', [
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
    
    public function searchPersonas($persona) {
        return $this->find()
            ->where(['OR' => [
                'Personas.Per_ape_pat LIKE' => '%' . $persona . '%',
                'Personas.Per_nom LIKE' => '%' . $persona . '%',
            ]])
            ->matching('DetalleTrabajadores', function($q) {
                return $q->where([
                    'DetalleTrabajadores.id_depend' => 1,
                    'DetalleTrabajadores.Idestado' => 1,
                ]);
            })
            ->select(['PerCod', 'Per_ape_pat', 'Per_nom']);
    }
}