<main class="mx-auto max-w-7xl px-4">
    <h1 class="text-4xl text-center my-4"><?= $title ?> 1</h1>

    <?php
        echo "<ul>";
        foreach($cars as $car )
        {
            echo "<li class=\"car\" style=\"color: $car->hexa\">$car->manufacturer $car->model</li>";
        }
        echo "</ul>";
    ?>
    
</main>