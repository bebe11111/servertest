<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$page = "demo1";
if(!empty($_GET["page"]))
{
    $page = $_GET["page"];
    if(!in_array($page,["demo1", "demo2", "demo3", "grid", "table"]))
    {
        $page = 404;
    }
}

// Menü

$menuItems = [
    [
        "text" => "Főoldal",
        "url" => "index.php",
        "active" => $page == "demo1"
    ],
    [
        "text" => "Táblázat",
        "url" => "index.php?page=table",
        "active" => $page == "table"
    ],
    [
        "text" => "Rács",
        "url" => "index.php?page=grid",
        "active" => $page == "grid"
    ],
];

require("data.php");

if("table" == $page)
{
    /**
     * @var array $cars
     */
    usort($cars,fn($a,$b) => ($b->consumption <=> $a->consumption) * -1);
}
if(404 == $page)
{
    header("HTTP/1.0 404 Not Found");
}

$title = "Cars";
$backgroundColor = "lightblue";

ob_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        body {
            background-color: <?= $backgroundColor ?>;
        }
        .car {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <?php include("components/menu.php"); ?>
    
    <?php
    if("demo1" == $page) {
        include("pages/demo1.php") ;
    }
    else if("grid" == $page)
    {
        include("pages/grid.php");
    }
    else if("table" == $page)
    {
        include("pages/table.php");
    }
    else if("404" == $page){
        include("pages/404.php");
    }
    ?>
    
</body>
</html>
<?php
ob_end_flush();