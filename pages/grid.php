<main class="mx-auto max-w-7xl px-4">
    <h1 class="text-4xl text-center my-4"><?= $title ?> - Table</h1>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        <?php foreach ($cars as $car): ?>
            <div
                class="rounded-xl bg-white  transition:4s p-4 last:mb-4 shadow-lg hover:bg-blue-200 transition delay-150 duration-300">
                <img class="w-full rounded-md border border-blue-200 bg-white p-1" src="<?= mb_strtolower($car->image) ?>"
                    alt="<?= $car->manufacturer ?> <?= $car->model ?>">

                <h2 class="mt-3 text-base font-semibold">
                    #<?= $car->id ?>     <?= $car->manufacturer ?>     <?= $car->model ?>
                </h2>

                <p class="mt-1 text-sm text-gray-700">
                    Fogyasztás: <?= $car->consumption ?> liter/100km
                </p>

                <p class="mt-1 text-sm" style="color: <?= $car->hexa ?>;">
                    Szín: <?= $car->color ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
    </div>

</main>