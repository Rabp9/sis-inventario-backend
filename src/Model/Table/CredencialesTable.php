<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Credenciales Model
 *
 * @method \App\Model\Entity\Credencial get($primaryKey, $options = [])
 * @method \App\Model\Entity\Credencial newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Credencial[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Credencial|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Credencial patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Credencial[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Credencial findOrCreate($search, callable $callback = null, $options = [])
 */
class CredencialesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('credenciales');
        $this->setDisplayField('software');
        $this->setPrimaryKey('id');
    }
}
