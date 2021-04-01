<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Level Entity
 *
 * @property int $active
 * @property int|null $course_id
 * @property int $id_level
 * @property string|null $description
 * @property int|null $next_level
 * @property int|null $equiv1
 * @property int|null $equiv2
 * @property int|null $equiv3
 * @property int|null $equiv4
 * @property int|null $ordem
 * @property string|null $book
 * @property string|null $publisher
 * @property string|null $edition
 * @property string|null $isbn
 * @property int|null $certificate
 * @property int|null $hour_load
 * @property int|null $beginner
 * @property int|null $min_age
 * @property int|null $max_age
 * @property int|null $age
 * @property int|null $abs_reprove
 * @property int|null $note_reprove
 * @property string|null $modality
 * @property string|null $font_color
 * @property string|null $background
 *
 * @property \App\Model\Entity\Course $course
 */
class Level extends Entity
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
        'active' => true,
        'course_id' => true,
        'description' => true,
        'next_level' => true,
        'equiv1' => true,
        'equiv2' => true,
        'equiv3' => true,
        'equiv4' => true,
        'ordem' => true,
        'book' => true,
        'publisher' => true,
        'edition' => true,
        'isbn' => true,
        'certificate' => true,
        'hour_load' => true,
        'beginner' => true,
        'min_age' => true,
        'max_age' => true,
        'age' => true,
        'abs_reprove' => true,
        'note_reprove' => true,
        'modality' => true,
        'font_color' => true,
        'background' => true,
        'course' => true,
    ];
}
