<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group mt-5">
        <label for="post_date">Дата публикации
            <?= $post->datePublication ?
                date_format(new DateTime($posts->datePublication), 'd.m.Y'): date('d.m.Y')
            ?></label>
    </div>
    <div class="form-group mt-5">
        <label for="title" class="mb-3">Название:</label>
        <input type="text" class="form-control" id="title" name="title" required value="<?= $post->title ?? ''?>">
    </div>
    <div class="form-group">
        <label for="description" class="mb-3">Введите текст:</label>
        <textarea class="form-control" id="description" name="description" rows="10" cols="50" required>
                <?= trim($post->description ?? '')?>
            </textarea>
    </div>
    <div class="form-group">
        <input type="file" name="photo" value="Загрузить файл..." class="mt-3">
    </div>
    <div class="row mt-3">
        <button type="submit" name="btnPost" class="btn btn-outline-primary ml-3">
            <?= $btnText?>
        </button>
        <a href="../../db/posts/index.php" class="btn btn-outline-info ml-3">
            Назад
        </a>
    </div>
    <div class="form-group">
        <img src="<?= $post->photo ? '../../img/'.$post->photo : '' ?>" alt="" class="img">
    </div>
<!--    <button type="submit" name="btnPost" class="btn btn-primary">Сохранить пост</button>-->
</form>
