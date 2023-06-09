
<?php foreach ($form->fields() as $field) : ?>

    <div class="formfield__container" data-id="<?= $field->slug() ?>">

        <?php if($field->hasOptions() && $field->type(true) != "select"): ?>
            <fieldset class="formblock__option__container" data-id="<?= $field->slug() ?>">
                
                <legend class="formblock_field__label" for="<?= $field->slug() ?>">

                    <span class="formfield__label__text"><?= $field->label() ?></span>
                    <span class="formfield__label__required" aria-hidden="true"><?= $field->required('asterisk') ?></span>

                </legend>
                
                <?= $field->toHtml() ?>
                
                <?= $form->template('field_error', ['field' => $field]) ?>

            </fieldset>

        <?php else: ?>

            <label id="<?= "label" . $field->id() ?>" class="formblock_field__label" for="<?= $field->slug() ?>">

                <span class="formfield__label__text"><?= $field->label() ?></span>
                <span class="formfield__label__required" aria-hidden="true"><?= $field->required('asterisk') ?></span>

            </label>
            
            <?= $field->toHtml() ?>
            
            <?= $form->template('field_error', ['field' => $field]) ?>

        <?php endif ?>

    </div>
<?php endforeach ?>

