<div id="menu">
    <div class="center d-flex align-items-center justify-content-between">
        <?php if($logo) {?>
                <div class="logo d-flex align-items-center">
                    <a href=""><img onerror="this.src='<?=THUMBS?>/176x60x2/assets/images/noimage.png';" src="<?=THUMBS?>/176x60x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>"/></a>
                </div>
            <?php }?>
            <div class="menu-right">
        <ul class="d-flex align-items-center justify-content-start">
  
            <li>
                <a class="transition " href="" title="<?=trangchu?>"><img src="assets/img/icon-home.png" alt="Icon home"></a>
                <?php if(count($homelistmenu)) { ?>
                    <ul>
                        <?php for($i=0;$i<count($homelistmenu); $i++) {?>
                            <li>
                               <a class="transition <?php  if($idl == $homelistmenu[$i]['id'] && $com == $homelistmenu[$i]['type'])  echo 'active'; ?>" title="<?=$homelistmenu[$i]['ten']?> " href="<?=$homelistmenu[$i][$sluglang]?>"><?=$homelistmenu[$i]['ten']?></a>
                            </li>
                        <?php } ?>
                        </ul>
                <?php } ?>

            </li>
                <?php if(count($splistmenu)) { ?>
                        <?php for($i=0;$i<count($splistmenu); $i++) {
                            $spcatmenu = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id from #_product_cat where id_list = ? and hienthi > 0 order by stt,id desc",array($splistmenu[$i]['id'])); ?>
                            <li>
                               <a class="transition <?php  if($idl == $splistmenu[$i]['id'] && $com == $splistmenu[$i]['type'])  echo 'active'; ?>" title="<?=$splistmenu[$i]['ten']?> " href="<?=$splistmenu[$i][$sluglang]?>"><?=$splistmenu[$i]['ten']?></a>
                                <?php if(count($spcatmenu)>0) { ?>
                                    <ul>
                                        <?php for($j=0;$j<count($spcatmenu);$j++) { ?>
                                            <li>
                                               <a class="transition" title="<?=$spcatmenu[$j]['ten']?>" href="<?=$spcatmenu[$j][$sluglang]?>"><?=$spcatmenu[$j]['ten']?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </li>
                        <?php } ?>
                <?php } ?>

                <?php if(count($dvlistmenu)) { ?>
                        <?php for($i=0;$i<count($dvlistmenu); $i++) {
                            $dvcatmenu = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id from #_news_cat where id_list = ? and hienthi > 0 order by stt,id desc",array($dvlistmenu[$i]['id'])); ?>
                            <li>
                               <a class="transition <?php if($idl == $dvlistmenu[$i]['id'] && $com == $dvlistmenu[$i]['type']) echo 'active'; ?><?=($i == count($dvlistmenu) -1) ? "active-last" : "";?> " title="<?=$dvlistmenu[$i]['ten']?>" href="<?=$dvlistmenu[$i][$sluglang]?>"><?=$dvlistmenu[$i]['ten']?></a>
                                <?php if(count($dvcatmenu)>0) { ?>
                                    <ul>
                                        <?php for($j=0;$j<count($dvcatmenu);$j++) { ?>
                                            <li>
                                               <a class="transition" title="<?=$dvcatmenu[$j]['ten']?>" href="<?=$dvcatmenu[$j][$sluglang]?>"><?=$dvcatmenu[$j]['ten']?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </li>
                        <?php } ?>
                <?php } ?>
          <div class="btn-search">
                <a class="search search_open" href="javascript:void(0)"><img src="assets/img/icon-search.png" alt="Icon search"></a>
                <div class="search_box_hide">
                    <div class="box_input_search" data-role="none">
                        <input type="text" id="keyword" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword');"/>
                    </div>
                </div>
            </div>
        </ul>
        </div>
    </div>
</div>
<?php /*
<div class="search w-clear">
            <input type="text" id="keyword" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword');"/>
            <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
        </div>
        <li>
                <a class="transition <?php if($com=='gioi-thieu') echo 'active'; ?>" href="gioi-thieu" title="<?=gioithieu?>"><?=gioithieu?></a>
            </li>
  <li>
                <a class="transition <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="<?=tintuc?>"><?=tintuc?></a>
            </li>
            <li>
                <a class="transition <?php if($com=='tuyen-dung') echo 'active'; ?>" href="tuyen-dung" title="<?=tuyendung?>"><?=tuyendung?></a>
            </li>
            <li>
                <a class="transition <?php if($com=='thu-vien-anh') echo 'active'; ?>" href="thu-vien-anh" title="<?=thuvienanh?>"><?=thuvienanh?></a>
            </li>
            <li>
                <a class="transition <?php if($com=='video') echo 'active'; ?>" href="video" title="Video">Video</a>
            </li>
            <li>
                <a class="transition <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="<?=lienhe?>"><?=lienhe?></a>
            </li>
<li class="btn-search">
    <a class="search search_open" href="javascript:void(0)"><i class="fa fa-search"></i></a>
    <div class="search_box_hide">
        <div class="box_input_search" data-role="none">
            <input type="text" id="keyword" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword');"/>
        </div>
    </div>
</li>
*/ ?>