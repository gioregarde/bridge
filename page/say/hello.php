<?php if ($response -> hasErrors()) { ?>
    <?php foreach ($response -> getErrors() as $error) { ?>
        <strong class="red"><?php echo $error; ?></strong><br>
        <a href="<?php echo Properties::getUrlRoot(true); ?>/">Back</a>
    <?php } ?>
<?php } else { ?>
    <h1>Hello <?php echo $dto -> getName(); ?></h1>
    <button onclick="addBlueClass(this.previousElementSibling);">Change Color</button>
<?php } ?>