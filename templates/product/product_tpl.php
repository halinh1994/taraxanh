<div class="title-main">
    <h1><?=(@$title_cat!='')?$title_cat:@$title_crumb?></h1>
    <p><?=$slogan['ten']?></p>
</div>
<div class="w-clear">
    <?php if(isset($product) && count($product) > 0) { ?>
        <div class="product-content d-flex flex-wrap">
        <?php foreach ($product as $key => $value) {?>
            <div class="product-items">
                <div class="product-item">
                    <div class="product-image">
                        <a class="text-decoration-none scale-img" href="<?=$value[$sluglang]?>" title="<?=$value['ten']?>">
                        <img onerror="this.src='<?=THUMBS?>/540x540x2/assets/images/noimage.png';" src="<?=THUMBS?>/540x540x1/<?=UPLOAD_PRODUCT_L.$value['photo']?>" alt="<?=$value['ten']?>"/>
                    </a>
                    </div>
                    <div class="product-desc">
                        <h3 class="product-name">
                            <a class="text-decoration-none text-split text-split-2" href="<?=$value[$sluglang]?>" title="<?=$value['ten']?>">
                            <?=$value['ten']?>
                        </a>
                        </h3>
                        <p class="product-start"><span>Khởi hành:</span><?=($value["khoikhanh"]) ? value["khoikhanh"] : "Theo yêu cầu" ?></p>
                        <p class="product-time"><span>Thời gian:</span><?=($value["thoigian"]) ? value["thoigian"] : "Liên hệ" ?></p>
                        <p class="product-price">
                            <span>Giá: </span>
                            <?php if($value['gia'] && $value['giamoi']) { ?>
                            <span class="price-new"><?=$func->format_money($value['giamoi'])?></span>
                            <span class="price-old del"><?=$func->format_money($value['gia'])?></span>
                            <?php } else { ?>
                                <span class="price-new"><?=($value['gia']) ? $func->format_money($value['gia']) : lienhe?></span>
                            <?php } ?>
                        </p>
                        <a href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline'])?>" class="product-contact"><img src="assets/img/bg-btnsanpham.png" alt="Btn sản phẩm">Gọi ngay</a>
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
    <div class="pagination-home mgt-25"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>