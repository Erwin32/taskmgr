<?php //netteCache[01]000394a:2:{s:4:"time";s:21:"0.68228400 1387804771";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:74:"/Users/petrpallas/development/projects/taskmgr/app/templates/@layout.latte";i:2;i:1387804769;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:28:"$WCREV$ released on $WCDATE$";}}}?><?php

// source file: /Users/petrpallas/development/projects/taskmgr/app/templates/@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '77z191gn5m')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb903d2fa453_title')) { function _lb903d2fa453_title($_l, $_args) { extract($_args)
?>Taskmgr<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbadaa2b7735_head')) { function _lbadaa2b7735_head($_l, $_args) { extract($_args)
;
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lb177a449fed_scripts')) { function _lb177a449fed_scripts($_l, $_args) { extract($_args)
?>	<script src="<?php echo htmlSpecialChars($basePath) ?>/javascripts/vendor/netteForms.js"></script>
	<script src="<?php echo htmlSpecialChars($basePath) ?>/javascripts/main.js"></script>
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
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <script src="<?php echo htmlSpecialChars($basePath) ?>/bower_components/modernizr/modernizr.js"></script>
	<meta name="description" content="" />
<?php if (isset($robots)): ?>	<meta name="robots" content="<?php echo htmlSpecialChars($robots) ?>" />
<?php endif ?>

	<title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
ob_start(); call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()); echo $template->upper($template->striptags(ob_get_clean()))  ?></title>

	<link rel="stylesheet" media="screen,projection,tv" href="<?php echo htmlSpecialChars($basePath) ?>/stylesheets/app.css" />
	<link rel="shortcut icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" />
	<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

</head>

<body>
    <div class="page">
	<script> document.documentElement.className+=' js' </script>

	
        <div class="off-canvas-wrap">
            <div class="inner-wrap">
              <nav class="tab-bar">
<?php if ($user->isLoggedIn()): ?>
                <section class="left-small">
                  <a class="left-off-canvas-toggle menu-icon" ><span>Menu</span></a>
                </section>
<?php endif ?>
                
                <section class="middle tab-bar-section">
                  
                </section>
                
                              </nav>

              <aside class="left-off-canvas-menu">
                <ul class="off-canvas-list">
                  <li><label>Me</label></li>
                  <li><a href="<?php echo htmlSpecialChars($_control->link(":user:detail", array('id'=>$user->id))) ?>">Profile</a></li>
                                    <li><label>Quick Menu</label></li>
                  <li><a href="<?php echo htmlSpecialChars($_control->link(":action:addTime")) ?>">Report time</a></li>
                  <li><a href="<?php echo htmlSpecialChars($_control->link(":action:addProject")) ?>">Add project</a></li>
                  <li><a href="<?php echo htmlSpecialChars($_control->link(":action:addTask")) ?>">Add task</a></li>
                  <li><label>Not yet implemented</label></li>
                  
                  
                  
                  <li><a href="#">Show my tasks</a></li>
                  
                </ul>
              </aside>

                            <section class="main-section">
                <!-- content goes here -->
                  
                                      <nav class="top-bar" data-topbar>
                        <ul class="title-area">
                          <li class="name">
                              <h1><a href="<?php echo htmlSpecialChars($_control->link(":homepage:dashboard")) ?>">TaskMGR</a></h1>
                          </li>
<?php if ($user->isLoggedIn()): ?>
                              <li class="toggle-topbar menu-icon"><a href="#"><span>User</span></a></li>
<?php endif ?>
                        </ul>

                        <section class="top-bar-section">
                          <!-- Right Nav Section -->
                          <ul class="right">
<?php if ($user->isLoggedIn()): ?>
                            <li class="has-dropdown">
                                <a href="#"><?php echo Nette\Templating\Helpers::escapeHtml($user->identity->data['display_name'], ENT_NOQUOTES) ?></a>
                              <ul class="dropdown">
<?php if ($user->identity->data['role']==1): ?>
                                      <li><a href="<?php echo htmlSpecialChars($_control->link(":admin:homepage:default")) ?>">Admin</a></li>
<?php endif ?>
                                  <li><a href="#">Settings</a></li>
                                  <li><a href="<?php echo htmlSpecialChars($_control->link(":sign:out")) ?>">Logout</a></li>
                              </ul>
                            </li>
<?php endif ?>
                          </ul>

                          <!-- Left Nav Section -->
                          <ul class="left">
                                                      </ul>
                        </section>
                      </nav>
                                    
<?php $iterations = 0; foreach ($flashes as $flash): ?>                    <div class="flash <?php echo htmlSpecialChars($flash->type) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>
                  
<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>
              </section>

            <a class="exit-off-canvas"></a>

            </div>
          </div>
	</div>
        
        <script src="<?php echo htmlSpecialChars($basePath) ?>/bower_components/jquery/jquery.js"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/bower_components/foundation/js/foundation.min.js"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/bower_components/foundation/js/foundation/foundation.magellan.js"></script>
        <script>
          $(document).foundation();
        </script>
        
<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>
</body>
</html>
