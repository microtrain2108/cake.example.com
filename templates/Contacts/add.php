<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<div class="row">
    <!-- <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Contacts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside> -->
    <div class="column-responsive column-80">
        <div class="contacts form content">
            <?= $this->Form->create($contact) ?>
            <fieldset>
                <legend><?= __('Contact Us') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('message');
                    echo $this->Form->control('address');
                    echo $this->Form->control('zip');
                    echo $this->Form->control('city');
                    echo $this->Form->control('country');
                    echo $this->Form->control('phone');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
