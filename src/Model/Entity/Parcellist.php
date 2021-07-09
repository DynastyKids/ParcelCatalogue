<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Parcellist Entity
 *
 * @property int $id
 * @property string $street
 * @property string|null $driver
 * @property string|null $zone
 * @property string|null $note
 * @property string|null $suburb
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
        'street' => true,
        'driver' => true,
        'zone' => true,
        'note' => true,
        'suburb' => true,
    ];
}
