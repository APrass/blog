<?php
/**
 * Created by PhpStorm.
 * User: Aya
 * Date: 27.03.14
 * Time: 8:50
 */



<div class="list-group">
    <?foreach ($tags as $tag):?>
        <a href="<?=BASE_URL?>tags/view/<?=$tag['tag_name']?>" class="list-group-item">
            <?=$tag['tag_name']?>
        </a>
    <?endforeach?>
</div>