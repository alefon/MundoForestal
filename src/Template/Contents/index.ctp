<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Content[]|\Cake\Collection\CollectionInterface $contents
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Content'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contents index large-9 medium-8 columns content">
    <h3><?= __('Contents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('IdContent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IdCategory') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contents as $content): ?>
            <tr>
                <td><?= $this->Number->format($content->IdContent) ?></td>
                <td><?= $this->Number->format($content->IdCategory) ?></td>
                <td><?= h($content->Description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $content->IdContent]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $content->IdContent]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $content->IdContent], ['confirm' => __('Are you sure you want to delete # {0}?', $content->IdContent)]) ?>
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
