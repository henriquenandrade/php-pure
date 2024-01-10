<?php
$books = [
    [
        'name' => '14 Habitos de devs produtivos',
        'author' => 'Zeno Rocha',
        'releaseYear' => 2020,
        'purchaseUrl' => 'http://zenorocha.com'
    ],
    [
        'name' => 'HTML 5',
        'author' => 'Maujor',
        'releaseYear' => 2014,
        'purchaseUrl' => 'http://maujor.com'
    ],
    [
        'name' => 'Clean Code',
        'author' => 'Robert C. Martin',
        'releaseYear' => 2015,
        'purchaseUrl' => 'http://cleancode.com'
    ]
];

function filter($items, $fn)
{

    $filterItems = [];

    foreach ($items as $item) {
        if ($fn($item)) {
            $filterItems[] = $item;
        }
    }

    return $filterItems;
}

$filterItems = array_filter($books, function ($book) {
    return $book['releaseYear'] >= 2020;
});
?>

<ul>
    <?php foreach ($filterItems as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                Livro: <?= $book['name'] ?> - (<?= $book['author'] ?>)
            </a>
            <br>
            <span>Release Year: <?= $book['releaseYear'] ?></span>
        </li>
    <?php endforeach ?>
</ul>