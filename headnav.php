            <!-- MENU -->
			<header class="header_area">
				<nav class="navbar navbar-expand-lg menu_one">
					<div class="container custom_container p0">
						<a class="navbar-brand" href="/">
						    <?php if ($this->options->logoUrl): ?>
						    <img src="<?php $this->options->logoUrl() ?>"height="50" srcset="<?php $this->options->logoUrl() ?> 2x" alt="logo" /></a>
						    <?php else: ?>
							<a>请在模版内设置LOGO</a>
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

		   <li class="dropdown submenu nav-item"> 
			<a title="Page" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="/wendang/">页面</a> 
			<ul role="menu" class=" dropdown-menu"> 
			<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
			<?php while($pages->next()): ?>
				<li class="nav-item "><a class="nav-link" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
			<?php endwhile; ?>
			</ul>

		 <li class="dropdown submenu nav-item"> 
        <a title="Pages" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="/wendang/">文档</a> 
          <ul role="menu" class=" dropdown-menu"> 
		  <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li class="nav-item "><a class="nav-link" href="{permalink}">{title}</a></li>'); ?>
			</li>

    </ul> 
            
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