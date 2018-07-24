<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conference $conference
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Conference'), ['action' => 'edit', $conference->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Conference'), ['action' => 'delete', $conference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conference->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Conferences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conference'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="conferences view large-9 medium-8 columns content">
    <h3><?= h($conference->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Edit Key') ?></th>
            <td><?= h($conference->edit_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($conference->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Institution') ?></th>
            <td><?= h($conference->institution) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($conference->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($conference->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Meeting Type') ?></th>
            <td><?= h($conference->meeting_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subject Area') ?></th>
            <td><?= h($conference->subject_area) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Homepage') ?></th>
            <td><?= h($conference->homepage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Name') ?></th>
            <td><?= h($conference->contact_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Email') ?></th>
            <td><?= h($conference->contact_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($conference->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($conference->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Date') ?></th>
            <td><?= h($conference->end_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($conference->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($conference->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= h($conference->deleted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($conference->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tags') ?></h4>
        <?php if (!empty($conference->tags)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($conference->tags as $tags): ?>
            <tr>
                <td><?= h($tags->id) ?></td>
                <td><?= h($tags->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
