
<?php if(count($tieuchi)) { ?>
	<div id="benefit">
		<div class="center">
			<div class="owl-benefit owl-carousel">
				<?php foreach ($tieuchi as $key => $value) { ?>
					<div class="benefit-item d-flex align-items-center">
						<img onerror="this.src='<?=THUMBS?>/53x51x2/assets/images/noimage.png';" src="<?=THUMBS?>/53x51x1/<?=UPLOAD_NEWS_L.$value['photo']?>" alt="<?=$value['ten']?>">
						<div class="benefit-desc">
							<h3 class="benefit-name"><?=$value["ten"]?></h3>
							<p class=" benefit-info text-split text-split-2"><?=$value["mota"]?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>
<?php if(count($sanphamnb)) { ?>
	<div id="tour-hot">
		<div class="center">
			<div class="title-main">
				<h2>Tour nổi bật</h2>
				<p><?=$slogan["ten"]?></p>
			</div>
			<div class="paging-product"></div>
		</div>
	</div>
<?php } ?>
<?php if(isset($gioithieu)) { ?>
	<div id="intro">
		<div class="center d-flex ">
			<div class="intro-left">
				<div class="intro-image">
					<img onerror="this.src='<?=THUMBS?>/598x462x2/assets/images/noimage.png';" src="<?=THUMBS?>/598x462x1/<?=UPLOAD_NEWS_L.$menuhome[0]['photo']?>" alt="<?=$menuhome[0]['ten']?>">
				</div>
			</div>
			<div class="intro-right">
				<p>Đôi nét về</p>
				<h3><?=$menuhome[0]["ten"]?></h3>
				<div class="intro-info">
					<?=nl2br($menuhome[0]['mota'])?>
				</div>
				<a href="<?=$menuhome[0][$sluglang]?>" class="btn-intro">Xem thêm</a>
			</div>
		</div>
	</div>
<?php } ?>
<?php if(count($quangcao)) { ?>
    <div class="advertise">
        <div class="owl-carousel owl-theme owl-advertise">
            <?php foreach ($quangcao as $key => $value) {?>
                <div class="advertise-item">
                    <a href="<?=$value['link']?>" target="_blank" title="<?=$value['ten']?>"><img onerror="this.src='<?=THUMBS?>/1366x460x2/assets/images/noimage.png';" src="<?=THUMBS?>/1366x460x1/<?=UPLOAD_PHOTO_L.$value['photo']?>" alt="<?=$value['ten']?>" title="<?=$value['ten']?>"/></a>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
<?php if(count($danhmuc1sanphamnb)) { ?>
	<div id="tour">
		<div class="center">
			<?php foreach ($danhmuc1sanphamnb as $key => $value) { 
				$sanphamnb = $d->rawQuery("select id from #_product where id_list = ? order by stt,id desc",array($value['id']));
				if(count($sanphamnb) > 0){
				?>
				<div class="tour">
					<div class="title-main">
						<h2><?=$value["ten"]?></h2>
						<p><?=$slogan["ten"]?></p>
					</div>
					<div class="paging-product-category paging-product-category-<?=$value['id']?>" data-list="<?=$value['id']?>"></div>
				</div>
			<?php } }?>
		</div>
	</div>
<?php } ?>
<?php if(count($danhmuc1baivietnb)) { ?>
	<div id="service">
		<div class="center">
			<?php foreach ($danhmuc1baivietnb as $key => $value) { 
				$baivietnb = $d->rawQuery("select id from #_news where id_list = ? order by stt,id desc",array($value['id']));
				if(count($baivietnb) > 0){
				?>
				<div class="tour">
					<div class="title-main">
						<h2><?=$value["ten"]?></h2>
						<p><?=$slogan["ten"]?></p>
					</div>
					<div class="paging-news-category paging-news-category-<?=$value['id']?>" data-list="<?=$value['id']?>"></div>
				</div>
			<?php } }?>
		</div>
	</div>
<?php } ?>
<?php if(count($sanphamnb)) { ?>
	<div id="tourist-attraction">
		<div class="center">
			<div class="title-main">
				<h2>Địa điểm du lịch bình chọn</h2>
				<p><?=$slogan["ten"]?></p>
			</div>
			<div class="owl-tourist-attraction owl-carousel">
				<?php foreach ($diadiem as $key => $value) { ?>
					<div class="tourist-attraction-items">
							<div class="tourist-attraction-box">
								<span class="tourist-attraction-image">
									<a class="text-decoration-none scale-img" href="<?=$value[$sluglang]?>">
											<img onerror="this.src='<?=THUMBS?>/202x202x2/assets/images/noimage.png';" src="<?=THUMBS?>/202x202x1/<?=UPLOAD_NEWS_L.$value['photo']?>" alt="<?=$value['ten']?>">
									</a>
									<h3><?=$value["ten"]?></h3>
								</span>
							</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>