<div class="title-main">
    <h1><?=(@$title_cat!='')?$title_cat:@$title_crumb?></h1>
    <p><?=$slogan['ten']?></p>
</div>
<div class="w-clear">
    <?php if(count($news)>0) { ?>
        <div class="product-content d-flex flex-wrap">
        <?php foreach ($news as $key => $value) {?>
            <div class="product-items">
                <div class="product-item">
                    <div class="product-image">
                        <a class="text-decoration-none scale-img" href="<?=$value[$sluglang]?>" title="<?=$value['ten']?>">
                        <img onerror="this.src='<?=THUMBS?>/540x540x2/assets/images/noimage.png';" src="<?=THUMBS?>/540x540x1/<?=UPLOAD_NEWS_L.$value['photo']?>" alt="<?=$value['ten']?>"/>
                    </a>
                    </div>
                    <div class="product-desc">
                        <h3 class="product-name">
                            <a class="text-decoration-none  text-split-2" href="<?=$value[$sluglang]?>" title="<?=$value['ten']?>">
                            <?=$value['ten']?>
                        </a>
                        </h3>
                        <div class="text-split">
                            <?=nl2br($value["mota"])?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    <?php } else { ?>
        <div class="alert alert-danger" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>

<?php /* text-split
<?php for($i=0,$count=count($news); $i<$count; $i++) { ?>
            <div class="box-news w-clear">
                <div class="pic-news">
                    <a class="text-decoration-none scale-img" href="<?=$news[$i][$sluglang]?>" title="<?=$news[$i]['ten']?>">
                        <img onerror="this.src='<?=THUMBS?>/480x320x2/assets/images/noimage.png';" src="<?=THUMBS?>/480x320x1/<?=UPLOAD_NEWS_L.$news[$i]['photo']?>" alt="<?=$news[$i]['ten']?>">
                    </a>
                </div>
                <h3 class="name-news">
                    <a class="text-decoration-none scale-img" href="<?=$news[$i][$sluglang]?>" title="<?=$news[$i]['ten']?>">
                        <?=$news[$i]['ten']?>
                    </a>
                </h3>
                <div class="time-news"><?=ngaydang?>: <?=date("d/m/Y h:i A",$news[$i]['ngaytao'])?></div>
                <p class="desc-news text-split"><?=$news[$i]['mota']?></p>
            </div>
        <?php } ?>

*/ ?>