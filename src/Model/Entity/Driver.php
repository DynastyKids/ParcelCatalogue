<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Driver Entity
 *
 * @property int $id
 * @property string $drivername
 * @property string|null $zone
 * @property int|null $active
 */
class Driver extends Entity
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
        'drivername' => true,
        'zone' => true,
        'active' => true,
    ];
}
