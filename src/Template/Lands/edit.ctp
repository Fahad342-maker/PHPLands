<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Land $land
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $land->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $land->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lands'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lands form large-9 medium-8 columns content">
    <?= $this->Form->create($land) ?>
    <fieldset>
        <legend><?= __('Edit Land') ?></legend>
        <?php
            echo $this->Form->control('admin_id', ['options' => $admins]);
            echo $this->Form->control('name');
            echo $this->Form->control('location');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>