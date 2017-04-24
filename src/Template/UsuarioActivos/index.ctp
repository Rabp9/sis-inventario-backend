<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Usuario Activo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarioActivos index large-9 medium-8 columns content">
    <h3><?= __('Usuario Activos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarioActivos as $usuarioActivo): ?>
            <tr>
                <td><?= $this->Number->format($usuarioActivo->id) ?></td>
                <td><?= $this->Number->format($usuarioActivo->usuario_id) ?></td>
                <td><?= $usuarioActivo->has('estado') ? $this->Html->link($usuarioActivo->estado->id, ['controller' => 'Estados', 'action' => 'view', $usuarioActivo->estado->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usuarioActivo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuarioActivo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuarioActivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarioActivo->id)]) ?>
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
