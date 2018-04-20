<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AutoresLivro $autoresLivro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Autores Livro'), ['action' => 'edit', $autoresLivro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Autores Livro'), ['action' => 'delete', $autoresLivro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $autoresLivro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Autores Livros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Autores Livro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Autores'), ['controller' => 'Autores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Autore'), ['controller' => 'Autores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="autoresLivros view large-9 medium-8 columns content">
    <h3><?= h($autoresLivro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Autore') ?></th>
            <td><?= $autoresLivro->has('autore') ? $this->Html->link($autoresLivro->autore->id, ['controller' => 'Autores', 'action' => 'view', $autoresLivro->autore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Livro') ?></th>
            <td><?= $autoresLivro->has('livro') ? $this->Html->link($autoresLivro->livro->id, ['controller' => 'Livros', 'action' => 'view', $autoresLivro->livro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($autoresLivro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($autoresLivro->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($autoresLivro->modified) ?></td>
        </tr>
    </table>
</div>
