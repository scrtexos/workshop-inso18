<?php
$find = preg_match('#/([0-9a-z]+)/#',$_SERVER['REQUEST_URI'],$ex);
if($find){
  $num = $ex[1];
}
else{
  $num = 'home';
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
            <li <?php if($num=='home') { echo 'class="active"'; } ?>><a href="/">Home</a></li>
            <li <?php if($num=='recon') { echo 'class="active"'; } ?>><a href="/recon/">Recon</a></li>
            <li <?php if($num=='sql1') { echo 'class="active"'; } ?>><a href="/sql1/">SQL #1</a></li>
            <li <?php if($num=='sql2') { echo 'class="active"'; } ?>><a href="/sql2/">SQL #2</a></li>
            <li <?php if($num=='os') { echo 'class="active"'; } ?>><a href="/os/">OS</a></li>
            <li <?php if($num=='xxe') { echo 'class="active"'; } ?>><a href="/xxe/">XXE</a></li>
            <li <?php if($num=='xslt') { echo 'class="active"'; } ?>><a href="/xslt/">XSLT</a></li>
            <li <?php if($num=='ssti') { echo 'class="active"'; } ?>><a href="/ssti/">SSTI</a></li>
            <li <?php if($num=='ssrf') { echo 'class="active"'; } ?>><a href="/ssrf1/">SSRF #1</a></li>
            <li <?php if($num=='fi') { echo 'class="active"'; } ?>><a href="/fi/">File Include</a></li>
            <li <?php if($num=='deserialize') { echo 'class="active"'; } ?>><a href="/deserialize/">Désérialization</a></li>
            <li <?php if($num=='race') { echo 'class="active"'; } ?>><a href="/race/">Race condition</a></li>
            <li <?php if($num=='access1') { echo 'class="active"'; } ?>><a href="/access1/">Accès #1</a></li>
            <li <?php if($num=='access2') { echo 'class="active"'; } ?>><a href="/access2/">Accès #2</a></li>
            <li <?php if($num=='password') { echo 'class="active"'; } ?>><a href="/password/">Mots de passe</a></li>
            <li <?php if($num=='prng') { echo 'class="active"'; } ?>><a href="/prng/">PRNG</a></li>
            <li <?php if($num=='csrf') { echo 'class="active"'; } ?>><a href="/csrf/">CSRF</a></li>
            <li <?php if($num=='filejack') { echo 'class="active"'; } ?>><a href="/filejack/" target="_blank">File Jacking</a></li>
            <li <?php if($num=='xss1') { echo 'class="active"'; } ?>><a href="/xss1/">XSS #1</a></li>
            <li <?php if($num=='xss2') { echo 'class="active"'; } ?>><a href="/xss2/">XSS #2</a></li>
            <li <?php if($num=='uxss') { echo 'class="active"'; } ?>><a href="/uxss/">uXSS</a></li>
            <li <?php if($num=='twittbook') { echo 'class="active"'; } ?>><a href="/twittbook/"  target="_blank">Vers XSS</a></li>
            <li <?php if($num=='csti') { echo 'class="active"'; } ?>><a href="/csti/">CSTI</a></li>
            <li <?php if($num=='jsonp') { echo 'class="active"'; } ?>><a href="/jsonp/">JSONP</a></li>
            <li <?php if($num=='css') { echo 'class="active"'; } ?>><a href="/css/">CSS</a></li>
            <li <?php if($num=='ecb') { echo 'class="active"'; } ?>><a href="/ecb/">ECB</a></li>
          </ul>
        </div><!--/.nav-collapse -->
<style> body { padding-top: 170px; } </style>
