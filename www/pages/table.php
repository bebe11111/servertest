<main class="mx-auto max-w-7xl px-4">
    <h1 class="text-4xl text-center my-4"><?= $title ?> - Table</h1>

    <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-sm">
        <table class="w-full border-collapse text-sm">
            <thead class="bg-gray-100 text-left text-gray-700">
                <tr>
                    <?php foreach(["ID","Gyártó","Típus","Fogyasztás","Szín","Kép"] as $th) : ?>
                        <th class="px-4 py-3 text-bold"><?= $th ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                <?php foreach ($cars as $car): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">
                            #<?= $car->id ?>
                        </td>

                        <td class="px-4 py-3">
                            <?= $car->manufacturer ?>
                        </td>

                        <td class="px-4 py-3">
                            <?= $car->model ?>
                        </td>

                        <td class="px-4 py-3 whitespace-nowrap">
                            <?= $car->consumption ?> liter/100km
                        </td>

                        <td class="px-4 py-3 font-medium"
                            style="color: <?= $car->hexa ?>;">
                            <?= $car->color ?>
                        </td>

                        <td class="px-4 py-3">
                            <img
                                src="<?= mb_strtolower($car->image) ?>"
                                alt="<?= $car->manufacturer ?> <?= $car->model ?>"
                                class="h-20 w-auto rounded border border-gray-200 object-cover"
                            >
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
