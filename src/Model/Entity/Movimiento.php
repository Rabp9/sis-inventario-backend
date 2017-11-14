<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Movimiento Entity
 *
 * @property int $id
 * @property int $bien_id
 * @property int $area_activa_id
 * @property int $usuario_activo_id
 * @property \Cake\I18n\Time $fecha_inicio
 * @property \Cake\I18n\Time $fecha_fin
 * @property int $estado_id
 *
 * @property \App\Model\Entity\Biene $biene
 * @property \App\Model\Entity\AreaActiva $area_activa
 * @property \App\Model\Entity\UsuarioActivo $usuario_activo
 * @property \App\Model\Entity\Estado $estado
 */
class Movimiento extends Entity
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
