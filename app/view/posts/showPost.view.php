<?php
$title="Подробно";
require_once __DIR__ . "/../parts/header.php";
?>
<h2 class="offset-3">Пост...</h2>
<div class="card mt-3 col-8 offset-2">
    <img src="<?= $post->photo ?'../../img/'.$post->photo : '' ?>"
    class="card-img-top img-big" alt="Фото">

    <div class="card-body">
        <h5 class="card-title"><?= $post->title ?></h5>
        <p class="card-text"><?=date_format(new DateTime($post->datePublication), 'd.m.Y')?></p>
        <a class="btn btn-danger" href='../../db/posts/deletePost.php?id=<?= $post->id;?>'>
            Удалить
        </a>
        <a class="btn btn-info" href='../../db/posts/updatePost.php?id=<?= $post->id; ?>'>
            Изменить
        </a>
        <a class="btn btn-outline-info" href="../../db/posts/index.php">
            Назад
        </a>
    </div>
</div>

<?php require_once __DIR__ . "/../parts/footer.php" ?>


