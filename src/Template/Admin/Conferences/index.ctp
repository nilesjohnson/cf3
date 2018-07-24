<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conference[]|\Cake\Collection\CollectionInterface $conferences
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Conference'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="conferences index large-9 medium-8 columns content">
    <h3><?= __('Conferences') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edit_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('institution') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('meeting_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subject_area') ?></th>
                <th scope="col"><?= $this->Paginator->sort('homepage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($conferences as $conference): ?>
            <tr>
                <td><?= $this->Number->format($conference->id) ?></td>
                <td><?= h($conference->edit_key) ?></td>
                <td><?= h($conference->title) ?></td>
                <td><?= h($conference->start_date) ?></td>
                <td><?= h($conference->end_date) ?></td>
                <td><?= h($conference->institution) ?></td>
                <td><?= h($conference->city) ?></td>
                <td><?= h($conference->country) ?></td>
                <td><?= h($conference->meeting_type) ?></td>
                <td><?= h($conference->subject_area) ?></td>
                <td><?= h($conference->homepage) ?></td>
                <td><?= h($conference->contact_name) ?></td>
                <td><?= h($conference->contact_email) ?></td>
                <td><?= h($conference->created) ?></td>
                <td><?= h($conference->modified) ?></td>
                <td><?= h($conference->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $conference->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conference->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conference->id)]) ?>
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
