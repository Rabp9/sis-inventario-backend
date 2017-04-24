<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estado Entity
 *
 * @property int $id
 * @property string $descripcion
 *
 * @property \App\Model\Entity\AreaActiva[] $area_activas
 * @property \App\Model\Entity\Biene[] $bienes
 * @property \App\Model\Entity\Dato[] $datos
 * @property \App\Model\Entity\Marca[] $marcas
 * @property \App\Model\Entity\Movimiento[] $movimientos
 * @property \App\Model\Entity\Tipo[] $tipos
 * @property \App\Model\Entity\UsuarioActivo[] $usuario_activos
 */
class Estado extends Entity
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
        'id' => false
    ];
}
