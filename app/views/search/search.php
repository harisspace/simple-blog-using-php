
        <div class="item-container">

            <?php foreach ($data["articles"] as $article) : ?>
                <a href="<?= BASE_URL; ?>/article/<?= $article["id"] ?>" class="item">
                    <img src="<?= BASE_URL; ?>/img/<?= $article["image"] ?>" alt="img">
                    <h4><?= $article["title"] ?></h4>
                    <p class="identity">oleh <?= $article["admin_name"] ?> <?= $article["article_time"] ?></p>
                    <p class="paragraph"><?= htmlspecialchars_decode($article["thumbs"]) ?></p>
                </a>
            <?php endforeach; ?>

        </div>
