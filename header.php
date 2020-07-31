<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<header>
<!--title-->
<?php if ($this->options->Sitetitle): ?>
    
        <title>
        <?php $this->archiveTitle(array(
            'category'  =>  _t('%s_<?php $this->options->Sitetitle() ?>'),
            'search'    =>  _t('包含关键字 %s 的文章_<?php $this->options->Sitetitle() ?>'),
            'tag'       =>  _t('标签 %s _<?php $this->options->Sitetitle() ?>'),
            'author'    =>  _t('%s _<?php $this->options->Sitetitle() ?>')
        ), '', ' - '); ?><?php $this->options->Sitetitle() ?></title>
        <?php else: ?>
        <?php $this->archiveTitle(array(
            'category'  =>  _t('%s_<?php $this->options->Sitetitle() ?>'),
            'search'    =>  _t('包含关键字 %s 的文章_<?php $this->options->Sitetitle() ?>'),
            'tag'       =>  _t('标签 %s _<?php $this->options->Sitetitle() ?>'),
            'author'    =>  _t('%s _<?php $this->options->Sitetitle() ?>')
        ), '', ' - '); ?>ZuanGuan|请在模板设置标题</title>
<?php endif; ?> 
<!--title-->
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="/usr/themes/ZuanGuan/static/css/bootstrap.min.css">
		<link rel="stylesheet" href="/usr/themes/ZuanGuan/static/css/bootstrap-select.min.css">
		<!--icon font css-->
		<link rel="stylesheet" href="/usr/themes/ZuanGuan/static/css/themify-icons.css">
		<link rel="stylesheet" href="/usr/themes/ZuanGuan/static/css/all.css">
		<link rel="stylesheet" href="/usr/themes/ZuanGuan/static/css/style.css">
		<link rel="stylesheet" href="/usr/themes/ZuanGuan/static/css/flaticon.css">
		<link rel="stylesheet" href="/usr/themes/ZuanGuan/static/css/animate.css">
		<link rel="stylesheet" href="/usr/themes/ZuanGuan/static/css/owl.carousel.min.css">
		<link rel="stylesheet" href="/usr/themes/ZuanGuan/static/css/nice-select.css">
		<link rel="stylesheet" href="/usr/themes/ZuanGuan/static/css/magnific-popup.css">
		<link rel="stylesheet" href="/usr/themes/ZuanGuan/static/css/jquery.mCustomScrollbar.min.css">
		<link rel="stylesheet" href="/usr/themes/ZuanGuan/static/css/style1.css">
		<link rel="stylesheet" href="/usr/themes/ZuanGuan/static/css/responsive.css">
		<link rel="stylesheet" href="/usr/themes/ZuanGuan/static/css/custom.css">
		<!--网站地址栏图标--> 
		  
		<script src="/usr/themes/ZuanGuan/static/js/jquery-3.2.1.min.js"></script> 
</head>
<body>
<!--插件头部——开始-->
<?php $this->header(); ?>
<!--插件头部——结束-->  
		<div class="body_wrapper">
			<!-- MENU -->
			<header class="header_area">
				<nav class="navbar navbar-expand-lg menu_one">
					<div class="container custom_container p0">
						<a class="navbar-brand" href="/">
						    <?php if ($this->options->logoUrl): ?>
						    <img src="<?php $this->options->logoUrl() ?>"height="50" srcset="<?php $this->options->logoUrl() ?> 2x" alt="logo" /></a>
						    <?php else: ?>
							<a class="Pshake">请在模版内设置LOGO</a>
							<?php endif; ?>
						<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="menu_toggle">
								<span class="hamburger">
									<span></span>
									<span></span>
									<span></span>
								</span>
								<span class="hamburger-cross">
									<span></span>
									<span></span>
								</span>
							</span>
						</button> 
<div class="collapse navbar-collapse" id="navbarSupportedContent">  
  <!--导航开始--> 
      <ul class="navbar-nav ml-auto menu pr_20 "> 
        <li class="nav-item" style="margin-right: 45px;">
        	<!--active-->
        <a class="nav-link " role="button" aria-haspopup="true" aria-expanded="false" href="/">首页</a>
       	</li>  
         
                
      </ul>  
  <!--导航结束-->   
							<a class="app_btn btn_hover" href="<?php $this->options->headbottonhref() ;?>" target="_blank">
								<!-- <img src="images/envato-mini.png" style="height: 15px;" /> -->
								<?php $this->options->headbotton() ;?></a>
						</div>
					</div>
				</nav>
			</header> 