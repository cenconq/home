<div class="row">
	<div class="col-lg-12">
		<h2 class="block-title pull-left">
			<?php print $property[0]->title_cn; ?>
		</h2>
		<div class="price pull-right">
			澳币 $<?php print number_format( $property[0]->price ); ?> 起售
		</div>
		<div class="address clearfix">
			<?php print $property[0]->address; ?>
			<a href="#"><i class="fa fa-map-marker fa-wa"></i>&nbsp;查看地图</a>
		</div>
		<div class="serial clearfix">
			房源编号： 119102623
		</div>
		<hr />
	</div>
	<div class="col-lg-6">
		<div class="images clearfix">
			<div id="get_result_gallery" class="rsDefault">
				<div>
				    <img class="rsImg" src="http://s3.myfun.com/sha/800x600-resize/1af6f21c4a34bd2b25e8b262895e6bbee104de1af454c5bb608f7656e09ae709/main.jpg" data-rsvideo="http://www.youtube.com/watch?v=HFbHRWwyihE" data-rsw="707" data-rsh="397">
				    <p>厨房设计追求的是功能与形式的完美统一,利用灯光、窗帘</p>
					<span class="rsTmb">厨房</span>
				</div>
				<div>
				    <img class="rsImg" src="http://s4.myfun.com/sha/800x600-resize/adb49d0f485f8ac66eb60b83e20ded2d6511ae54b599c3f16586f85d311fc8ca/image2.jpg" data-rsvideo="http://www.youtube.com/watch?v=HFbHRWwyihE" data-rsw="707" data-rsh="397">
				    <p>卧室设计追求的是功能与形式的完美统一,利用灯光、窗帘</p>
					<span class="rsTmb">卧室</span>
				</div>
				<div>
				    <img class="rsImg" src="http://s2.myfun.com/sha/800x600-resize/da32eab5176e9152863fcb9fe1a92b5bbf129d69a812ea8adfff0076ca7ce17a/image3.jpg" data-rsvideo="http://www.youtube.com/watch?v=HFbHRWwyihE" data-rsw="707" data-rsh="397">
				    <p>卫生间设计追求的是功能与形式的完美统一,利用灯光、窗帘</p>
					<span class="rsTmb">卫生间</span>
				</div>
				<div>
				    <img class="rsImg" src="http://s3.myfun.com/sha/800x600-resize/8d0715ec7ef06fedc270cc9f54c685461f7639c1a04f9e0f20ca8b5281f7383b/image4.jpg" data-rsvideo="http://www.youtube.com/watch?v=HFbHRWwyihE" data-rsw="707" data-rsh="397">
				    <p>客厅设计追求的是功能与形式的完美统一,利用灯光、窗帘</p>
					<span class="rsTmb">客厅</span>
				</div>
				<div>
				    <img class="rsImg" src="http://s3.myfun.com/sha/800x600-resize/dff4281bca5e5da931db3e9e026d14010e901788d48d7c4f0357f8d529a82012/image5.jpg" data-rsvideo="http://www.youtube.com/watch?v=HFbHRWwyihE" data-rsw="707" data-rsh="397">
				    <p>车库设计追求的是功能与形式的完美统一,利用灯光、窗帘</p>
					<span class="rsTmb">车库</span>
				</div>									
				<div>
					<img class="rsImg" src="http://s4.myfun.com/sha/800x600-resize/8753888c7d092b6c6b9a4731ac5cc98bedb8d6da80bf2013fbc89b9747d8a180/image6.jpg" data-rsvideo="http://www.youtube.com/watch?v=HFbHRWwyihE" data-rsw="640" data-rsh="425">
					<p>车库设计追求的是功能与形式的完美统一,利用灯光、窗帘</p>
					<span class="rsTmb">卫浴套间</span>
				</div>
				<div>
				    <div id="map-canvas" class="clearfix" style="height: 600px;"></div>
				    <p>位于邻近Rose Bay North购物村的安静地区，为您提供完美便利的海岸生活。</p>
					<span class="rsTmb"><i class="fa fa-map-marker fa-wa"></i>&nbsp;地图</span>
				</div>				
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="body clearfix">
			<?php print $property[0]->body_cn; ?>
		</div>
		<h3 class="sub-title"><i class="fa fa-info"></i>&nbsp;详细信息</h3>
				<div class="bedrooms">
					物业类型: 住宅
				</div>
				<div class="bedrooms">
					卧室: <?php print $property[0]->bedrooms; ?>
				</div>
				<div class="bathrooms">
					浴室: <?php print $property[0]->bathrooms; ?>
				</div>
				<div class="garage">
					车库: <?php print $property[0]->garage; ?>
				</div>
				<div class="toilet">
					卫生间: 2
				</div>
				<div class="land_size">
					土地面积: 约 <?php print $property[0]->land_size; ?> 平方米
				</div>
				<div class="house_size">
					房屋面积: 约 <?php print $property[0]->house_size; ?> 平方米
				</div>
		<h3 class="sub-title"><i class="fa fa-info"></i>&nbsp;其他信息</h3>
		<h3 class="sub-title"><i class="fa fa-info"></i>&nbsp;地理信息</h3>
		<h3 class="sub-title"><i class="fa fa-info"></i>&nbsp;联络信息</h3>
	</div>
</div>