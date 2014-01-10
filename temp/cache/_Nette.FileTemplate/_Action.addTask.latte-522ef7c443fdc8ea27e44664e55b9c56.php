<?php //netteCache[01]000401a:2:{s:4:"time";s:21:"0.45866100 1387194642";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:81:"/Users/petrpallas/development/projects/taskmgr/app/templates/Action/addTask.latte";i:2;i:1387194641;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:28:"$WCREV$ released on $WCDATE$";}}}?><?php

// source file: /Users/petrpallas/development/projects/taskmgr/app/templates/Action/addTask.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'oos69gx06b')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb80832fb517_content')) { function _lb80832fb517_content($_l, $_args) { extract($_args)
?><div class="row">
    <div class="small-12 medium-8 medium-centered columns">
        <h2>Add Task</h2>
    </div>
</div>
<div class="row">
    <div class="small-12 medium-centered medium-8 columns panel">
<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = (is_object("addTask") ? "addTask" : $_control["addTask"]), array()) ?>
            <div class="row">
<?php $_input = is_object("project") ? "project" : $_form["project"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
            </div>
            <div class="row">
<?php $_input = (is_object("project") ? "project" : $_form["project"]); echo $_input->getControl()->addAttributes(array()) ?>
            </div>
            <div class="row">
<?php $_input = is_object("name") ? "name" : $_form["name"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
            </div>
            <div class="row">
<?php $_input = (is_object("name") ? "name" : $_form["name"]); echo $_input->getControl()->addAttributes(array()) ?>
            </div>
            <div class="row">
<?php $_input = is_object("urgency") ? "urgency" : $_form["urgency"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
            </div>
            <div class="row">
<?php $_input = (is_object("urgency") ? "urgency" : $_form["urgency"]); echo $_input->getControl()->addAttributes(array()) ?>
            </div>
            <div class="row">
<?php $_input = is_object("state") ? "state" : $_form["state"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
            </div>
            <div class="row">
<?php $_input = (is_object("state") ? "state" : $_form["state"]); echo $_input->getControl()->addAttributes(array()) ?>
            </div>
            <div class="row">
<?php $_input = is_object("asigned") ? "asigned" : $_form["asigned"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
            </div>
            <div class="row">
<?php $_input = (is_object("asigned") ? "asigned" : $_form["asigned"]); echo $_input->getControl()->addAttributes(array()) ?>
            </div>
            <div class="row">
<?php $_input = is_object("desc") ? "desc" : $_form["desc"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
            </div>
            <div class="row">
<?php $_input = (is_object("desc") ? "desc" : $_form["desc"]); echo $_input->getControl()->addAttributes(array()) ?>
            </div>
            <div class="row">
<?php $_input = is_object("estimate") ? "estimate" : $_form["estimate"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
            </div>
            <div class="row">
<?php $_input = (is_object("estimate") ? "estimate" : $_form["estimate"]); echo $_input->getControl()->addAttributes(array()) ?>
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