<div class="wrapper">
    <main class="article-container">
        <h3>Edit Article</h3>

        <form action="<?= BASE_URL; ?>/manage_article/edit/<?= $data["id"]?>" method="POST">
            <div class="title-container">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Write title here" value="<?= $data["title"]; ?>">
            </div>

            <div class="body-container">
                <label for="">Body</label>
                <textarea id="editor" name="editor">
                    <?= $data["text"]; ?>
                </textarea>
            </div>

            <div class="title-container">
                <label for="thumb">Thumb</label>
                <textarea name="thumb" id="thumb" placeholder="Write thumb here">
                    <?= $data["thumbs"]; ?>
                </textarea>
            </div>

            <div class="topics">
                <label for="topic">Topics</label>
                <select name="topic" id="topic">
                    <option value="productivity">Productivity</option>
                    <option value="experience">Experience</option>
                </select>
            </div>

            <div class="uploud-image">
                <label for="image">Uploud-image</label>
                <input type="text" name="image" id="image" value="<?= $data["image"]; ?>">
            </div>

            <input type="submit" value="Publish" name="publish" id="publish">
        </form>
    </main>
</div>