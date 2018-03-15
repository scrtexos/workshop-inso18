<?php
$find = preg_match('#/([0-9-]+)/#',$_SERVER['REQUEST_URI'],$ex_num);
if($find){
  $num = $ex_num[1];
}
else{
  $num = '0';
}
?>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php if($num=='0') { echo 'class="active"'; } ?>><a href="/">Home</a></li>
            <li <?php if($num=='3') { echo 'class="active"'; } ?>><a href="/sql1/">SQL #1</a></li>
            <li <?php if($num=='4') { echo 'class="active"'; } ?>><a href="/sql2/">SQL #2</a></li>
            <li <?php if($num=='4-2') { echo 'class="active"'; } ?>><a href="/os/">OS</a></li>
            <li <?php if($num=='5') { echo 'class="active"'; } ?>><a href="/xxe/">XXE</a></li>
            <li <?php if($num=='5-2') { echo 'class="active"'; } ?>><a href="/xslt/">XSLT</a></li>
            <li <?php if($num=='6') { echo 'class="active"'; } ?>><a href="/fi/">File Include</a></li>
            <li <?php if($num=='7') { echo 'class="active"'; } ?>><a href="/deserialize/">Désérialization</a></li>
            <li <?php if($num=='7-2') { echo 'class="active"'; } ?>><a href="/race/">Race condition</a></li>
            <li <?php if($num=='8') { echo 'class="active"'; } ?>><a href="/access1/">Accès #1</a></li>
            <li <?php if($num=='9') { echo 'class="active"'; } ?>><a href="/access2/">Accès #2</a></li>
            <li <?php if($num=='0') { echo 'class="active"'; } ?>><a href="/password/">Mots de passe</a></li>
            <li <?php if($num=='3') { echo 'class="active"'; } ?>><a href="/prng/">PRNG</a></li>
            <li <?php if($num=='4') { echo 'class="active"'; } ?>><a href="/csrf/">CSRF</a></li>
            <li <?php if($num=='4') { echo 'class="active"'; } ?>><a href="/filejack/">File Jacking</a></li>
            <li <?php if($num=='4-2') { echo 'class="active"'; } ?>><a href="/xss1/">XSS #1</a></li>
            <li <?php if($num=='5') { echo 'class="active"'; } ?>><a href="/xss2/">XSS #2</a></li>
            <li <?php if($num=='5-2') { echo 'class="active"'; } ?>><a href="/twittbook/">Vers XSS</a></li>
            <li <?php if($num=='6') { echo 'class="active"'; } ?>><a href="/csti/">CSTI</a></li>
            <li <?php if($num=='7') { echo 'class="active"'; } ?>><a href="/jsonp/">JSONP</a></li>
            <li <?php if($num=='7-2') { echo 'class="active"'; } ?>><a href="/css/">CSS</a></li>
            <li <?php if($num=='8') { echo 'class="active"'; } ?>><a href="/ecb/">ECB</a></li>
          </ul>
        </div><!--/.nav-collapse -->