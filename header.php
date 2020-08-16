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
		<link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">
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
		<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
		<script src="/usr/themes/ZuanGuan/static/js/jquery-3.2.1.min.js"></script> 
</head>
<body>
<!--插件头部——开始-->
<?php $this->header(); ?>
<!--插件头部——结束-->  

