<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Area Entity
 *
 * @property int $cod_Parea
 * @property string $per_Area
 * @property string $sigla
 * @property string $telf_1
 * @property string $telf_anexo
 * @property string $posi
 * @property int $Idestado
 * @property int $pertenencia
 * @property int $id_depend
 * @property string $dir_area
 */
class Area extends Entity
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
