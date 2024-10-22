<?php
require_once 'helpers/tags.php';

$projects = [
    [
        'title' => 'Project 1',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc.',
        'tags' => ['PHP', 'CSS', 'HTML', 'Javascript'],
        'image' => 'https://placehold.co/600x400' // '/assets/img/project-1.png'
    ],
    [
        'title' => 'Project 2',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc.',
        'tags' => ['PHP', 'CSS', 'HTML'],
        'image' => 'https://placehold.co/600x400' // '/assets/img/project-2.png'
    ],
    [
        'title' => 'Project 3',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc.',
        'tags' => ['PHP', 'CSS'],
        'image' => 'https://placehold.co/600x400' // '/assets/img/project-3.png'
    ],
    [
        'title' => 'Project 4',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc.',
        'tags' => ['PHP'],
        'image' => 'https://placehold.co/600x400' // '/assets/img/project-4.png'
    ],
    [
        'title' => 'Project 5',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc.',
        'tags' => ['PHP', 'Javascript'],
        'image' => 'https://placehold.co/600x400' // '/assets/img/project-5.png'
    ],
    [
        'title' => 'Project 6',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc.',
        'tags' => ['PHP', 'HTML'],
        'image' => 'https://placehold.co/600x400' // '/assets/img/project-6.png'
    ],
];

foreach ($projects as $key => $project) {
    $projects[$key]['tags'] = array_map(function ($tag) use ($tags) {
        return [
            'name' => $tag,
            'class' => $tags[$tag]['class'],
            'icon' => $tags[$tag]['icon']
        ];
    }, $project['tags']);
}
?>

<section id="projects" class="py-20 mx-auto max-w-screen-lg text-center">
    <h2 class="text-lg font-bold text-red-400 font-inconsolata">
        <?= __('My Work') ?>
    </h2>

    <p class="text-2xl font-bold mt-2">
        <?= __('See the projects in the spotlight') ?>
    </p>

    <div class="grid grid-cols-2 gap-4 mt-10">
        <?php foreach ($projects as $project) : ?>
            <div class="bg-figma-300 rounded-lg p-3 flex items-center justify-between space-x-5">
                <!-- image -->
                <div class="w-2/5 rounded-lg h-full">
                    <img src="<?= $project['image'] ?>" alt="Photo <?= $project['title'] ?>" class="h-full object-cover rounded-lg">
                </div>

                <!-- content -->
                <div class="w-3/5 text-left">
                    <!-- title -->
                    <h3 class="text-xl font-bold text-gray-100 font-inconsolata">
                        <?= $project['title'] ?>
                    </h3>

                    <!-- description -->
                    <p class="text-gray-300 mt-2">
                        <?= $project['description'] ?>
                    </p>

                    <!-- tags -->
                    <div class="mt-4 mb-1 font-inconsolata">
                        <?php foreach ($project['tags'] as $tag) : ?>
                            <span class="rounded-full text-center text-xs font-bold px-2 py-1 <?= $tag['class'] ?>"><?= $tag['name'] ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>