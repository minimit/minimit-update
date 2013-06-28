
<script type="text/javascript">
/*
 * minimit-update 2.02
 * http://github.com/minimit/minimit-update
 * Copyright (C) 2013 by Riccardo Caroli http://www.minimit.com
 * Licensed under the MIT license http://www.opensource.org/licenses/mit-license.php
 */
// fix for ie8-
if(!window.getComputedStyle){
    window.getComputedStyle = function(el, pseudo){
        this.el = el;
        this.getPropertyValue = function(prop){
            var re = /(\-([a-z]){1})/g;
            if(prop == 'float') prop = 'styleFloat';
            if(re.test(prop)) {
                prop = prop.replace(re, function(){
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}
//
var style = window.getComputedStyle(document.documentElement);
var oldOverflowX = style.getPropertyValue('overflow-x');
var oldOverflowY = style.getPropertyValue('overflow-y');
</script>

<div id="mu">
	<style scoped>
	body{height:100%;overflow:hidden;}
	#mu {z-index:999999;display:block;position:fixed;width:100% !important;height:100% !important;left:0;top:0;margin:0;z-index:9999;font-family:sans-serif;font-size: 14px;line-height: 26px;}
	#mu img {margin-top:-30px;margin-bottom:30px;}
	#mu a:link, #mu a:visited {text-decoration:none;font-weight:bold;outline:none;}
	#mu a:hover, #mu a:active{outline: none;}
	#mu .mu-warning {display:none;}
	#browser-mu-warning, #javascript-mu-warning {padding-top:150px;text-align:center;position:absolute;width:640px;height:300px;top:50%;left:50%;margin:-200px 0 0 -320px;}
	#browser-mu-warning {display:none;}
	#mu-shade {display:block;position:absolute;z-index:-99;overflow:hidden;width:100%;height:100%;z-index:-1;}
	#mu-shade-inside {width:100%;height:100%;filter:progid:DXImageTransform.Microsoft.Alpha(opacity=100, finishopacity=0, style=2);}
	/* settings */
	#mu .mu-warning-<?php echo $muLang; ?> {display:block;}
	#mu {color:<?php echo $muTextColor; ?>;}
	#mu a:link, #mu a:visited {color:<?php echo $muTextColor; ?>;border-bottom:1px solid <?php echo $muTextColor; ?>;}
	#mu a:hover, #mu a:active{border-bottom:2px solid <?php echo $muTextColor; ?>;}
	#mu-shade {background:<?php echo $muOuterColor; ?>;
	}
	#mu-shade-inside {
		background:<?php echo $muInnerColor; ?>;
		background:-webkit-radial-gradient(50% 50%, circle, <?php echo $muInnerColor; ?>, <?php echo $muOuterColor; ?>);
		background:-moz-radial-gradient(50% 50%, circle, <?php echo $muInnerColor; ?>, <?php echo $muOuterColor; ?>);
		background:-ms-radial-gradient(50% 50%, circle, <?php echo $muInnerColor; ?>, <?php echo $muOuterColor; ?>);
		background:-o-radial-gradient(50% 50%, circle, <?php echo $muInnerColor; ?>, <?php echo $muOuterColor; ?>);
		background:radial-gradient(circle at 50% 50%, <?php echo $muInnerColor; ?>, <?php echo $muOuterColor; ?>);
	}
	#mu-shade.lte-ie9 #mu-shade-inside {
		background:<?php echo $muInnerColor; ?>;
		filter:progid:DXImageTransform.Microsoft.Alpha(opacity=100, finishopacity=0, style=2);
	}
	</style>
	<!--[if lte IE 9]> <div id="mu-shade" class="lte-ie9"> <![endif]-->
	<!--[if gte IE 10]><!--> <div id="mu-shade"> <!--<![endif]-->
		<div id="mu-shade-inside"></div>
	</div>
	<div id="javascript-mu-warning">
		<!--[if gte IE 7]><!--><?php if($muImage){echo '<img src="'.$muImage.'" alt="logo" />';} ?><!--<![endif]-->
		<div class="mu-warning mu-warning-en">This website need Javascript activated for a correct browsing<br/><a href="http://support.google.com/bin/answer.py?hl=en&amp;answer=23852" target="_blank">Please follow this instructions to activate Javascript</a></div>
		<div class="mu-warning mu-warning-es">Esta p&aacute;gina web necesita tener Javascript activado para una navegaci&oacute;n correcta<br/><a href="http://support.google.com/bin/answer.py?hl=es&amp;answer=23852" target="_blank">Por favor, siga estas instrucciones para activar Javascript</a></div>
		<div class="mu-warning mu-warning-de">Diese Website ben&ouml;tigt Javascript f&uuml;r eine korrekte Suche<br/><a href="http://support.google.com/bin/answer.py?hl=de&amp;answer=23852" target="_blank">Bitte folgen Sie diesen Anweisungen, um Javascript zu aktivieren</a></div>
		<div class="mu-warning mu-warning-fr">Javascript doit &ecirc;tre activ&eacute; sur votre navigateur pour une visualisation correcte de ce site<br/><a href="http://support.google.com/bin/answer.py?hl=fr&amp;answer=23852" target="_blank">Veuillez suivre ces instructions pour activer Javascript</a></div>
		<div class="mu-warning mu-warning-it">Questo sito richiede Javascript abilitato per un corretto funzionamento<br/><a href="http://support.google.com/bin/answer.py?hl=it&amp;answer=23852" target="_blank">Per favore segui queste istruzioni per abilitare Javascript</a></div>
	</div>
	<div id="browser-mu-warning">
		<!--[if gte IE 7]><!--><?php if($muImage){echo '<img src="'.$muImage.'" alt="logo" />';} ?><!--<![endif]-->
		<div class="mu-warning mu-warning-en">You are using an outdated browser not supported by this website<br/><a href="http://browser-update.org/en/update.html" target="_blank">Upgrade your browser, we recomend the latest version of Chrome</a></div>
		<div class="mu-warning mu-warning-es">Usted est&aacute; utilizando un navegador obsoleto que esta p&aacute;gina web no admite<br/><a href="http://browser-update.org/es/update.html" target="_blank">Actualice su navegador, le recomendamos la &uacute;ltima versi&oacute;n de Chrome</a></div>
		<div class="mu-warning mu-warning-de">Sie verwenden einen veralteten Browser, der nicht von dieser Website unterst&uuml;tzt wird<br/><a href="http://browser-update.org/de/update.html" target="_blank">Aktualisieren Sie Ihren Browser, wir empfehlen die neueste Version von Chrome</a></div>
		<div class="mu-warning mu-warning-fr">Vous utilisez une version de navigateur obsol&egrave;te qui n'est pas compatible avec ce site web<br/><a href="http://browser-update.org/fr/update.html" target="_blank">Veuillez mettre &agrave; niveau votre navigateur, nous vous recommandons Chrome</a></div>
		<div class="mu-warning mu-warning-it">Stai utilizzando un browser obsoleto non supportato da questo sito<br/><a href="http://browser-update.org/it/update.html" target="_blank">Aggiorna il tuo browser, raccomandiamo l'ultima versione di Chrome</a></div>
	</div>
</div>

<script type="text/javascript">
var oldbrowser = false;
var ua = navigator.userAgent;
var muIeVersion = <?php echo $muIeVersion; ?>;
var muFfVersion = <?php echo $muFfVersion; ?>;
var muSafVersion = <?php echo $muSafVersion; ?>;
var muOprVersion = <?php echo $muOprVersion; ?>;
if(/bot|googlebot|slurp|mediapartners|adsbot|silk|android|phone|bingbot|google web preview|like firefox|chromeframe|seamonkey|opera mini|min|meego|netfront|moblin|maemo|arora|camino|flot|k-meleon|fennec|kazehakase|galeon|android|mobile|iphone|ipod|ipad|epiphany|rekonq|symbian|webos/i.test(ua)){
}else if(/MSIE.(\d+\.\d+)/i.test(ua)){var ieversion = new Number(RegExp.$1);if(ieversion < muIeVersion){oldbrowser = true;}
}else if(/Firefox.(\d+\.\d+)/i.test(ua)){var ffversion = new Number(RegExp.$1);if(ffversion < muFfVersion){oldbrowser = true;}
}else if(/Safari.(\d+)/i.test(ua)){var vreg = /Version[\/\s](\d+\.\d+)/.test(ua);var safversion = new Number(RegExp.$1);if(safversion < muSafVersion){oldbrowser = true;}
}else if(/Opera.(\d+\.?\d+)/i.test(ua)){var vreg = /Version[\/\s](\d+\.\d+)/.test(ua);var oprversion = new Number(RegExp.$1);if(oprversion < muOprVersion){oldbrowser = true;}}
if(oldbrowser){
	document.getElementById('javascript-mu-warning').style.display = 'none';
	document.getElementById('browser-mu-warning').style.display = 'block';
}else{
	document.getElementById('mu').style.display = 'none';
	document.documentElement.style.overflowX = oldOverflowX;
	document.documentElement.style.overflowY = oldOverflowY;
	document.getElementsByTagName('body')[0].style.overflow = 'visible';
}
</script>
