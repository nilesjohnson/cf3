<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Conferences'), ['controller' => 'Conferences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conference'), ['controller' => 'Conferences', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tags view large-9 medium-8 columns content">
    <h3><?= h($tag->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($tag->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tag->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Conferences') ?></h4>
        <?php if (!empty($tag->conferences)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Edit Key') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Start Date') ?></th>
                <th scope="col"><?= __('End Date') ?></th>
                <th scope="col"><?= __('Institution') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Country') ?></th>
                <th scope="col"><?= __('Meeting Type') ?></th>
                <th scope="col"><?= __('Subject Area') ?></th>
                <th scope="col"><?= __('Homepage') ?></th>
                <th scope="col"><?= __('Contact Name') ?></th>
                <th scope="col"><?= __('Contact Email') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->conferences as $conferences): ?>
            <tr>
                <td><?= h($conferences->id) ?></td>
                <td><?= h($conferences->edit_key) ?></td>
                <td><?= h($conferences->title) ?></td>
                <td><?= h($conferences->start_date) ?></td>
                <td><?= h($conferences->end_date) ?></td>
                <td><?= h($conferences->institution) ?></td>
                <td><?= h($conferences->city) ?></td>
                <td><?= h($conferences->country) ?></td>
                <td><?= h($conferences->meeting_type) ?></td>
                <td><?= h($conferences->subject_area) ?></td>
                <td><?= h($conferences->homepage) ?></td>
                <td><?= h($conferences->contact_name) ?></td>
                <td><?= h($conferences->contact_email) ?></td>
                <td><?= h($conferences->description) ?></td>
                <td><?= h($conferences->created) ?></td>
                <td><?= h($conferences->modified) ?></td>
                <td><?= h($conferences->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Conferences', 'action' => 'view', $conferences->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Conferences', 'action' => 'edit', $conferences->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Conferences', 'action' => 'delete', $conferences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferences->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
