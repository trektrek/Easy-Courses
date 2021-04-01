<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Level $level
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="levels form large-9 medium-8 columns content">
    <?= $this->Form->create($level) ?>
    <fieldset>
        <legend><?= __('Add Level') ?></legend>
        <?php
            echo $this->Form->control('active');
            echo $this->Form->control('course_id', ['options' => $courses, 'empty' => true]);
            echo $this->Form->control('description');
            echo $this->Form->control('next_level');
            echo $this->Form->control('equiv1');
            echo $this->Form->control('equiv2');
            echo $this->Form->control('equiv3');
            echo $this->Form->control('equiv4');
            echo $this->Form->control('ordem');
            echo $this->Form->control('book');
            echo $this->Form->control('publisher');
            echo $this->Form->control('edition');
            echo $this->Form->control('isbn');
            echo $this->Form->control('certificate');
            echo $this->Form->control('hour_load');
            echo $this->Form->control('beginner');
            echo $this->Form->control('min_age');
            echo $this->Form->control('max_age');
            echo $this->Form->control('age');
            echo $this->Form->control('abs_reprove');
            echo $this->Form->control('note_reprove');
            echo $this->Form->control('modality');
            echo $this->Form->control('font_color');
            echo $this->Form->control('background');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
