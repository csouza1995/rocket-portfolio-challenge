<?php
$links = [
    [
        'name' => 'LinkedIn',
        'url' => 'https://www.linkedin.com/in/mr-carlos-souza/',
        'icon' => 'bx bxl-linkedin'
    ],
    [
        'name' => 'Instagram',
        'url' => 'https://www.instagram.com/carlonzon',
        'icon' => 'bx bxl-instagram'
    ],
    [
        'name' => 'GitHub',
        'url' => 'https://github.com/csouza1995',
        'icon' => 'bx bxl-github'
    ],
    [
        'name' => 'E-mail',
        'url' => 'mailto:carlossouza.work@gmail.com',
        'icon' => 'bx bx-envelope'
    ],
];
?>

<section id="links" class="py-36">
    <div class="py-20 mx-auto max-w-screen-lg text-center">
        <h2 class="text-lg font-bold text-violet-400 font-inconsolata">
            <?= __('Contact') ?>
        </h2>

        <p class="text-2xl font-bold mt-2">
            <?= __('Do you like my work?') ?>
        </p>

        <!-- description -->
        <p class="text-center text-sm mt-3 w-2/3 mx-auto text-gray-300">
            <?= __('Get in touch or follow me on social media!') ?>
        </p>

        <!-- links -->
        <div class="w-1/3 mt-10 grid grid-cols-1 gap-4 mx-auto">
            <?php foreach ($links as $link) : ?>
                <a href="<?= $link['url'] ?>" class="w-full flex items-center justify-between bg-gray-800 hover:bg-gray-700 text-gray-300 p-4 rounded-lg">
                    <div class="flex items-center">
                        <i class="<?= $link['icon'] ?> mr-2 text-2xl"></i>
                        <?= $link['name'] ?>
                    </div>

                    <i class="bx bx-right-arrow-alt text-2xl"></i>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>