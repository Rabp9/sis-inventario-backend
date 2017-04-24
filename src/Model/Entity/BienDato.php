<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BienDato Entity
 *
 * @property int $id
 * @property int $bien_id
 * @property int $dato_id
 * @property string $descripcion
 *
 * @property \App\Model\Entity\Biene $biene
 * @property \App\Model\Entity\Dato $dato
 */
class BienDato extends Entity
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
        'bien_id' => false,
        'dato_id' => false
    ];
}
