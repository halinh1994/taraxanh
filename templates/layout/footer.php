<div id="footer">
    <div class="footer-top">
        <div class="center d-flex flex-wrap align-items-start justify-content-between">
            <div class="footer-1">
                <?php if($logo) {?>
                    <div class="logo d-flex align-items-center">
                        <a href=""><img onerror="this.src='<?=THUMBS?>/262x89x2/assets/images/noimage.png';" src="<?=THUMBS?>/262x89x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>"/></a>
                    </div>
                <?php }?>
                <div class="footer-content"><?=htmlspecialchars_decode($footer['noidung'])?></div>
                <?php if(count($mxh)>0){ ?>
                    <ul class="mxh footer-mxh">
                        <span>Mạng xã hội:</span>
                        <?php for($i=0,$count=count($mxh); $i<$count; $i++) { ?>
                            <li>
                                <a href="<?=$mxh[$i]['link']?>" target="_blank">
                                    <img onerror="this.src='<?=THUMBS?>/46x46x2/assets/images/noimage.png';" src="<?=THUMBS?>/46x46x1/<?=UPLOAD_PHOTO_L.$mxh[$i]['photo']?>" alt="<?=$mxh[$i]['ten']?>">
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
            <div class="footer-2">
                <?php if(isset($chinhsach)){ ?>
                    <h2 class="footer-tit"><?=chinhsach?></h2>
                    <ul class="footer-list">
                        <?php for($i=0,$count=count($chinhsach); $i < $count; $i++) { ?>
                            <li><a class="text-decoration-none" href="<?=$chinhsach[$i][$sluglang]?>" title="<?=$chinhsach[$i]['ten']?>"><?=$chinhsach[$i]['ten']?></a></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
            <div class="footer-3">
                <?php
                        $dvlistmenu1 = $d->rawQuery("select  id from #_news_list where type = ? and menu > 0 and hienthi > 0 order by stt,id desc",array('danh-muc-dich-vu'));
                        $dvcat = $d->rawQuery("select ten$lang as ten ,tenkhongdauvi,tenkhongdauen from #_news_cat where id_list = ?",array($dvlistmenu1[0]["id"]));
                        if(isset($dvcat)){ 
                 ?>
                <h2 class="footer-tit">Dịch vụ</h2>
                        <ul class="footer-list">
                        <?php foreach ($dvcat as $key => $value) {?>
                            <li><a class="text-decoration-none" href="<?=$value[$sluglang]?>" title="<?=$value['ten']?>"><?=$value['ten']?></a></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
            <div class="footer-4">
                <?= $addons->setAddons('fanpage-facebook', 'fanpage-facebook', 10);?>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="center d-flex flex-wrap align-items-center justify-content-center">
            <p class="copyright">© Copyright TARA XANH. All Rights Reserved. Design by <a href="https://nina.vn/" target="_blank">Nina.vn</a></p>
            <ul class="statistic d-flex flex-wrap align-items-center justify-content-center">
                <span>|</span>
                <li><?=Online?>: <?=$online?></li>
                <span>|</span>
                <li><?=tongtruycap?>: <?=$counter['total']?></li>
            </ul>
        </div>
    </div>
    <?php /*
    <div class="footer-map">
        <div class="center">
            <div class="title-map">
                <?php foreach ($chinhanh as $q => $w): ?>
                    <h2 class="click-map <?php if($q==0) echo 'active';?>" data-id='<?=$w['id']?>' ><?=$w['ten']?></h2>
                <?php endforeach ?>
            </div>
        </div>
        <div class="load-map"></div>
    </div>
    */ ?>
    <?php /* if($source=='index'){ 
        <?=$addons->setAddons('footer-map', 'footer-map', 10);?>
    } */ ?>
</div>