<?php //netteCache[01]000401a:2:{s:4:"time";s:21:"0.24963000 1387138342";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:81:"/Users/petrpallas/development/projects/taskmgr/app/templates/Action/addTime.latte";i:2;i:1387138341;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:28:"$WCREV$ released on $WCDATE$";}}}?><?php

// source file: /Users/petrpallas/development/projects/taskmgr/app/templates/Action/addTime.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '6tkb3b6f3i')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb23f6f9d1e7_content')) { function _lb23f6f9d1e7_content($_l, $_args) { extract($_args)
?><div class="row">
    <div class="small-12 medium-8 medium-centered columns">
        <h2>Report time</h2>
    </div>
</div>
<div class="row">
    <div class="small-12 medium-centered medium-8 columns panel">
<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = (is_object("addTime") ? "addTime" : $_control["addTime"]), array()) ?>
            <div class="row">
<?php $_input = is_object("project") ? "project" : $_form["project"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
            </div>
            <div class="row">
<?php $_input = (is_object("project") ? "project" : $_form["project"]); echo $_input->getControl()->addAttributes(array()) ?>
            </div>
            <div class="row">
                <label>Time</label>
            </div>
            <div class="row collapse">
                <div class="small-3 medium-2 columns">
                    <span class="prefix">Hours</span>
                </div>
                <div class="small-3 medium-4 columns">
<?php $_input = (is_object("hours") ? "hours" : $_form["hours"]); echo $_input->getControl()->addAttributes(array()) ?>
                </div>
                <div class="small-3 medium-2 columns">
                    <span class="prefix">Minutes</span>
                </div>
                <div class="small-3 medium-4 columns">
<?php $_input = (is_object("mins") ? "mins" : $_form["mins"]); echo $_input->getControl()->addAttributes(array()) ?>
                </div>
            </div>
            <div class="row">
<?php $_input = is_object("coment") ? "coment" : $_form["coment"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
            </div>
            <div class="row">
<?php $_input = (is_object("coment") ? "coment" : $_form["coment"]); echo $_input->getControl()->addAttributes(array()) ?>
            </div>
            <div class="row">
<?php $_input = (is_object("send") ? "send" : $_form["send"]); echo $_input->getControl()->addAttributes(array('class'=>'button small-12 large-5')) ?>
            </div>
<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>
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
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 