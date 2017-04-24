<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bien Dato'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bienes'), ['controller' => 'Bienes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Biene'), ['controller' => 'Bienes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Datos'), ['controller' => 'Datos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dato'), ['controller' => 'Datos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bienDatos index large-9 medium-8 columns content">
    <h3><?= __('Bien Datos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bien_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dato_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bienDatos as $bienDato): ?>
            <tr>
                <td><?= $this->Number->format($bienDato->id) ?></td>
                <td><?= $bienDato->has('biene') ? $this->Html->link($bienDato->biene->id, ['controller' => 'Bienes', 'action' => 'view', $bienDato->biene->id]) : '' ?></td>
                <td><?= $bienDato->has('dato') ? $this->Html->link($bienDato->dato->id, ['controller' => 'Datos', 'action' => 'view', $bienDato->dato->id]) : '' ?></td>
                <td><?= h($bienDato->descripcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bienDato->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bienDato->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bienDato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bienDato->id)]) ?>
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
