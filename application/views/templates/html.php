<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('global/head'); ?>
	<body>
		<?php $this->load->view('global/header'); ?>
		<?php $this->load->view('global/menu'); ?>
		<div role="main">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 main_wrapper">
						<?php echo $body; ?>
					</div>
					<div class="col-lg-4 right_wrapper">
						<div class="search-wrapper">
							<h2 class="block-title"><i class="fa fa-search fa-fw"></i>&nbsp;快速搜索</h2>
							<?php echo form_open( 'main/search' ); ?>
							<label>最高价格</label>
							<?php echo form_dropdown( 'price', $price, '', 'class="form-control"' ); ?><br>
							<label>卧室</label>
							<?php echo form_dropdown( 'bedrooms', $bedrooms, '', 'class="form-control"' ); ?><br>
							<label>地点</label>
							<?php echo form_dropdown( 'suburb_id', $suburbs, '', 'class="form-control"' ); ?><br>
							<?php echo form_submit( 'submit', '搜索', 'class = "btn"' ); ?>
							<?php echo form_close(); ?>							
						</div>
						<hr />
						<div class="main-news-wrapper">
							<h2 class="block-title pull-left"><i class="fa fa-newspaper-o fa-fw"></i>&nbsp;地产新闻</h2>
							<a class="block-more" href="/">更多&nbsp;<i class="fa fa-chevron-right"></i></a>			
							<div class="row">
								<div class="col-lg-12">
									<a class="main-news" href="/"><i class="fa fa-bookmark-o fa-fw"></i>&nbsp; 埃及轟炸利比亞境內「伊斯蘭國」目標</a>
								</div>
								<div class="col-lg-12">
									<a class="main-news" href="/"><i class="fa fa-bookmark-o fa-fw"></i>&nbsp; 利比亞伊斯蘭國稱「斬首埃及基督徒</a>
								</div>
								<div class="col-lg-12">
									<a class="main-news" href="/"><i class="fa fa-bookmark-o fa-fw"></i>&nbsp; 人民日報：香港青年驕傲排斥內地優秀學生</a>
								</div>
								<div class="col-lg-12">
									<a class="main-news" href="/"><i class="fa fa-bookmark-o fa-fw"></i>&nbsp; 丹麥警方以槍擊案協從罪指控兩男子</a>
								</div>
								<div class="col-lg-12">
									<a class="main-news" href="/"><i class="fa fa-bookmark-o fa-fw"></i>&nbsp; 周永康：港大學生會退出學聯是一個打擊</a>
								</div>
								<div class="col-lg-12">
									<a class="main-news" href="/"><i class="fa fa-bookmark-o fa-fw"></i>&nbsp; 英媒：中國供阿根廷戰機「威脅福克蘭群島</a>
								</div>
								<div class="col-lg-12">
									<a class="main-news" href="/"><i class="fa fa-bookmark-o fa-fw"></i>&nbsp; 新加坡：總理李顯龍癌細胞切除手術成功</a>
								</div>
								<div class="col-lg-12">
									<a class="main-news" href="/"><i class="fa fa-bookmark-o fa-fw"></i>&nbsp; 觀察：為什麼丹麥人對襲擊有所防備？</a>
								</div>
								<div class="col-lg-12">
									<a class="main-news" href="/"><i class="fa fa-bookmark-o fa-fw"></i>&nbsp; 埃及轟炸利比亞境內「伊斯蘭國」目標</a>
								</div>
								<div class="col-lg-12">
									<a class="main-news" href="/"><i class="fa fa-bookmark-o fa-fw"></i>&nbsp; 利比亞伊斯蘭國稱「斬首埃及基督徒</a>
								</div>
								<div class="col-lg-12">
									<a class="main-news" href="/"><i class="fa fa-bookmark-o fa-fw"></i>&nbsp; 人民日報：香港青年驕傲排斥內地優秀學生</a>
								</div>
								<div class="col-lg-12">
									<a class="main-news" href="/"><i class="fa fa-bookmark-o fa-fw"></i>&nbsp; 丹麥警方以槍擊案協從罪指控兩男子</a>
								</div>
								<div class="col-lg-12">
									<a class="main-news" href="/"><i class="fa fa-bookmark-o fa-fw"></i>&nbsp; 周永康：港大學生會退出學聯是一個打擊</a>
								</div>
								<div class="col-lg-12">
									<a class="main-news" href="/"><i class="fa fa-bookmark-o fa-fw"></i>&nbsp; 英媒：中國供阿根廷戰機「威脅福克蘭群島</a>
								</div>
								<div class="col-lg-12">
									<a class="main-news" href="/"><i class="fa fa-bookmark-o fa-fw"></i>&nbsp; 新加坡：總理李顯龍癌細胞切除手術成功</a>
								</div>
								<div class="col-lg-12">
									<a class="main-news" href="/"><i class="fa fa-bookmark-o fa-fw"></i>&nbsp; 觀察：為什麼丹麥人對襲擊有所防備？</a>
								</div>					
							</div>
						</div>						
					</div>					
				</div>
			</div>
		</div>
		<?php $this->load->view('global/bottom'); ?>
		<?php $this->load->view('global/footer'); ?>
	</body>
</html>