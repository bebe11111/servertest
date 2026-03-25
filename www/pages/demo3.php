<main class="mx-auto max-w-7xl px-4">
    <h1 class="text-4xl text-center my-4"><?= $title ?> 3</h1>

    <ul>
        <?php foreach($cars as $car ): ?>
        <li class="car" style="color: <?= $car->hexa ?>"><?= $car->manufacturer ?> <?= $car->model ?></li>
        <?php endforeach; ?>
    </ul>

</main>