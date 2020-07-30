<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('导航栏 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在导航栏上加上一个 LOGO'));
    $form->addInput($logoUrl);
    $Sitetitle = new Typecho_Widget_Helper_Form_Element_Text('Sitetitle', NULL, NULL, _t('头部标题'), _t('如有不懂请看使用文档'));
    $form->addInput($Sitetitle);

    $indexh2 = new Typecho_Widget_Helper_Form_Element_Text('indexh2', NULL, NULL, _t('首页大标题'), _t('如有不懂请看使用文档'));
    $form->addInput($indexh2);
    $description = new Typecho_Widget_Helper_Form_Element_Textarea('description', NULL, NULL, _t('首页大标题下的描述'), _t('使用<code style="padding: 2px 4px; font-size: 90%; color: #c7254e; background-color: #f9f2f4; border-radius: 4px;">&lt;br&gt;</code>换行，可使用html'));
    $form->addInput($description);
    
    $b1 = new Typecho_Widget_Helper_Form_Element_Text('b1' ,NULL, NULL, _t('代号b1按钮名称'), _t('请看首页所描述的按钮以及使用文档'));
    $form->addInput($b1);
    $b1href = new Typecho_Widget_Helper_Form_Element_Text('b1href' ,NULL, NULL, _t('代号b1按钮跳转链接'), _t('输入类似与https://iucky.cn/page-2.html 的链接，详情请看使用文档'));
    $form->addInput($b1href);
    $b1effect = new Typecho_Widget_Helper_Form_Element_Checkbox('b1effect', 
    array('goto1' => _t('去往新的页面（本页跳转）'),
    'popup1' => _t('弹出一个窗口显示')),
    array('goto1', 'popup1'), _t('b1按钮点按效果(只能选一个，否则会出现严重错误）'));  
        $form->addInput($b1effect->multiMode());

    $b2 = new Typecho_Widget_Helper_Form_Element_Text('b2' ,NULL, NULL, _t('代号b2按钮名称'), _t('请看首页所描述的按钮以及使用文档'));
    $form->addInput($b2);
    $b2href = new Typecho_Widget_Helper_Form_Element_Text('b2href' ,NULL, NULL, _t('代号b2按钮跳转链接'), _t('输入类似与https://iucky.cn/page-3.html 的链接，详情请看使用文档.'));
    $form->addInput($b2href);
    $b2effect = new Typecho_Widget_Helper_Form_Element_Checkbox('b2effect', 
    array('goto2' => _t('去往新的页面（本页跳转）'),
    'popup2' => _t('弹出一个窗口显示')),
    array('goto2', 'popup2'), _t('b2按钮点按效果(只能选一个，否则会出现严重错误）'));  
        $form->addInput($b2effect->multiMode());

    $headbotton = new Typecho_Widget_Helper_Form_Element_Text('headbotton' ,NULL, NULL, _t('顶部右边按钮名称'), _t('就是顶部那个蓝色的按钮'));
    $form->addInput($headbotton);
    $headbottonhref = new Typecho_Widget_Helper_Form_Element_Text('headbottonhref' ,NULL, NULL, _t('顶部右边按钮跳转地址'), _t(''));
    $form->addInput($headbottonhref);

    $github = new Typecho_Widget_Helper_Form_Element_Text('github' ,NULL, NULL, _t('GitHub地址'), _t('填写你的GitHub地址（或者你喜欢就好）'));
    $form->addInput($github);
    $heart = new Typecho_Widget_Helper_Form_Element_Text('heart' ,NULL, NULL, _t('底部第二个图标心的地址'), _t('填写你喜欢就好的地址'));
    $form->addInput($heart);
    $email = new Typecho_Widget_Helper_Form_Element_Text('email' ,NULL, NULL, _t('email地址'), _t('填写你的email地址（只能是email地址）'));
    $form->addInput($email);
    $home = new Typecho_Widget_Helper_Form_Element_Text('home' ,NULL, NULL, _t('主页地址'), _t('填写你的主页地址（或者你喜欢就好）'));
    $form->addInput($home);


    $footersites = new Typecho_Widget_Helper_Form_Element_Textarea('footersites', NULL, NULL, _t('底部旗下网站'), _t('必须使用html，请用li, a包裹，建议不要超过4个，详情请看使用文档'));
    $form->addInput($footersites);
}
?>