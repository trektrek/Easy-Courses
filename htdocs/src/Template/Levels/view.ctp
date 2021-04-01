<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Level $level
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Level'), ['action' => 'edit', $level->id_level]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Level'), ['action' => 'delete', $level->id_level], ['confirm' => __('Are you sure you want to delete # {0}?', $level->id_level)]) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="levels view large-9 medium-8 columns content">
    <h3><?= h($level->id_level) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $level->has('course') ? $this->Html->link($level->course->name, ['controller' => 'Courses', 'action' => 'view', $level->course->id_course]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($level->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Book') ?></th>
            <td><?= h($level->book) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publisher') ?></th>
            <td><?= h($level->publisher) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edition') ?></th>
            <td><?= h($level->edition) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isbn') ?></th>
            <td><?= h($level->isbn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modality') ?></th>
            <td><?= h($level->modality) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Font Color') ?></th>
            <td><?= h($level->font_color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Background') ?></th>
            <td><?= h($level->background) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($level->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Level') ?></th>
            <td><?= $this->Number->format($level->id_level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Next Level') ?></th>
            <td><?= $this->Number->format($level->next_level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Equiv1') ?></th>
            <td><?= $this->Number->format($level->equiv1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Equiv2') ?></th>
            <td><?= $this->Number->format($level->equiv2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Equiv3') ?></th>
            <td><?= $this->Number->format($level->equiv3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Equiv4') ?></th>
            <td><?= $this->Number->format($level->equiv4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordem') ?></th>
            <td><?= $this->Number->format($level->ordem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Certificate') ?></th>
            <td><?= $this->Number->format($level->certificate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hour Load') ?></th>
            <td><?= $this->Number->format($level->hour_load) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Beginner') ?></th>
            <td><?= $this->Number->format($level->beginner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Min Age') ?></th>
            <td><?= $this->Number->format($level->min_age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Max Age') ?></th>
            <td><?= $this->Number->format($level->max_age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($level->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Abs Reprove') ?></th>
            <td><?= $this->Number->format($level->abs_reprove) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note Reprove') ?></th>
            <td><?= $this->Number->format($level->note_reprove) ?></td>
        </tr>
    </table>
</div>
