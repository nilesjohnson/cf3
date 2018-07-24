<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conference $conference
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conference->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conference->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Conferences'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="conferences form large-9 medium-8 columns content">
    <?= $this->Form->create($conference) ?>
    <fieldset>
        <legend><?= __('Edit Conference') ?></legend>
        <?php
            echo $this->Form->control('edit_key');
            echo $this->Form->control('title');
            echo $this->Form->control('start_date', ['empty' => true]);
            echo $this->Form->control('end_date', ['empty' => true]);
            echo $this->Form->control('institution');
            echo $this->Form->control('city');
            echo $this->Form->control('country');
            echo $this->Form->control('meeting_type');
            echo $this->Form->control('subject_area');
            echo $this->Form->control('homepage');
            echo $this->Form->control('contact_name');
            echo $this->Form->control('contact_email');
            echo $this->Form->control('description');
            echo $this->Form->control('deleted', ['empty' => true]);
            echo $this->Form->control('tags._ids', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
