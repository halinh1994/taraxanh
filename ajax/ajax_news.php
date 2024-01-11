<?php 
include "ajax_config.php";

/* Paginations */
include LIBRARIES."class/class.PaginationsAjax.php";
$pagingAjax = new PaginationsAjax();
$pagingAjax->perpage = (htmlspecialchars($_GET['perpage']) && $_GET['perpage'] > 0) ? htmlspecialchars($_GET['perpage']) : 1;
$eShow = htmlspecialchars($_GET['eShow']);
$idList = (isset($_GET['idList']) && $_GET['idList'] > 0) ? htmlspecialchars($_GET['idList']) : 0;
$p = (isset($_GET['p']) && $_GET['p'] > 0) ? htmlspecialchars($_GET['p']) : 1;
$start = ($p-1) * $pagingAjax->perpage;
$pageLink = "ajax/ajax_news.php?perpage=".$pagingAjax->perpage;
$tempLink = "";
$where = "";

/* Math url */
if($idList)
{
	$tempLink .= "&idList=".$idList;
	$where .= " and id_list = ".$idList;
}
$tempLink .= "&p=";
$pageLink .= $tempLink;

/* Get data */
$sql = "select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id, photo,mota$lang as mota, type from #_news where type='danh-muc-dich-vu' $where and noibat > 0 and hienthi > 0 order by stt,id desc";
$sqlCache = $sql." limit $start, $pagingAjax->perpage";
$items = $cache->getCache($sqlCache,'result',7200);
/* Count all data */
$countItems = count($cache->getCache($sql,'result',7200));

/* Get page result */
$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if($countItems) { ?>
	<div class="w-clear">
		<div class="product-content d-flex flex-wrap">
		<?php foreach ($items as $key => $value) {?>
			<div class="product-items">
				<div class="product-item">
					<div class="product-image">
						<a class="text-decoration-none scale-img" href="<?=$value[$sluglang]?>" title="<?=$value['ten']?>">
						<img onerror="this.src='<?=THUMBS?>/540x540x2/assets/images/noimage.png';" src="<?=THUMBS?>/540x540x1/<?=UPLOAD_NEWS_L.$value['photo']?>" alt="<?=$value['ten']?>"/>
					</a>
					</div>
					<div class="product-desc">
						<h3 class="product-name">
							<a class="text-decoration-none text-split text-split-2" href="<?=$value[$sluglang]?>" title="<?=$value['ten']?>">
							<?=$value['ten']?>
						</a>
						</h3>
						<div class="text-split"><?=nl2br($value['mota'])?></div>
					</div>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
	<div class="pagination-ajax mgt-25"><?=$pagingItems?></div>
	<?php } ?>