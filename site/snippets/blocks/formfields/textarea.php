<textarea
    class="formfield__textarea"
    id="<?= $formfield->id() ?>"
    name="<?= $formfield->slug() ?>"
    rows="<?= $formfield->row() ?>"
    placeholder="<?= $formfield->placeholder() ?>"
    data-form="field"
    aria-labelledby="<?= "label" . $formfield->id() ?>"
    <?= $formfield->required('attr') ?>
    <?= $formfield->ariaAttr() ?>
    <?= $formfield->autofill(true) ?>
><?= $formfield->value() ?></textarea>
