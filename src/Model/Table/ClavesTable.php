<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Claves Model
 *
 * @method \App\Model\Entity\Clave get($primaryKey, $options = [])
 * @method \App\Model\Entity\Clave newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Clave[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Clave|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Clave patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Clave[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Clave findOrCreate($search, callable $callback = null, $options = [])
 */
class ClavesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('claves');
        $this->setDisplayField('software');
        $this->setPrimaryKey('id');
    }
}
