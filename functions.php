<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $Notice = new Typecho_Widget_Helper_Form_Element_Text('mdrNotice', NULL, NULL, _t('<h1 >ZuanGuan</h1> <small>一款typecho官网主题</small>'));
	$Notice->input->setAttribute('style', 'display:none');
    $form->addInput($Notice);


    $str1 = explode('/themes/', Helper::options()->themeUrl);
    $str2 = explode('/', $str1[1]);
    $name=$str2[0];//获取到模板文件夹名字也就是模板在数据库中的名字
    $db = Typecho_Db::get();
    $sjdq=$db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:'.$name));
    $ysj = $sjdq['value'];
    if(isset($_POST['type']))
    { 
    if($_POST["type"]=="备份模板设置数据"){
    if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:'.$name.'bf'))){
    $update = $db->update('table.options')->rows(array('value'=>$ysj))->where('name = ?', 'theme:'.$name.'bf');
    $updateRows= $db->query($update);
    echo '<div class="tongzhi col-mb-12 home">备份已更新，请等待自动刷新！如果等不到请点击';
    ?>    
    <a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
    <script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
    <?php
    }else{
    if($ysj){
         $insert = $db->insert('table.options')
        ->rows(array('name' => 'theme:'.$name.'bf','user' => '0','value' => $ysj));
         $insertId = $db->query($insert);
    echo '<div class="tongzhi col-mb-12 home">备份完成，请等待自动刷新！如果等不到请点击';
    ?>    
    <a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
    <script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
    <?php
    }
    }
            }
    if($_POST["type"]=="还原模板设置数据"){
    if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:'.$name.'bf'))){
    $sjdub=$db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:'.$name.'bf'));
    $bsj = $sjdub['value'];
    $update = $db->update('table.options')->rows(array('value'=>$bsj))->where('name = ?', 'theme:'.$name);
    $updateRows= $db->query($update);
    echo '<div class="tongzhi col-mb-12 home">检测到模板备份数据，恢复完成，请等待自动刷新！如果等不到请点击';
    ?>    
    <a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
    <script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2000);</script>
    <?php
    }else{
    echo '<div class="tongzhi col-mb-12 home">没有模板备份数据，恢复不了哦！</div>';
    }
    }
    if($_POST["type"]=="删除备份数据"){
    if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:'.$name.'bf'))){
    $delete = $db->delete('table.options')->where ('name = ?', 'theme:'.$name.'bf');
    $deletedRows = $db->query($delete);
    echo '<div class="tongzhi col-mb-12 home">删除成功，请等待自动刷新，如果等不到请点击';
    ?>    
    <a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
    <script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
    <?php
    }else{
    echo '<div class="tongzhi col-mb-12 home">不用删了！备份不存在！！！</div>';
    }
    }
        }
    echo '<form class="protected home col-mb-12" action="?'.$name.'bf" method="post">
    <input type="submit" name="type" class="btn btn-s" value="备份模板设置数据" />&nbsp;&nbsp;<input type="submit" name="type" class="btn btn-s" value="还原模板设置数据" />&nbsp;&nbsp;<input type="submit" name="type" class="btn btn-s" value="删除备份数据" /></form>';
