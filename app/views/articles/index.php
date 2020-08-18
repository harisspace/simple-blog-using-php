<div class="wrapper">
    <div class="search">
        <input type="text" id="search" placeholder="Cari artikel" autocomplete="off">
        <i class="fas fa-search search-icon"></i>
    </div>
</div>

<div class="wrapper">
    <main class="article-container">
        <h2 class="title"><?= $data["title"] ?></h2>
        <p class="article-time">Penulis <?= $data["admin_name"] ?> <?= $data["article_time"] ?></p>
        <img src="<?= BASE_URL; ?>/img/<?= $data["image"] ?>" alt="image" class="article-img">
        <div class="article-paragh">
            <?= htmlspecialchars_decode($data["text"]) ?>
        </div>
    </main>
</div>