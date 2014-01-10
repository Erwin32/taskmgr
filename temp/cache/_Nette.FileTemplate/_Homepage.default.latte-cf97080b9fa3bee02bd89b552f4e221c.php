<?php //netteCache[01]000415a:2:{s:4:"time";s:21:"0.59264100 1386943301";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:95:"/Users/petrpallas/development/projects/taskmgr/app/AdminModule/templates/Homepage/default.latte";i:2;i:1386943297;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:28:"$WCREV$ released on $WCDATE$";}}}?><?php

// source file: /Users/petrpallas/development/projects/taskmgr/app/AdminModule/templates/Homepage/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '7j1v96f56n')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb50bd97165b_content')) { function _lb50bd97165b_content($_l, $_args) { extract($_args)
?><div class="row">
      <div class="large-12 columns">
        <h1>Dasboard</h1>
      </div>
</div>
<div class="row">
    <div class="large-12 columns panel">
        <div class="large-7 small-pull-12 columns panel"></div>
        <div class="large-4 small-pull-12 columns panel"></div>
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