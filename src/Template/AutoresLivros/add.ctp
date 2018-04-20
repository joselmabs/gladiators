<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AutoresLivro $autoresLivro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Autores Livros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Autores'), ['controller' => 'Autores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Autore'), ['controller' => 'Autores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="autoresLivros form large-9 medium-8 columns content">
    <?= $this->Form->create($autoresLivro) ?>
    <fieldset>
        <legend><?= __('Add Autores Livro') ?></legend>
        <?php
            echo $this->Form->control('autor_id', ['options' => $autores, 'empty' => true]);
            echo $this->Form->control('livro_id', ['options' => $livros, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
