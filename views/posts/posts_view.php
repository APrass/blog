
    <div class="span8">
        <h1><?=$post["post_subject"]?></h1>
        <p><?=$post["post_text"]?></p>
        <div>
            <span class="badge badge-success">Kirja pandud <?=$post["post_created"]?></span>
            <span class="badge badge-success">Kirja pannud <?=$post["username"]?></span>
            <div class="pull-right">
                <?foreach ($tags as $tag):?>
                    <a href="<?=BASE_URL?>tags/view/<?=$tag['tag_name']?>"><span class = "label" style="background-color: #5bc0de"><?=$tag['tag_name']?></span></a>
                <?endforeach?>
                <!-- <span class="label">üks</span> <span class="label">kaks</span> --->
            </div>
        </div>
        <hr>
    </div>
