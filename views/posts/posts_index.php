<?foreach($posts as $post):?>
    <div class="span8">
        <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject']?></a></h1>
        <p><?=$post["post_text"]?></p>
        <div>
            <span class="badge badge-success">Kirja pandud <?=$post["post_created"]?></span>
            <span class="badge badge-success">Kirja pannud <?=$post["username"]?></span>
            <div class="pull-right">
                <?foreach ($tags [$post	['post_id']] as $tag):?>
                    <a href="<?=BASE_URL?>tags/view/<?=$tag?>"><span class = "label" style="background-color: #5bc0de"><?=$tag?></span></a>
                <?endforeach?>
               <!-- <span class="label">üks</span> <span class="label">kaks</span> --->
            </div>
        </div>
        <hr>
    </div>
<?endforeach?>