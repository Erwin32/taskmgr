<?php //netteCache[01]000398a:2:{s:4:"time";s:21:"0.27276900 1387194865";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:78:"/Users/petrpallas/development/projects/taskmgr/app/templates/Team/detail.latte";i:2;i:1387194863;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:28:"$WCREV$ released on $WCDATE$";}}}?><?php

// source file: /Users/petrpallas/development/projects/taskmgr/app/templates/Team/detail.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'zxkbmodv52')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb9ddad38384_content')) { function _lb9ddad38384_content($_l, $_args) { extract($_args)
?><div class="row">
    <div class="small-12">
        <h2><?php echo Nette\Templating\Helpers::escapeHtml($team['name'], ENT_NOQUOTES) ?></h2>
        <h3 class="subheader small-offset-1">- moto: <?php echo Nette\Templating\Helpers::escapeHtml($team['moto'], ENT_NOQUOTES) ?></h3>
    </div>
</div>
<div class="row">
    <div class="small-12 columns panel">
        <div class="small-12 columns">
            <h3 class="large-12 small-12 columns">Team members</h3>
            <div class="large-12 small-12 columns panel">
<?php $iterations = 0; foreach ($teamMebers as $item): ?>
                    <div class="row">
                       <p><a href="<?php echo htmlSpecialChars($_control->link(":user:detail", array('id'=>$item['id']))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($item['display_name'], ENT_NOQUOTES) ?></a></p>
                    </div>
<?php $iterations++; endforeach ?>
            </div>
        </div>
    </div>
</div>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 