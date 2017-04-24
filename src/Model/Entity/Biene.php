<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Biene Entity
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
 */
class Biene extends Entity
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
        '*' => true,
        'id' => false,
        'tipo_id' => false,
        'marca_id' => false,
        'estado_id' => false
    ];
}
