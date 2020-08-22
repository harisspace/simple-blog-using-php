<!-- main -->
<div class="wrapper">

    <?= Flasher::flash(); ?>

    <main class="article-container manage-account">
        <h3>Manage Article</h3>

        <div class="users">
            <table>
                <tr>
                    <th>Title</th>
                    <th>Writer</th>
                    <th>Created At</th>
                    <th>Delete</th>
                    <th>Edit</th>
                    <th>Status</th>
                </tr>

                <?php foreach ($data as $article) : ?>
                    <tr>
                        <td><?= $article["title"] ?></td>
                        <td><?= $article["admin_name"] ?></td>
                        <td><?= $article["article_time"] ?></td>
                        <td><button type="submit"><a href="<?= BASE_URL; ?>/manage_article/delete/<?= $article["id"] ?>" onclick="return confirm('apakah anda yakin ingin menghapus ini?')">Delete</a></button></td>
                        <td><button type="submit"><a href="<?= BASE_URL; ?>/manage_article/edit/<?= $article["id"]; ?>" type="submit">Edit</a></button></td>
                        <td>
                            <form action="" method="POST">
                                <select name="publish" id="publish">
                                    <option value="publish">Publish</option>
                                    <option value="unpublish">Unpublish</option>
                                </select>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>


            </table>
        </div>

    </main>
</div>