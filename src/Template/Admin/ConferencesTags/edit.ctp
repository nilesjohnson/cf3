<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferencesTag $conferencesTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conferencesTag->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conferencesTag->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Conferences Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Conferences'), ['controller' => 'Conferences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conference'), ['controller' => 'Conferences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="conferencesTags form large-9 medium-8 columns content">
    <?= $this->Form->create($conferencesTag) ?>
    <fieldset>
        <legend><?= __('Edit Conferences Tag') ?></legend>
        <?php
            echo $this->Form->control('conference_id', ['options' => $conferences, 'empty' => true]);
            echo $this->Form->control('tag_id', ['options' => $tags, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
