<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DetalleTrabajador Entity
 *
 * @property int $cod_detalle_cargo
 * @property int $PerCod
 * @property int $cod_Parea
 * @property int $Cod_CargoPer
 * @property int $IdAnio
 * @property \Cake\I18n\Time $fecha
 * @property int $Idestado
 * @property int $Cod_Tipo_Cargo
 * @property int $id_depend
 * 
 * @property \App\Model\Entity\Persona $persona
 */
class DetalleTrabajador extends Entity
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
