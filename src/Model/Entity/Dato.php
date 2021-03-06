<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dato Entity
 *
 * @property int $id
 * @property int $tipo_id
 * @property string $descripcion
 * @property string $tipoDato
 * @property bool $unico
 * @property int $estado_id
 *
 * @property \App\Model\Entity\Tipo $tipo
 * @property \App\Model\Entity\Estado $estado
 * @property \App\Model\Entity\Alternativa[] $alternativas
 */
class Dato extends Entity
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
}