echo '<br>';






    $Notice = new Typecho_Widget_Helper_Form_Element_Text('mdrNotice', NULL, NULL, _t('<h2 >外观设置</h2>'));
	$Notice->input->setAttribute('style', 'display:none');
    $form->addInput($Notice);
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('导航栏 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在导航栏上加上一个 LOGO'));
    $form->addInput($logoUrl);
    $Sitetitle = new Typecho_Widget_Helper_Form_Element_Text('Sitetitle', NULL, NULL, _t('头部标题'), _t('如有不懂请看使用文档'));
    $form->addInput($Sitetitle);

    $indexh2 = new Typecho_Widget_Helper_Form_Element_Text('indexh2', NULL, NULL, _t('首页大标题'), _t('如有不懂请看使用文档'));
    $form->addInput($indexh2);
    $description = new Typecho_Widget_Helper_Form_Element_Textarea('description', NULL, NULL, _t('首页大标题下的描述'), _t('使用<code style="padding: 2px 4px; font-size: 90%; color: #c7254e; background-color: #f9f2f4; border-radius: 4px;">&lt;br&gt;</code>换行，可使用html'));
    $form->addInput($description);

    /* 按钮设置 */
    $Notice = new Typecho_Widget_Helper_Form_Element_Text('mdrNotice', NULL, NULL, _t('<h2 >按钮设置</h2>'));
	$Notice->input->setAttribute('style', 'display:none');
    $form->addInput($Notice);
    $b1 = new Typecho_Widget_Helper_Form_Element_Text('b1' ,NULL, NULL, _t('代号b1按钮名称'), _t('请看首页所描述的按钮以及使用文档'));
    $form->addInput($b1);
    $b1href = new Typecho_Widget_Helper_Form_Element_Text('b1href' ,NULL, NULL, _t('代号b1按钮跳转链接'), _t('输入类似与https://iucky.cn/page-2.html 的链接，详情请看使用文档'));
    $form->addInput($b1href);
    $b1effect = new Typecho_Widget_Helper_Form_Element_Checkbox('b1effect', 
    array('goto1' => _t('去往新的页面（本页跳转）'),
    'popup1' => _t('弹出一个窗口显示')),
    array(), _t('b1按钮点按效果(只能选一个，否则会出现严重错误）'));  
        $form->addInput($b1effect->multiMode());
    $b2 = new Typecho_Widget_Helper_Form_Element_Text('b2' ,NULL, NULL, _t('代号b2按钮名称'), _t('请看首页所描述的按钮以及使用文档'));
    $form->addInput($b2);
    $b2href = new Typecho_Widget_Helper_Form_Element_Text('b2href' ,NULL, NULL, _t('代号b2按钮跳转链接'), _t('输入类似与https://iucky.cn/page-3.html 的链接，详情请看使用文档.'));
    $form->addInput($b2href);
    $b2effect = new Typecho_Widget_Helper_Form_Element_Checkbox('b2effect', 
    array('goto2' => _t('去往新的页面（本页跳转）'),
    'popup2' => _t('弹出一个窗口显示')),
    array(), _t('b2按钮点按效果(只能选一个，否则会出现严重错误）'));  
        $form->addInput($b2effect->multiMode());
    $headbotton = new Typecho_Widget_Helper_Form_Element_Text('headbotton' ,NULL, NULL, _t('顶部右边按钮名称'), _t('就是顶部那个蓝色的按钮'));
    $form->addInput($headbotton);
    $headbottonhref = new Typecho_Widget_Helper_Form_Element_Text('headbottonhref' ,NULL, NULL, _t('顶部右边按钮跳转地址'), _t(''));
    $form->addInput($headbottonhref);

    /* 核心领域设置 */
    $Notice = new Typecho_Widget_Helper_Form_Element_Text('mdrNotice', NULL, NULL, _t('<h2 >核心领域设置</h2>'));
	$Notice->input->setAttribute('style', 'display:none');
    $form->addInput($Notice);
    $domain = new Typecho_Widget_Helper_Form_Element_Text('domain' ,NULL, NULL, _t('核心领域的描述'), _t(' 只需要文字，可以不填'));
    $form->addInput($domain);
    $domain1 = new Typecho_Widget_Helper_Form_Element_Text('domain1' ,NULL, NULL, _t('核心领域下的第1个名字'), _t(' 只需要文字'));
    $form->addInput($domain1);
    $domain1about = new Typecho_Widget_Helper_Form_Element_Text('domain1about' ,NULL, NULL, _t('核心领域第1个描述'), _t(' 只需要文字'));
    $form->addInput($domain1about);

    $domain2 = new Typecho_Widget_Helper_Form_Element_Text('domain2' ,NULL, NULL, _t('核心领域下的第2个名字'), _t(' 只需要文字'));
    $form->addInput($domain2);
    $domain2about = new Typecho_Widget_Helper_Form_Element_Text('domain2about' ,NULL, NULL, _t('核心领域第2个描述'), _t(' 只需要文字'));
    $form->addInput($domain2about);

    $domain3 = new Typecho_Widget_Helper_Form_Element_Text('domain3' ,NULL, NULL, _t('核心领域下的第3个名字'), _t(' 只需要文字'));
    $form->addInput($domain3);
    $domain3about = new Typecho_Widget_Helper_Form_Element_Text('domain3about' ,NULL, NULL, _t('核心领域第3个描述'), _t(' 只需要文字'));
    $form->addInput($domain3about);
    $domain4 = new Typecho_Widget_Helper_Form_Element_Text('domain4' ,NULL, NULL, _t('核心领域下的第4个名字'), _t(' 只需要文字'));
    $form->addInput($domain4);
    $domain4about = new Typecho_Widget_Helper_Form_Element_Text('domain4about' ,NULL, NULL, _t('核心领域第4个描述'), _t(' 只需要文字'));
    $form->addInput($domain4about);
    $domain5 = new Typecho_Widget_Helper_Form_Element_Text('domain5' ,NULL, NULL, _t('核心领域下的第5个名字'), _t(' 只需要文字'));
    $form->addInput($domain5);
    $domain5about = new Typecho_Widget_Helper_Form_Element_Text('domain5about' ,NULL, NULL, _t('核心领域第5个描述'), _t(' 只需要文字'));
    $form->addInput($domain5about);
    $domain6 = new Typecho_Widget_Helper_Form_Element_Text('domain6' ,NULL, NULL, _t('核心领域下的第6个名字'), _t(' 只需要文字'));
    $form->addInput($domain6);
    $domain6about = new Typecho_Widget_Helper_Form_Element_Text('domain6about' ,NULL, NULL, _t('核心领域第6个描述'), _t(' 只需要文字'));
    $form->addInput($domain6about);



    /* 我的作品 */
    $Notice = new Typecho_Widget_Helper_Form_Element_Text('mdrNotice', NULL, NULL, _t('<h2 >作品设置</h2>'));
	$Notice->input->setAttribute('style', 'display:none');
    $form->addInput($Notice);
    $view1 = new Typecho_Widget_Helper_Form_Element_Text('view1' ,NULL, NULL, _t('作品1名字'), _t(' '));
    $form->addInput($view1);
    $view1href = new Typecho_Widget_Helper_Form_Element_Text('view1href' ,NULL, NULL, _t('作品1图片'), _t(' 填入图片链接，建议使用https协议'));
    $form->addInput($view1href);
    $view2 = new Typecho_Widget_Helper_Form_Element_Text('view2' ,NULL, NULL, _t('作品2名字'), _t(' '));
    $form->addInput($view2);
    $view2href = new Typecho_Widget_Helper_Form_Element_Text('view2href' ,NULL, NULL, _t('作品2图片'), _t(' 填入图片链接，建议使用https协议'));
    $form->addInput($view2href);
    $view3 = new Typecho_Widget_Helper_Form_Element_Text('view3' ,NULL, NULL, _t('作品3名字'), _t(' '));
    $form->addInput($view3);
    $view3href = new Typecho_Widget_Helper_Form_Element_Text('view3href' ,NULL, NULL, _t('作品3图片'), _t(' 填入图片链接，建议使用https协议'));
    $form->addInput($view3href);
    $view4 = new Typecho_Widget_Helper_Form_Element_Text('view4' ,NULL, NULL, _t('作品4名字'), _t(' '));
    $form->addInput($view4);
    $view4href = new Typecho_Widget_Helper_Form_Element_Text('view4href' ,NULL, NULL, _t('作品4图片'), _t(' 填入图片链接，建议使用https协议'));
    $form->addInput($view4href);
    $view5 = new Typecho_Widget_Helper_Form_Element_Text('view5' ,NULL, NULL, _t('作品5名字'), _t(' '));
    $form->addInput($view5);
    $view5href = new Typecho_Widget_Helper_Form_Element_Text('view5href' ,NULL, NULL, _t('作品5图片'), _t(' 填入图片链接，建议使用https协议'));
    $form->addInput($view5href);


    /* 其他作品 */
    $Notice = new Typecho_Widget_Helper_Form_Element_Text('mdrNotice', NULL, NULL, _t('<h2 >其他作品</h2>'));
	$Notice->input->setAttribute('style', 'display:none');
    $form->addInput($Notice);
    $more1 = new Typecho_Widget_Helper_Form_Element_Text('more1' ,NULL, NULL, _t('其他作品1名字'), _t(' '));
    $form->addInput($more1);
    $more1href = new Typecho_Widget_Helper_Form_Element_Text('more1href' ,NULL, NULL, _t('其他作品1链接'), _t(' 填入链接，建议使用https协议'));
    $form->addInput($more1href);
    $more2 = new Typecho_Widget_Helper_Form_Element_Text('more2' ,NULL, NULL, _t('其他作品2名字'), _t(' '));
    $form->addInput($more2);
    $more2href = new Typecho_Widget_Helper_Form_Element_Text('more2href' ,NULL, NULL, _t('其他作品2链接'), _t(' 填入链接，建议使用https协议'));
    $form->addInput($more2href);
    $more3 = new Typecho_Widget_Helper_Form_Element_Text('more3' ,NULL, NULL, _t('其他作品3名字'), _t(' '));
    $form->addInput($more3);
    $more3href = new Typecho_Widget_Helper_Form_Element_Text('more3href' ,NULL, NULL, _t('其他作品3链接'), _t(' 填入链接，建议使用https协议'));
    $form->addInput($more3href);
    $more4 = new Typecho_Widget_Helper_Form_Element_Text('more4' ,NULL, NULL, _t('其他作品4名字'), _t(' '));
    $form->addInput($more4);
    $more4href = new Typecho_Widget_Helper_Form_Element_Text('more4href' ,NULL, NULL, _t('其他作品4链接'), _t(' 填入链接，建议使用https协议'));
    $form->addInput($more4href);


    /* 社交方式 */
    $Notice = new Typecho_Widget_Helper_Form_Element_Text('mdrNotice', NULL, NULL, _t('<h2 >社交方式设置</h2>'));
	$Notice->input->setAttribute('style', 'display:none');
    $form->addInput($Notice);
    $github = new Typecho_Widget_Helper_Form_Element_Text('github' ,NULL, NULL, _t('GitHub地址'), _t('填写你的GitHub地址（或者你喜欢就好）'));
    $form->addInput($github);
    $heart = new Typecho_Widget_Helper_Form_Element_Text('heart' ,NULL, NULL, _t('底部第二个图标心的地址'), _t('填写你喜欢就好的地址'));
    $form->addInput($heart);
    $email = new Typecho_Widget_Helper_Form_Element_Text('email' ,NULL, NULL, _t('email地址'), _t('填写你的email地址（只能是email地址）'));
    $form->addInput($email);
    $home = new Typecho_Widget_Helper_Form_Element_Text('home' ,NULL, NULL, _t('主页地址'), _t('填写你的主页地址（或者你喜欢就好）'));
    $form->addInput($home);

    /* 底部设置 */
    $Notice = new Typecho_Widget_Helper_Form_Element_Text('mdrNotice', NULL, NULL, _t('<h2 >底部设置</h2>'));
	$Notice->input->setAttribute('style', 'display:none');
    $form->addInput($Notice);
    $footersites = new Typecho_Widget_Helper_Form_Element_Textarea('footersites', NULL, _t('<li><a>示例</a></li>'), _t('底部旗下网站'), _t('必须使用html，请用li, a包裹，建议不要超过4个，不填将隐藏'));
    $form->addInput($footersites);

    $footer = new Typecho_Widget_Helper_Form_Element_Textarea('footer', NULL, NULL, _t('底部输出'), _t('文字即可，使用<code style="padding: 2px 4px; font-size: 90%; color: #c7254e; background-color: #f9f2f4; border-radius: 4px;">&lt;br&gt;</code>换行，不建议用html'));
    $form->addInput($footer);
}
?>