<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Conference Entity
 *
 * @property int $id
 * @property string $edit_key
 * @property string $title
 * @property \Cake\I18n\FrozenDate $start_date
 * @property \Cake\I18n\FrozenDate $end_date
 * @property string $institution
 * @property string $city
 * @property string $country
 * @property string $meeting_type
 * @property string $subject_area
 * @property string $homepage
 * @property string $contact_name
 * @property string $contact_email
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $deleted
 *
 * @property \App\Model\Entity\Tag[] $tags
 */
class Conference extends Entity
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
        'edit_key' => true,
        'title' => true,
        'start_date' => true,
        'end_date' => true,
        'institution' => true,
        'city' => true,
        'country' => true,
        'meeting_type' => true,
        'subject_area' => true,
        'homepage' => true,
        'contact_name' => true,
        'contact_email' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'tags' => true
    ];
}
