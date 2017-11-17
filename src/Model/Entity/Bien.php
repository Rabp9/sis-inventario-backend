<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bien Entity
 *
 * @property int $id
 * @property int $tipo_id
 * @property int $marca_id
 * @property string $descripcion
 * @property string $modelo
 * @property string $serie
 * @property string $codigo_patrimonial
 * @property int $bien_id
 * @property int $estado_id
 *
 * @property \App\Model\Entity\Tipo $tipo
 * @property \App\Model\Entity\Marca $marca
 * @property \App\Model\Entity\Estado $estado
 * @property \App\Model\Entity\BienDato[] $bien_datos
 */
class Bien extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true
    ];
    
    protected $_virtual = ['descripcion_detalle'];
    
    protected function _getDescripcionDetalle() {
        $id = $this->_properties['id'];
        $descripcion = $this->_properties['descripcion'];
        $tipo =  $this->_properties['tipo']['descripcion'];
        $marca =  $this->_properties['marca']['descripcion'];
        $modelo =  $this->_properties['modelo'];
        $serie =  $this->_properties['serie'];
        $codigo_patrimonial =  $this->_properties['codigo_patrimonial'];
        if (sizeof($this->_properties['movimientos'])) {
            $area = $this->_properties['movimientos'][0]['area']['per_Area'];
            $persona_responsable = $this->_properties['movimientos'][0]['persona_responsable']['full_name'];
            return $id . ' ' . $descripcion . ' ' . $tipo . ' ' . $marca . ' ' . $modelo . ' ' . $serie . ' ' . $codigo_patrimonial . ' ' . $area . ' ' . $persona_responsable;;
        }
        return $id . ' ' . $descripcion . ' ' . $tipo . ' ' . $marca . ' ' . $modelo . ' ' . $serie . ' ' . $codigo_patrimonial;
    }
}
