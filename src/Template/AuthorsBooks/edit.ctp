<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuthorsBook $authorsBook
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $authorsBook->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $authorsBook->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Authors Books'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Authors'), ['controller' => 'Authors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Authors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="authorsBooks form large-9 medium-8 columns content">
    <?= $this->Form->create($authorsBook) ?>
    <fieldset>
        <legend><?= __('Edit Authors Book') ?></legend>
        <?php
            echo $this->Form->control('author_id', ['options' => $authors, 'empty' => true]);
            echo $this->Form->control('book_id', ['options' => $books, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
