<!-- New Houses -->
<div class="row">
	<div class="new-house-wrapper">
		<div class="col-lg-12">
			<div class="row">
				<h2 class="block-title col-lg-10"><i class="fa fa-home fa-fw"></i>&nbsp;最新房子</h2>
				<a class="block-more col-lg-2" href="/">更多&nbsp;<i class="fa fa-chevron-right"></i></a>
				<?php foreach ( $properties as $p ): ?>
				<?php if ( $p === reset( $properties ) ): ?>
				<div class="col-lg-8">
					<div class="main-new-house first">
						<?php else: ?>
						<div class="col-lg-4">
							<div class="main-new-house">
								<?php endif; ?>
								<div class="row">
									<div class="col-lg-12">
										<div class="image">
											<img src="/assets/images/400x400.png" alt="image desc" />
										</div>
										<div class="price">
											澳币 $<?php print number_format( $p->price ); ?>
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
										<div class="more pull-right">
											<a class="btn" href="/property/get_result/<?php print $p->id; ?>">
												<i class="fa fa-search fa-fw"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
		<hr />
		<!-- Hot Search -->
		<div class="hot-search-wrapper">
			<div class="row">
				<h2 class="block-title col-lg-10"><i class="fa fa-fire fa-fw"></i>&nbsp;热门搜索</h2>
				<a class="block-more col-lg-2" href="/">更多&nbsp;<i class="fa fa-chevron-right"></i></a>			
				<div class="col-lg-12">				
					<div class="row">
						<div class="col-lg-2">首都堪培拉</div>
						<div class="col-lg-10">
							<ul class="main-suburbs">
								<li><a class="main-suburb" href="/">贝尔科</a></li>
								<li><a class="main-suburb" href="/">甘加林</a></li>
								<li><a class="main-suburb" href="/">邦纳</a></li>
								<li><a class="main-suburb" href="/">雅涛</a></li>
								<li><a class="main-suburb" href="/">凯西</a></li>
								<li><a class="main-suburb" href="/">克雷斯</a></li>
								<li><a class="main-suburb" href="/">弗勒</a></li>
								<li><a class="main-suburb" href="/">富兰克林</a></li>
								<li><a class="main-suburb" href="/">哈考特山</a></li>
								<li><a class="main-suburb" href="/">哈里森</a></li>
								<li><a class="main-suburb" href="/">巴顿</a></li>
								<li><a class="main-suburb" href="/">迪肯</a></li>
								<li><a class="main-suburb" href="/">福雷斯特</a></li>
								<li><a class="main-suburb" href="/">红山</a></li>
								<li><a class="main-suburb" href="/">亚拉伦拉</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-2">新南威尔士州</div>
						<div class="col-lg-10">
							<ul class="main-suburbs">
								<li><a class="main-suburb" href="/">悉尼</a></li>
								<li><a class="main-suburb" href="/">伯伍德</a></li>
								<li><a class="main-suburb" href="/">埃平</a></li>
								<li><a class="main-suburb" href="/">查茨伍德</a></li>
								<li><a class="main-suburb" href="/">赫斯特维尔</a></li>
								<li><a class="main-suburb" href="/">城堡山</a></li>
								<li><a class="main-suburb" href="/">卡灵福德</a></li>
								<li><a class="main-suburb" href="/">伊斯特伍德 </a></li>
								<li><a class="main-suburb" href="/">霍恩斯比</a></li>
								<li><a class="main-suburb" href="/">基拉腊</a></li>
								<li><a class="main-suburb" href="/">圣艾夫斯</a></li>
								<li><a class="main-suburb" href="/">宝琴山</a></li>
								<li><a class="main-suburb" href="/">摩士曼自治市</a></li>
								<li><a class="main-suburb" href="/">帕拉玛塔</a></li>
								<li><a class="main-suburb" href="/">沃龙加</a></li>
								<li><a class="main-suburb" href="/">赖德</a></li>
								<li><a class="main-suburb" href="/">平布尔</a></li>
								<li><a class="main-suburb" href="/">莱恩科夫区</a></li>
								<li><a class="main-suburb" href="/">塔勒马拉</a></li>
								<li><a class="main-suburb" href="/">林德菲尔德</a></li>
								<li><a class="main-suburb" href="/">戈登</a></li>
								<li><a class="main-suburb" href="/">西赖德</a></li>
								<li><a class="main-suburb" href="/">戈登</a></li>
								<li><a class="main-suburb" href="/">西赖德</a></li>
								<li><a class="main-suburb" href="/">凯利威尔</a></li>
								<li><a class="main-suburb" href="/">斯特拉斯菲尔德</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>