<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferencesTag $conferencesTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Conferences Tag'), ['action' => 'edit', $conferencesTag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Conferences Tag'), ['action' => 'delete', $conferencesTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferencesTag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Conferences Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conferences Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Conferences'), ['controller' => 'Conferences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conference'), ['controller' => 'Conferences', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="conferencesTags view large-9 medium-8 columns content">
    <h3><?= h($conferencesTag->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Conference') ?></th>
            <td><?= $conferencesTag->has('conference') ? $this->Html->link($conferencesTag->conference->title, ['controller' => 'Conferences', 'action' => 'view', $conferencesTag->conference->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $conferencesTag->has('tag') ? $this->Html->link($conferencesTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $conferencesTag->tag->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($conferencesTag->id) ?></td>
        </tr>
    </table>
</div>
