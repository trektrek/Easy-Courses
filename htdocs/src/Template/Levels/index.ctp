<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Level[]|\Cake\Collection\CollectionInterface $levels
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Level'), ['action' => 'add']) ?></li>
        <!-- <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li> -->
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="levels index large-9 medium-8 columns content">
    <h3><?= __('Levels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">
                    <?= $this->Paginator->sort('active') ?>
                    
                </th>
                <th scope="col"><?= $this->Paginator->sort('course_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_level') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('next_level') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equiv1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equiv2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equiv3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equiv4') ?></th>
                <!--  <th scope="col"><?= $this->Paginator->sort('ordem') ?></th>
                 <th scope="col"><?= $this->Paginator->sort('book') ?></th>
                <th scope="col"><?= $this->Paginator->sort('publisher') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edition') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isbn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('certificate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hour_load') ?></th>
                <th scope="col"><?= $this->Paginator->sort('beginner') ?></th>
                <th scope="col"><?= $this->Paginator->sort('min_age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('max_age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('abs_reprove') ?></th>
                <th scope="col"><?= $this->Paginator->sort('note_reprove') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('modality') ?></th>
                <th scope="col"><?= $this->Paginator->sort('font_color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('background') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($levels as $level): ?>
            <tr>
                <td>
                    <?php //= $this->Number->format($level->active) ?>
                    <?= ($level->active==1)?"Sim":"Não"?>    
                </td>
                <td><?= $level->has('course') ? $this->Html->link($level->course->name, ['controller' => 'Courses', 'action' => 'view', $level->course->id_course]) : '' ?></td>
                <td><?= $this->Number->format($level->id_level) ?></td>
                <td><?= h($level->description) ?></td>
                <td><?= $this->Number->format($level->next_level) ?></td>
                <td><?= $this->Number->format($level->equiv1) ?></td>
                <td><?= $this->Number->format($level->equiv2) ?></td>
                <td><?= $this->Number->format($level->equiv3) ?></td>
                <td><?= $this->Number->format($level->equiv4) ?></td>
                <!-- <td><?= $this->Number->format($level->ordem) ?></td> -->
                <!-- <td><?= h($level->book) ?></td>
                <td><?= h($level->publisher) ?></td>
                <td><?= h($level->edition) ?></td>
                <td><?= h($level->isbn) ?></td>
                <td><?= $this->Number->format($level->certificate) ?></td>
                <td><?= $this->Number->format($level->hour_load) ?></td>
                <td><?= $this->Number->format($level->beginner) ?></td>
                <td><?= $this->Number->format($level->min_age) ?></td>
                <td><?= $this->Number->format($level->max_age) ?></td>
                <td><?= $this->Number->format($level->age) ?></td>
                <td><?= $this->Number->format($level->abs_reprove) ?></td>
                <td><?= $this->Number->format($level->note_reprove) ?></td> -->
                <!-- <td><?= h($level->modality) ?></td> -->
                <!-- <td><?= h($level->font_color) ?></td>
                <td><?= h($level->background) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $level->id_level]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $level->id_level]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $level->id_level], ['confirm' => __('Are you sure you want to delete # {0}?', $level->id_level)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
