<?php //netteCache[01]000403a:2:{s:4:"time";s:21:"0.84323000 1387040659";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:83:"/Users/petrpallas/development/projects/taskmgr/app/templates/Homepage/default.latte";i:2;i:1387040655;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:28:"$WCREV$ released on $WCDATE$";}}}?><?php

// source file: /Users/petrpallas/development/projects/taskmgr/app/templates/Homepage/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'hbkxbcridv')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb6d23f602ce_content')) { function _lb6d23f602ce_content($_l, $_args) { extract($_args)
?><div class="row">
      <div class="large-12 columns">
        <h1>Dasboard</h1>
      </div>
</div>
<div class="row">
    <div class="large-12 columns panel">
        <div class="row">
            <div class="large-4 medium-4 small-12 columns">
                <h3 class="large-12 small-12 columns">Project list</h3>
                <div class="large-12 small-12 columns panel">
<?php $iterations = 0; foreach ($projectsList as $item): ?>
                        <a href="#"><?php echo Nette\Templating\Helpers::escapeHtml($item['name'], ENT_NOQUOTES) ?></a>
<?php $iterations++; endforeach ?>
                </div>
            </div>
            <div class="large-7 medium-7 small-12 columns">
                <h3 class="large-12 small-12 columns">News feed</h3>
                <div class="large-12 small-12 columns panel">
<?php $iterations = 0; foreach ($events as $item): ?>
                        [<?php echo Nette\Templating\Helpers::escapeHtml(date('d.m.Y',$item['time']), ENT_NOQUOTES) ?>
] - <strong><?php echo Nette\Templating\Helpers::escapeHtml($item['display_name'], ENT_NOQUOTES) ?>
</strong>: <?php echo Nette\Templating\Helpers::escapeHtml($item['text'], ENT_NOQUOTES) ?><br />
<?php $iterations++; endforeach ?>
                </div>
            </div>
        </div>
        <div class="row">
            <h3 class="large-12 columns">Fun facts</h3>
            <div class="panel large-12 columns">
                meh
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