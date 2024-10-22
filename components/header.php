<?php
$links = [
    [
        'name' => 'Github',
        'url' => 'https://github.com/csouza1995',
        'target' => '_blank'
    ],
    [
        'name' => __('Projects'),
        'url' => '#projects',
        'target' => ''
    ],
    [
        'name' => __('Links'),
        'url' => '#links',
        'target' => ''
    ]
];
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
    <h1 class="text-2xl font-bold">
        🚀 Rocket Portfolio
    </h1>

    <nav>
        <ul class="flex items-center justify-between">
            <!-- translate -->
            <li class="px-2">
                <?php if ($language === 'pt-br') : ?>
                    <a href="?lang=en" class="hover:opacity-75">
                        <img src="https://flagsapi.com/US/flat/24.png" alt="Translate to English">
                    </a>
                <?php else : ?>
                    <a href="?lang=pt-br" class="hover:opacity-75">
                        <img src="https://flagsapi.com/BR/flat/24.png" alt="Traduzir para Português">
                    </a>
                <?php endif; ?>
            </li>

            <!-- links -->
            <?php foreach ($links as $link) : ?>
                <li>
                    <a href="<?= $link['url'] ?>" class="p-2 hover:underline" target="<?= $link['target'] ?>">
                        <?= $link['name'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>