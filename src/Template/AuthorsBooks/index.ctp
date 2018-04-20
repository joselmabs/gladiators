<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuthorsBook[]|\Cake\Collection\CollectionInterface $authorsBooks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Authors Book'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Authors'), ['controller' => 'Authors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Authors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="authorsBooks index large-9 medium-8 columns content">
    <h3><?= __('Authors Books') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('author_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('book_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($authorsBooks as $authorsBook): ?>
            <tr>
                <td><?= $this->Number->format($authorsBook->id) ?></td>
                <td><?= $authorsBook->has('author') ? $this->Html->link($authorsBook->author->id, ['controller' => 'Authors', 'action' => 'view', $authorsBook->author->id]) : '' ?></td>
                <td><?= $authorsBook->has('book') ? $this->Html->link($authorsBook->book->id, ['controller' => 'Books', 'action' => 'view', $authorsBook->book->id]) : '' ?></td>
                <td><?= h($authorsBook->created) ?></td>
                <td><?= h($authorsBook->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $authorsBook->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $authorsBook->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $authorsBook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authorsBook->id)]) ?>
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
