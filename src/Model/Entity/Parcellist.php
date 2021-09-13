<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Parcellist Entity
 *
 * @property int $id
 * @property string|null $streetname
 * @property string $street
 * @property string|null $driver
 * @property string|null $zone
 * @property string|null $suburb
 * @property int|null $oddblimit
 * @property int|null $oddulimit
 * @property int|null $evenblimit
 * @property int|null $evenulimit
 * @property int|null $displayorder
 */
class Parcellist extends Entity
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
        'streetname' => true,
        'street' => true,
        'driver' => true,
        'zone' => true,
        'suburb' => true,
        'oddblimit' => true,
        'oddulimit' => true,
        'evenblimit' => true,
        'evenulimit' => true,
        'displayorder' => true,
    ];
}
