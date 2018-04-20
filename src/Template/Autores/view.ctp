<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autore $autore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Autore'), ['action' => 'edit', $autore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Autore'), ['action' => 'delete', $autore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $autore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Autores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Autore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="autores view large-9 medium-8 columns content">
    <h3><?= h($autore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($autore->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enciclopedia') ?></th>
            <td><?= h($autore->enciclopedia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($autore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($autore->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($autore->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Livros') ?></h4>
        <?php if (!empty($autore->livros)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Ano') ?></th>
                <th scope="col"><?= __('Tipo') ?></th>
                <th scope="col"><?= __('Autor') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($autore->livros as $livros): ?>
            <tr>
                <td><?= h($livros->id) ?></td>
                <td><?= h($livros->nome) ?></td>
                <td><?= h($livros->ano) ?></td>
                <td><?= h($livros->tipo) ?></td>
                <td><?= h($livros->autor) ?></td>
                <td><?= h($livros->created) ?></td>
                <td><?= h($livros->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Livros', 'action' => 'view', $livros->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Livros', 'action' => 'edit', $livros->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Livros', 'action' => 'delete', $livros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livros->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
