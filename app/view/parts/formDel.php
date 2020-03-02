<form action="" method="POST">
    <div class="form-group mt-5">
        <label for="post_date">Дата публикации
            <?= $post->datePublication ?
                date_format(new DateTime($posts->datePublication), 'd.m.Y'): date('d.m.Y')
            ?></label>
    </div>
    <div class="form-group mt-5">
        <label for="title" class="mb-3">Название:</label>
        <input type="text" class="form-control" id="title" name="title" required value="<?= $post->title ?? ''?>" disabled="disabled">
    </div>
    <div class="form-group">
        <label for="description" class="mb-3">Введите текст:</label>
        <textarea class="form-control" id="description" name="description" rows="10" cols="50" required disabled="disabled">
                <?= trim($post->description ?? ''," \t\n\r\0\x0B")?>
            </textarea>
    </div>
    <button type="submit" name="btnDel" class="btn btn-primary btn-danger">Удалить пост</button>
    <button type="submit" name="btnBack" class="btn btn-primary">Назад</button>
</form>