<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Retour à la crise'), ['controller' => 'Crisis', 'action' => 'view', $crisis_id]) ?></li>
    </ul>
</nav>
<div class="infos form large-9 medium-8 columns content">
    <?= $this->Form->create($info) ?>
    <fieldset>
        <legend><?= __('Ajouter une information') ?></legend>
        <?php
            echo $this->Form->input('title', ['label' => 'Titre']);
            echo $this->Form->input('body', ['label' => 'Corps du texte']);
            echo "<br />";
            echo $this->Form->input('type', ['label' => 'Type']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
