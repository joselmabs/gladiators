<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuthorsBook $authorsBook
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Authors Book'), ['action' => 'edit', $authorsBook->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Authors Book'), ['action' => 'delete', $authorsBook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authorsBook->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Authors Books'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Authors Book'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Authors'), ['controller' => 'Authors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Authors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="authorsBooks view large-9 medium-8 columns content">
    <h3><?= h($authorsBook->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Author') ?></th>
            <td><?= $authorsBook->has('author') ? $this->Html->link($authorsBook->author->id, ['controller' => 'Authors', 'action' => 'view', $authorsBook->author->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Book') ?></th>
            <td><?= $authorsBook->has('book') ? $this->Html->link($authorsBook->book->id, ['controller' => 'Books', 'action' => 'view', $authorsBook->book->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($authorsBook->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($authorsBook->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($authorsBook->modified) ?></td>
        </tr>
    </table>
</div>
