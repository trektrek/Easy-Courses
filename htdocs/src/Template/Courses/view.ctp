<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id_course]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id_course], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id_course)]) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="courses view large-9 medium-8 columns content">
    <h3><?= h($course->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($course->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($course->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Course') ?></th>
            <td><?= $this->Number->format($course->id_course) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Levels') ?></h4>
        <?php if (!empty($course->levels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col"><?= __('Id Level') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Next Level') ?></th>
                <th scope="col"><?= __('Equiv1') ?></th>
                <th scope="col"><?= __('Equiv2') ?></th>
                <th scope="col"><?= __('Equiv3') ?></th>
                <th scope="col"><?= __('Equiv4') ?></th>
                <!-- <th scope="col"><?= __('Ordem') ?></th>
                <th scope="col"><?= __('Book') ?></th>
                <th scope="col"><?= __('Publisher') ?></th>
                <th scope="col"><?= __('Edition') ?></th>
                <th scope="col"><?= __('Isbn') ?></th>
                <th scope="col"><?= __('Certificate') ?></th>
                <th scope="col"><?= __('Hour Load') ?></th>
                <th scope="col"><?= __('Beginner') ?></th>
                <th scope="col"><?= __('Min Age') ?></th>
                <th scope="col"><?= __('Max Age') ?></th>
                <th scope="col"><?= __('Age') ?></th>
                <th scope="col"><?= __('Abs Reprove') ?></th>
                <th scope="col"><?= __('Note Reprove') ?></th>
                <th scope="col"><?= __('Modality') ?></th>
                <th scope="col"><?= __('Font Color') ?></th>
                <th scope="col"><?= __('Background') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($course->levels as $levels): ?>
            <tr>
                <td><?= h($levels->active) ?></td>
                <td><?= h($levels->course_id) ?></td>
                <td><?= h($levels->id_level) ?></td>
                <td><?= h($levels->description) ?></td>
                <td><?= h($levels->next_level) ?></td>
                <td><?= h($levels->equiv1) ?></td>
                <td><?= h($levels->equiv2) ?></td>
                <td><?= h($levels->equiv3) ?></td>
                <td><?= h($levels->equiv4) ?></td>
                <!-- <td><?= h($levels->ordem) ?></td>
                <td><?= h($levels->book) ?></td>
                <td><?= h($levels->publisher) ?></td>
                <td><?= h($levels->edition) ?></td>
                <td><?= h($levels->isbn) ?></td>
                <td><?= h($levels->certificate) ?></td>
                <td><?= h($levels->hour_load) ?></td>
                <td><?= h($levels->beginner) ?></td>
                <td><?= h($levels->min_age) ?></td>
                <td><?= h($levels->max_age) ?></td>
                <td><?= h($levels->age) ?></td>
                <td><?= h($levels->abs_reprove) ?></td>
                <td><?= h($levels->note_reprove) ?></td>
                <td><?= h($levels->modality) ?></td>
                <td><?= h($levels->font_color) ?></td>
                <td><?= h($levels->background) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Levels', 'action' => 'view', $levels->id_level]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Levels', 'action' => 'edit', $levels->id_level]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Levels', 'action' => 'delete', $levels->id_level], ['confirm' => __('Are you sure you want to delete # {0}?', $levels->id_level)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
