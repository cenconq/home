<h2 class="block-title"><i class="fa fa-search fa-fw"></i>&nbsp;搜索结果</h2>
<div id="search">
	为您搜索到 <?php echo $total_result; ?> 个房产：
</div>
<div id="pager">
	<?php echo $pagination; ?>
</div>
<div id="search-results">
	<?php foreach ( $properties as $p ): ?>
	<div class="search-result">
		<div class="row">
			<div class="col-lg-12">
				<div class="address">
					<i class="fa fa-map-marker fa-fw"></i>&nbsp;<?php print $p->address . ', ' . $p->post_code; ?>
				</div>				
			</div>
			<div class="col-lg-3">
				<div class="search_result_gallery rsDefault">
				    <img class="rsImg" src="/assets/images/400x400.png" alt="image desc" />
				    <img class="rsImg" src="/assets/images/400x400.png" alt="image desc" />
				    <img class="rsImg" src="/assets/images/400x400.png" alt="image desc" />
				    <img class="rsImg" src="/assets/images/400x400.png" alt="image desc" />
				    <img class="rsImg" src="/assets/images/400x400.png" alt="image desc" />
				    <img class="rsImg" src="/assets/images/400x400.png" alt="image desc" />
				</div>
			</div>
			<div class="col-lg-9">
				<div class="price">
					 澳币 $<?php print number_format( $p->price ); ?>
				</div>
				<div class="title">		
					 <?php print $p->title_cn; ?>
				</div>
				<div class="body">		
					 <?php print mb_substr( $p->body_en, 0, 100 ); ?>
				</div>								
				<div class="bedrooms pull-left">
					<i class="fa fa-bed fa-fw"></i>&nbsp; <?php print $p->bedrooms; ?>
				</div>
				<div class="bathrooms pull-left">
					<i class="fa fa-tty fa-fw fa-flip-vertical"></i>&nbsp; <?php print $p->bathrooms; ?>
				</div>
				<div class="garage pull-left">
					<i class="fa fa-car fa-fw"></i>&nbsp; <?php print $p->garage; ?>
				</div>
				<div class="bookmark pull-right">
					<a class="btn orange" href="#">
						<i class="fa fa-bookmark fa-fw"></i>保存
					</a>
				</div>
				<div class="more pull-right">
					<a class="btn" href="/property/get_result/<?php print $p->id; ?>">
						<i class="fa fa-search fa-fw"></i>了解更多
					</a>
				</div>					
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>
<div id="pager">
	<?php echo $pagination; ?>
</div>