<?php
require __DIR__ . '/../data.php';
?>

<form action="index.php">
    <label for="id">Kép kiválasztása</label>
    <select name="id" id="id">
        <?php foreach ($images as $imageId => $name): ?>
            <option value="<?= $imageId ?>"
                <?= ($imageId == $id) ? 'selected' : '' ?>>
                <?= $name ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="width">Szélesség (px)</label>
    <input type="number" name="width" id="width"
           value="<?= $width ?>" min="100">

    <label for="height">Magasság (px)</label>
    <input type="number" name="height" id="height"
           value="<?= $height ?>" min="100">

    <fieldset>
        <legend>Elmosás mértéke</legend>

        <?php for ($i = 0; $i <= 3; $i++): ?>
            <label>
                <input type="radio" name="blur"
                       value="<?= $i ?>"
                    <?= ($blur == $i) ? 'checked' : '' ?>>
                <?= $i ?>
            </label>
        <?php endfor; ?>
    </fieldset>

    <label>
        <input type="checkbox" name="grayscale"
            <?= $grayscale ? 'checked' : '' ?>>
        Szürkeárnyalatos
    </label>

    <button type="submit">Generálás</button>
</form>