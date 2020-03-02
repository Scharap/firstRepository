<?php require_once  __DIR__."/../parts/header.php";?>
<div>
<a class="col-md-4 btn btn-primary m-3 p-2" href="../../db/posts/insertPost.php">
        Добавить новую запись
    </a>
</div>
<div class="row">
    <?php
    $i=1;
    foreach ($posts as $post): ?>

    <div class="card mt-3 p-2 col-md-4 col-sm-6">
        <img src="<?= $post->photo ? '../../img/'.$post->photo : ''?>"
             class="card-img-top img-small" alt="Фото">
        <div class="card-body">
            <h5 class="card-title"><?= $post->title ?></h5>
            <p class="card-text">
                <?= date_format(new DateTime($post->datePublication), 'd.m.Y')?>
            </p>
            <a class="btn btn-info p-2" style="width:100%;" href='../../db/posts/showPost.php?id=<?= $post->id; ?>'>
                Подробно
            </a>
        </div>
    </div>
    <?php endforeach;?>
</div>
<!--        <table class="table table-striped table-bordered table-hover col-md-12">-->
<!--            <tr class="d-flex">-->
<!--                <th class="col-1 text-center"> #</th>-->
<!--                <th class="col-2 text-center"> Название</th>-->
<!--                <th class="col-3 text-center"> Описание</th>-->
<!--                <th class="col-2 text-center"> Дата публикации</th>-->
<!--                <th class="col-4"></th>-->
<!--            </tr>-->
<!--            --><?php //foreach ($posts as $row):?>
<!--            <tr>-->
<!--                <td class="col-1 text-center"> --><?//=$row->id ?><!--</td>-->
<!--                <td class="col-2"> --><?//=$row->title?><!--</td>-->
<!--                <td class="col-3"> --><?//= nl2br($row->description)?><!--</td>-->
<!--                <td class="col-2 text-center"> --><?//=date_format(new DateTime($row->datePublication), 'd.m.Y' )?><!--</td>-->
<!--                <td class="col-2 text-center">-->
<!--                    <a class="btn btn-danger" href='../../db/posts/deletePost.php?id=--><?//=$row->id;?><!--'>-->
<!--                        Удалить</a>-->
<!--                </td>-->
<!--                <td class="col-2 ">-->
<!--                    <a class="btn btn-info" href='../../db/posts/updatePost.php?id=--><?//=$row->id;?><!--'>Изменить</a>-->
<!--                </td>-->
<!--            </tr>-->
<!--            --><?php //endforeach;?>
<!--        </table>-->

<?php require_once __DIR__."/../parts/footer.php";?>


