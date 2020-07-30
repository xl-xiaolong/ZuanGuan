<?php
/**
 * ZuanGuan，一套二次开发的官网主题，目前还没完善
 * 
 * @package ZuanGuan
 * @author Wibus
 * @version 1.1.0
 * @link https://blog.iucky.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>


			<!-- PROMO SECTION -->
			<section class="seo_home_area">
				<div class="home_bubble">
					<div class="bubble b_one"></div>
					<div class="bubble b_two"></div>
					<div class="bubble b_three"></div>
					<div class="bubble b_four"></div>
					<div class="bubble b_five"></div>
					<div class="bubble b_six"></div>
					<div class="triangle b_seven" data-parallax='{"x": 20, "y": 150}'><img src="/usr/themes/ZuanGuan/static/picture/triangle_one.png" alt=""></div>
					<div class="triangle b_eight" data-parallax='{"x": 120, "y": -10}'><img src="/usr/themes/ZuanGuan/static/picture/triangle_two.png" alt=""></div>
					<div class="triangle b_nine"><img src="/usr/themes/ZuanGuan/static/picture/triangle_three.png" alt=""></div>
				</div>
				<div class="banner_top" style="padding-top: 150px !important;">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center seo_banner_content">
							<?php if ($this->options->indexh2): ?>
								<h2 class="wow fadeInUp" data-wow-delay="0.3s"><?php $this->options->indexh2() ?></h2>
							<?php else: ?>
								<h2 class="wow fadeInUp" data-wow-delay="0.3s">请到模版外观设置首页大标题</h2>
							<?php endif; ?>
							<?php if ($this->options->description): ?>
								<p class="wow fadeInUp" data-wow-delay="0.5s">
								<?php $this->options->descrption() ?>
								</p>
							<?php else: ?>
								<p class="wow fadeInUp" data-wow-delay="0.5s">
								请到模版外观设置首页描述
								</p>
							<?php endif; ?>

							
								<?php if ($this->options->b1): ?>
								<a href="<?php $this->options->b1href() ?>" id="demolink" class="seo_btn seo_btn_one btn_hover <?php if (!empty($this->options->b1effect) && in_array('goto1', $this->options->b1effect)): ?>goto<?php endif; ?> <?php if (!empty($this->options->b1effect) && in_array('popup1', $this->options->b1effect)): ?>popup-youtube<?php endif; ?>">
									<i class="fa fa-desktop"></i>
									<?php $this->options->b1() ?></a>
								<?php else: ?>
									<a href="#" id="demolink" class="seo_btn seo_btn_one btn_hover goto">
									<i class="fa fa-desktop"></i>
									请到后台设置此“代号b1按钮”</a>	
								<?php endif; ?>


								<?php if ($this->options->b2): ?>
								<a href="<?php $this->options->b2href() ?>" class="seo_btn seo_btn_two btn_hover  <?php if (!empty($this->options->b2effect) && in_array('goto2', $this->options->b2effect)): ?>goto<?php endif; ?> <?php if (!empty($this->options->b2effect) && in_array('popup2', $this->options->b2effect)): ?>popup-youtube<?php endif; ?> ">
									<i class="fa fa-play"></i>
									<?php $this->options->b2() ?></a>
								<?php else: ?>
									<a href="#" class="seo_btn seo_btn_two btn_hover  popup-youtube">
									<i class="fa fa-play"></i>
									请到后台设置此“代号b2按钮”</a>
									<?php endif; ?>
								
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 offset-md-3 text-center">
								<div class="saas_home_img wow fadeInUp" data-wow-delay="0.8s">
									<img src="/usr/themes/ZuanGuan/static/picture/home-promo-2.png" alt="" style="width:100%;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- CORE MODULES -->
			<section class="prototype_service_info" style="padding: 50px 0px 50px !important;">
				<div class="symbols-pulse active">
					<div class="pulse-1"></div>
					<div class="pulse-2"></div>
					<div class="pulse-3"></div>
					<div class="pulse-4"></div>
					<div class="pulse-x"></div>
				</div>
				<div class="container">
					<div class="seo_sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s">
						<h2>核心领域</h2>
						<p>围绕核心领域拓展我们的圈内足迹，并使开拓完善新的互联网生态，它属于我们，但受益于每个人</p>
					</div>
					<div class="row p_service_info">
						<div class="col-lg-4 col-sm-6">
							<div class="p_service_item pr_70">
								<div class="icon icon_one"><i class="ti-wand"></i></div>
								<h5 class="f_600 f_p t_color3">前端美化</h5>
								<p class="f_400">我们是一群年轻的群体，在时刻渴望学习新的内容，并学以致用</p>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="p_service_item pl_50 pr_20">
								<div class="icon icon_two"><i class="ti-help-alt"></i></div>
								<h5 class="f_600 f_p t_color3">内容建设</h5>
								<p class="f_400">近2年来我们撰写了非常广泛且高质量的原创内容。累计帮助互联网10W+新手答疑</p>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="p_service_item pl_70">
								<div class="icon icon_three"><i class="ti-infinite"></i></div>
								<h5 class="f_600 f_p t_color3">生态拓展</h5>
								<p class="f_400">我们涉足于等多个知名CMS系统，并同步开启生态建设</p>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="p_service_item pr_70">
								<div class="icon icon_four"><i class="ti-user"></i></div>
								<h5 class="f_600 f_p t_color3">用户足迹</h5>
								<p class="f_400">2019年我们服务客户数量达1000+ 新美誉注重用户体验，同时不断完善售后策略</p>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="p_service_item pl_50 pr_20">
								<div class="icon icon_five"><i class="ti-email"></i></div>
								<h5 class="f_600 f_p t_color3">互动交流</h5>
								<p class="f_400">我们始终认为创新绝不是闭门造车，在去年我们与互联网用户对话交流1000余次</p>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="p_service_item pl_70">
								<div class="icon icon_six"><i class="ti-stats-up"></i></div>
								<h5 class="f_600 f_p t_color3">不断成长</h5>
								<p class="f_400">过去一年我们注重体验细节与客户维护，并坚持拓展挖掘目标领域内容</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- LINK TO DETAILS -->
			<section class="seo_service_area sec_pad">
				<div class="container">
					<div class="row seo_service_info">
						<div class="col-lg-12 text-center mt_40">
							  
							<a href="index11.html" class="app_btn btn_hover cus_mb-10">查看所有领域</a>
														<a href="index6.html" class="app_btn btn_hover cus_mb-10">进一步了解</a>
													</div>
					</div>
				</div>
			</section>

			<!-- PREVIEW SCREENS -->
			<section class="startup_fuatures_area">
			<div class="container">
					<div class="sec_title wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
						<h2 class="text-center">来自我们的一些作品</h2>
					</div>
					<div class="tab-content startup_tab_content" id="myTabContent">
						<div class="tab-pane fade active show" id="portal" role="tabpanel" aria-labelledby="market-tab">
							<div class="startup_tab_img">
								<img src="https://a-oss.zmki.cn/2020/20200315-8604f2e93c366.png" alt="time时光相册" style="width: 100%;">
							</div>
						</div>
						<div class="tab-pane fade" id="filter" role="tabpanel" aria-labelledby="app-tab">
							<div class="startup_tab_img">
								<img src="https://a-oss.zmki.cn/2020/20200315-64fc7fded8847.png" alt="jike导航" style="width: 100%;">
							</div>
						</div>
						<div class="tab-pane fade" id="lesson" role="tabpanel" aria-labelledby="hubstaff-tab">
							<div class="startup_tab_img">
								<img src="https://a-oss.zmki.cn/2020/20200315-42e2992d08535.png" alt="向日葵全家桶" style="width: 100%;">
							</div>
						</div>
						<div class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="engine-tab">
							<div class="startup_tab_img">
								<img src="https://a-oss.zmki.cn/2020/20200315-770fc3944b1be.png" alt="区块教学网" style="width: 100%;">
							</div>
						</div>
						<div class="tab-pane fade" id="report" role="tabpanel" aria-labelledby="business-tab">
							<div class="startup_tab_img">
								<img src="https://a-oss.zmki.cn/2020/20200315-64688fe09cf0d.png" alt="二开汉化模板" style="width: 100%;">
							</div>
						</div>
					</div>
					<ul class="nav nav-tabs startup_tab" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active show" id="market-tab" data-toggle="tab" href="#portal" role="tab" aria-controls="market" aria-selected="true">
								<h3>Time时光相册</h3>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="app-tab" data-toggle="tab" href="#filter" role="tab" aria-controls="app" aria-selected="false">
								<h3>JIKE导航</h3>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="hubstaff-tab" data-toggle="tab" href="#lesson" role="tab" aria-controls="hubstaff" aria-selected="false">
								<h3>向日葵全家桶</h3>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="engine-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="engine" aria-selected="false">
								<h3>区块教学网</h3>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="business-tab" data-toggle="tab" href="#report" role="tab" aria-controls="business" aria-selected="false">
								<h3>Contentberg汉&amp;优/化</h3>
							</a>
						</li>
					</ul>
				</div>
			</section>

			<!-- DEMO SECTION -->
			<section class="get_started_area" id="demo">
				<div class="shap one"></div>
				<div class="shap two"></div>
				<div class="shap one three"></div>
				<div class="shap two four"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 d-flex align-items-center">
							<div class="get_content">
								<h3 class="f_400 f_p wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">zmki</h3>
								<h2 class="f_700 f_p f_size_40 l_height50 mb_20 wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
									更多作品:
								</h2>
								<p class="f_400 f_p mb_40 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
									新美誉希望能够制作出更多有价值内容，携手所有有志之士前进受益。
								</p>
								<!-- <a href="#" class="app_btn app_btn_two Cus_getapp wow fadeInLeft btn_hover" data-wow-delay="0.5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                                <i class="fa fa-graduation-cap"></i> Course website</a>
                            <a href="#" class="app_btn app_btn_two wow fadeInLeft btn_hover" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                                <i class="fa fa-user"></i> Instructor panel</a> -->
							</div>
						</div>
						<div class="col-lg-6 text-left wow fadeInRight" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInRight;">
							<!-- <img src="http://academy-lms.com/assets/images/home-promo-2.png" style="width: 100%;" alt=""> -->
							<div class="get_content">
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12">

										<a href="javascript:;" target="_blank" class="app_btn app_btn_two wow fadeInLeft btn_hover mt_40" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
											<i class="fa fa-pen-fancy"></i> WP美化</a>

										<a href="javascript:;" target="_blank" class="app_btn app_btn_two Cus_getapp wow fadeInLeft btn_hover mt_40" data-wow-delay="0.5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
											<i class="fa fa-user-graduate"></i> WP优化</a>

									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">

										<a href="javascript:;" target="_blank" class="app_btn app_btn_two wow fadeInLeft btn_hover mt_40" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
											<i class="fa fa-user-shield"></i> 很美味 |在建</a>

										<a href="javascript:;" target="_blank" class="app_btn app_btn_two Cus_getapp wow fadeInLeft btn_hover mt_40" data-wow-delay="0.5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
											<i class="fa fa-globe"></i>钻芒博客</a> 
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>
			
			<!-- FOOTER SECTION --> 
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->  
		



<script>
$(function(){
	//footer Banner切换
	$('#banner').skitter({dots:true,interval:5000});
})
</script> 
<!--footer-->
<?php $this->need('footer.php'); ?>
<!--footer-->