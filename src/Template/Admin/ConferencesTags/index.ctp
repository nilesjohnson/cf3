<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferencesTag[]|\Cake\Collection\CollectionInterface $conferencesTags
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Conferences Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conferences'), ['controller' => 'Conferences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conference'), ['controller' => 'Conferences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="conferencesTags index large-9 medium-8 columns content">
    <h3><?= __('Conferences Tags') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('conference_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($conferencesTags as $conferencesTag): ?>
            <tr>
                <td><?= $this->Number->format($conferencesTag->id) ?></td>
                <td><?= $conferencesTag->has('conference') ? $this->Html->link($conferencesTag->conference->title, ['controller' => 'Conferences', 'action' => 'view', $conferencesTag->conference->id]) : '' ?></td>
                <td><?= $conferencesTag->has('tag') ? $this->Html->link($conferencesTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $conferencesTag->tag->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $conferencesTag->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conferencesTag->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conferencesTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferencesTag->id)]) ?>
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
