<div class="wrapper">
    <div class="search">
        <input type="text" id="search" placeholder="Cari artikel" autocomplete="off">
        <i class="fas fa-search search-icon"></i>
    </div>
</div>

<div class="wrapper">
    <main>
        <h3>Experience</h3>
        <div class="item-container">

            <?php foreach ($data as $article) : ?>
                <a href="<?= BASE_URL; ?>/article/<?= $article["id"] ?>" class="item">
                    <img src="<?= BASE_URL; ?>/img/<?= $article["image"] ?>" alt="img">
                    <h4><?= $article["title"] ?></h4>
                    <p class="identity">oleh <?= $article["admin_name"] ?> <?= $article["article_time"] ?></p>
                    <p class="paragraph"><?= htmlspecialchars_decode($article["thumbs"]) ?></p>
                </a>
            <?php endforeach; ?>

        </div>
    </main>
</div>