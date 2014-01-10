<?php //netteCache[01]000402a:2:{s:4:"time";s:21:"0.79301800 1387186532";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:82:"/Users/petrpallas/development/projects/taskmgr/app/templates/Projects/detail.latte";i:2;i:1387186524;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:28:"$WCREV$ released on $WCDATE$";}}}?><?php

// source file: /Users/petrpallas/development/projects/taskmgr/app/templates/Projects/detail.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'toul6hvgrj')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbb2cbd023b0_content')) { function _lbb2cbd023b0_content($_l, $_args) { extract($_args)
?><div data-magellan-expedition="fixed">
  <dl class="sub-nav">
    <dd data-magellan-arrival="desc"><a href="#desc">Description</a></dd>
    <dd class="show-for-small-only" data-magellan-arrival="team"><a href="#team">Team</a></dd>
    <dd data-magellan-arrival="task"><a href="#task">Tasks</a></dd>
    <dd data-magellan-arrival="comments"><a href="#comments">Comments</a></dd>
  </dl>
</div>
    <div class="row">
        <div class="small-12">
            <h2>Project: <?php echo Nette\Templating\Helpers::escapeHtml($project['name'], ENT_NOQUOTES) ?>
<small><a href="<?php echo htmlSpecialChars($_control->link("action:editProject", array('id'=>$id))) ?>"> - Edit</a></small></h2>
            <h3 class="subheader small-offset-1">- owner: <?php echo Nette\Templating\Helpers::escapeHtml($project['owner'], ENT_NOQUOTES) ?></h3>
        </div>
    </div>
    <div class="row">
        <div class="small-12 panel">
            <div class="row">
                <div class="small-12 medium-7 columns">
                    <a name="desc"></a>
                    <h3 class="large-12 small-12 columns" data-magellan-destination="desc">Description</h3>
                    <div class="large-12 small-12 columns panel">
                        <?php echo Nette\Templating\Helpers::escapeHtml($project['description'], ENT_NOQUOTES) ?>

                    </div>
                </div>
                <div class="small-12 medium-4 columns">
                    <a name="team"></a>
                    <h3 class="large-12 small-12 columns" data-magellan-destination="team">Team</h3>
                    <div class="large-12 small-12 columns panel">
                        <a href="<?php echo htmlSpecialChars($_control->link(":team:detail", array('id'=>$project['team_id']))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($project['team_name'], ENT_NOQUOTES) ?></a>
                                            </div>
                </div>
            </div>
            <div class="row">
                <a name="task"></a>
                <h3 class="small-12 columns" data-magellan-destination="task">Tasks</h3>
                <div class="panel small-12 columns">
<?php $iterations = 0; foreach ($tasks as $item): ?>
                        <a name="task-<?php echo htmlSpecialChars($template->replace($item['name'], ' ', '-')) ?>"><br /></a>
                       
                       <br />
                       <br />
                        <div class="row">
                            <h4 class="small-12 columns" style="color: <?php if ($item['urgency_color']!='none'): ?>
#<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeCss($item['urgency_color'])) ;endif ?>
;"><?php echo Nette\Templating\Helpers::escapeHtml($item['name'], ENT_NOQUOTES) ?>
 - <?php echo Nette\Templating\Helpers::escapeHtml($item['urgency'], ENT_NOQUOTES) ?>
<a class="show-for-small-only" href="<?php echo htmlSpecialChars($_control->link("task:edit", array('id'=>$item['id']))) ?>"> - Edit</a></h4>
                            <div class="small-12 columns panel">
                                <div class="small-12 columns panel">
                                    <h5 class="small-12">Description</h5>
                                    <?php echo Nette\Templating\Helpers::escapeHtml($item['description'], ENT_NOQUOTES) ?>

                                </div>
                                <div class="medium-4 small-12 columns left panel">
                                    <h5 class="small-12">Status</h5>
                                    <span style="color: <?php if ($item['state_color']!='none'): ?>
#<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeCss($item['state_color'])) ;endif ?>
;"><?php echo Nette\Templating\Helpers::escapeHtml($item['state'], ENT_NOQUOTES) ?></span>
                                </div>
                                <div class="medium-4 small-12 columns left panel">
                                    <h5 class="small-12">Assigned</h5>
                                    <a href="<?php echo htmlSpecialChars($_control->link(":user:detail", array('id'=>$item['asigned_id']))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($item['asigned_name'], ENT_NOQUOTES) ?></a>
                                </div>
                                <div class="medium-4 small-12 columns left panel">
                                    <h5 class="small-12">Time</h5>
                                    Estimated: <?php echo Nette\Templating\Helpers::escapeHtml(gmdate("H:i:s", $item['estimated_time']), ENT_NOQUOTES) ?><br />
                                    Real: <?php echo Nette\Templating\Helpers::escapeHtml(gmdate("H:i:s", $item['real_time']), ENT_NOQUOTES) ?>

                                </div>
                                <div class="small-12 columns">
                                    <a class="button" href="<?php echo htmlSpecialChars($_control->link("task:edit", array('id'=>$item['id']))) ?>">Edit</a>
                                </div>
                            </div>
                        </div>
<?php $iterations++; endforeach ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <a name="comments"></a>
        <h3 data-magellan-destination="comments">Comments</h3>
        <div class="small-12 panel">
            <div class="small-12">
<?php $iterations = 0; foreach ($comments as $item): ?>
                    <h6><a href="<?php echo htmlSpecialChars($_control->link(":user:detail", array('id'=>$item['user_id']))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($item['display_name'], ENT_NOQUOTES) ?></a></h6>    
                    <div class="panel radius callout">
                        <?php echo Nette\Templating\Helpers::escapeHtml($item['text'], ENT_NOQUOTES) ?>

                    </div>
<?php $iterations++; endforeach ?>
            </div>
            <div class="small-12">
<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = (is_object("addComent") ? "addComent" : $_control["addComent"]), array()) ?>
                    <div class="row">
<?php $_input = is_object("coment") ? "coment" : $_form["coment"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
                    </div>
                    <div class="row">
<?php $_input = (is_object("coment") ? "coment" : $_form["coment"]); echo $_input->getControl()->addAttributes(array()) ?>
                    </div>
                    <div class="row">
<?php $_input = (is_object("send") ? "send" : $_form["send"]); echo $_input->getControl()->addAttributes(array('class'=>'button')) ?>
                    </div>
<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>
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
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 