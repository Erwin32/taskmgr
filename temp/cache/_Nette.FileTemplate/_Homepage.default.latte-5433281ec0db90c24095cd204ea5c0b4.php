<?php //netteCache[01]000401a:2:{s:4:"time";s:21:"0.62032700 1385395330";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:81:"/Users/petrpallas/development/template/Nette/app/templates/Homepage/default.latte";i:2;i:1385394962;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:28:"$WCREV$ released on $WCDATE$";}}}?><?php

// source file: /Users/petrpallas/development/template/Nette/app/templates/Homepage/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '6j153bp8gv')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb66ff290319_content')) { function _lb66ff290319_content($_l, $_args) { extract($_args)
?>    <div class="row">
      <div class="large-12 columns">
        <h1>Welcome to Foundation</h1>
      </div>
    </div>
    
    <div class="row">
      <div class="large-12 columns">
      	<div class="panel">
	        <h3>We&rsquo;re stoked you want to try Foundation! </h3>
	        <p>To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>
	        <p>Once you've exhausted the fun in this document, you should check out:</p>
	        <div class="row">
	        	<div class="large-4 medium-4 columns">
	    		<p><a href="http://foundation.zurb.com/docs">Foundation Documentation</a><br />Everything you need to know about using the framework.</p>
	    	</div>
	        	<div class="large-4 medium-4 columns">
	        		<p><a href="http://github.com/zurb/foundation">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</p>
	        	</div>
	        	<div class="large-4 medium-4 columns">
	        		<p><a href="http://twitter.com/foundationzurb">@foundationzurb</a><br />Ping us on Twitter if you have questions. If you build something with this we'd love to see it (and send you a totally boss sticker).</p>
	        	</div>        
					</div>
      	</div>
      </div>
    </div>

    <div class="row">
      <div class="large-8 medium-8 columns">
        <h5>Here&rsquo;s your basic grid:</h5>
        <!-- Grid Example -->

        <div class="row">
          <div class="large-12 columns">
            <div class="callout panel">
              <p><strong>This is a twelve column section in a row.</strong> Each of these includes a div.panel element so you can see where the columns are - it's not required at all for the grid.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="large-6 medium-6 columns">
            <div class="callout panel">
              <p>Six columns</p>
            </div>
          </div>
          <div class="large-6 medium-6 columns">
            <div class="callout panel">
              <p>Six columns</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <p>Four columns</p>
            </div>
          </div>
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <p>Four columns</p>
            </div>
          </div>
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <p>Four columns</p>
            </div>
          </div>
        </div>
        
        <hr />
                
        <h5>We bet you&rsquo;ll need a form somewhere:</h5>
        <form>
				  <div class="row">
				    <div class="large-12 columns">
				      <label>Input Label</label>
				      <input type="text" placeholder="large-12.columns" />
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-4 medium-4 columns">
				      <label>Input Label</label>
				      <input type="text" placeholder="large-4.columns" />
				    </div>
				    <div class="large-4 medium-4 columns">
				      <label>Input Label</label>
				      <input type="text" placeholder="large-4.columns" />
				    </div>
				    <div class="large-4 medium-4 columns">
				      <div class="row collapse">
				        <label>Input Label</label>
				        <div class="small-9 columns">
				          <input type="text" placeholder="small-9.columns" />
				        </div>
				        <div class="small-3 columns">
				          <span class="postfix">.com</span>
				        </div>
				      </div>
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-12 columns">
				      <label>Select Box</label>
				      <select>
				        <option value="husker">Husker</option>
				        <option value="starbuck">Starbuck</option>
				        <option value="hotdog">Hot Dog</option>
				        <option value="apollo">Apollo</option>
				      </select>
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-6 medium-6 columns">
				      <label>Choose Your Favorite</label>
				      <input type="radio" name="pokemon" value="Red" id="pokemonRed" /><label for="pokemonRed">Radio 1</label>
				      <input type="radio" name="pokemon" value="Blue" id="pokemonBlue" /><label for="pokemonBlue">Radio 2</label>
				    </div>
				    <div class="large-6 medium-6 columns">
				      <label>Check these out</label>
				      <input id="checkbox1" type="checkbox" /><label for="checkbox1">Checkbox 1</label>
				      <input id="checkbox2" type="checkbox" /><label for="checkbox2">Checkbox 2</label>
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-12 columns">
				      <label>Textarea Label</label>
				      <textarea placeholder="small-12.columns"></textarea>
				    </div>
				  </div>
				</form>
      </div>     

      <div class="large-4 medium-4 columns">
			  <h5>Try one of these buttons:</h5>
			  <p><a href="#" class="small button">Simple Button</a><br />
        <a href="#" class="small radius button">Radius Button</a><br />
        <a href="#" class="small round button">Round Button</a><br />            
        <a href="#" class="medium success button">Success Btn</a><br />
        <a href="#" class="medium alert button">Alert Btn</a><br />
        <a href="#" class="medium secondary button">Secondary Btn</a></p>           
				<div class="panel">
        	<h5>So many components, girl!</h5>
        	<p>A whole kitchen sink of goodies comes with Foundation. Checkout the docs to see them all, along with details on making them your own.</p>
        	<a href="http://foundation.zurb.com/docs/" class="small button">Go to Foundation Docs</a>          
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