<nav class="bg-slate-700">
    <div class="mx-auto max-w-7xl px-4">
        <div class="flex h-16 items-center justify-between">


            <a href="index.php" class="text-xl font-bold text-white">
                Autók
            </a>


            <button class="md:hidden text-slate-100 hover:text-white"
                onclick="document.getElementById('nav-menu').classList.toggle('hidden')">
                ☰
            </button>


            <ul id="nav-menu" class="hidden md:flex md:items-center md:space-x-2
                       absolute md:static top-16 left-0 w-full md:w-auto
                       bg-slate-800 md:bg-transparent
                       px-4 md:px-0 py-3 md:py-0">
                <?php
                /**
                * @var array $menuItems
                */
                ?>
                <?php foreach ($menuItems as $menu): ?>
                    <li>
                        <a href="<?= $menu["url"] ?>" class="block py-2 px-2 text-sm font-medium transition
                        <?= ($menu["active"])
                            ? "text-white md:border-b-2 md:border-slate-300"
                            : "text-slate-100 hover:text-white" ?>">
                            <?= $menu["text"] ?>
                        </a>
                    </li>
                <?php endforeach; ?>




            </ul>

        </div>
    </div>
</nav>