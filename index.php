<?php
    require __DIR__ . '/vendor/autoload.php';

    $whoops = new \Whoops\Run();
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();

    $title = "Lorem Picsum képválasztó";

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $id = ($id && $id >= 1) ? $id : 678;

    $width = filter_input(INPUT_GET, 'width', FILTER_VALIDATE_INT);
    $width = ($width && $width >= 100) ? $width : 400;

    $height = filter_input(INPUT_GET, 'height', FILTER_VALIDATE_INT);
    $height = ($height && $height >= 100) ? $height : 320;

    $blur = filter_input(INPUT_GET, 'blur', FILTER_VALIDATE_INT);
    $blur = ($blur !== false && $blur >= 0 && $blur <= 3) ? $blur : 0;

    $grayscale = isset($_GET['grayscale']);

    $menuColor = $colors[$id] ?? '#fff';

    $query = [];

    if ($blur > 0) {
        $query[] = "blur=$blur";
    }

    if ($grayscale) {
        $query[] = "grayscale";
    }

    $queryString = $query ? '?' . implode('&', $query) : '';

    $imageUrl = "https://picsum.photos/id/$id/$width/$height$queryString";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title><?= $title ?></title>
</head>
<body>
    <main>
        <h1><?= $title ?></h1>

        <div>
            <?php require 'components/form.php'; ?>
        </div>

        <aside>
            <img src="<?= $imageUrl ?>" alt="Lorem Picsum">
        </aside>

    </main>
</body>
</html>