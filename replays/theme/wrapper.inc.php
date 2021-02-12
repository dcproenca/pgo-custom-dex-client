<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//http://protected-sands-88246.herokuapp.com//style/font-awesome.css?0.6182783571027584" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.7396896422335248" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.6841027197560536" />
	<link rel="stylesheet" href="//http://protected-sands-88246.herokuapp.com//style/battle.css?0.943922625785427" />
	<link rel="stylesheet" href="//http://protected-sands-88246.herokuapp.com//style/replay.css?0.2637198106508094" />
	<link rel="stylesheet" href="//http://protected-sands-88246.herokuapp.com//style/utilichart.css?0.031070793898532845" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6195026463265012"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5020138145779247" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2232194129331111">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1574488365620219">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.0383556004305623">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.8349941914730166">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//http://protected-sands-88246.herokuapp.com//js/lib/jquery-1.11.0.min.js?0.7008675856047917"></script>
	<script src="//http://protected-sands-88246.herokuapp.com//js/lib/lodash.core.js?0.5994055270506613"></script>
	<script src="//http://protected-sands-88246.herokuapp.com//js/lib/backbone.js?0.366370972167295"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4166233158310746"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//http://protected-sands-88246.herokuapp.com//js/lib/jquery-cookie.js?0.506822790402278"></script>
	<script src="//http://protected-sands-88246.herokuapp.com//js/lib/html-sanitizer-minified.js?0.12266539991556469"></script>
	<script src="//http://protected-sands-88246.herokuapp.com//js/battle-sound.js?0.8662888124172909"></script>
	<script src="//http://protected-sands-88246.herokuapp.com//config/config.js?0.9324125256699909"></script>
	<script src="//http://protected-sands-88246.herokuapp.com//js/battledata.js?0.6659934041256179"></script>
	<script src="//http://protected-sands-88246.herokuapp.com//data/pokedex-mini.js?0.6745288262060636"></script>
	<script src="//http://protected-sands-88246.herokuapp.com//data/pokedex-mini-bw.js?0.18584420217689468"></script>
	<script src="//http://protected-sands-88246.herokuapp.com//data/graphics.js?0.08845467381275696"></script>
	<script src="//http://protected-sands-88246.herokuapp.com//data/pokedex.js?0.14502419349419315"></script>
	<script src="//http://protected-sands-88246.herokuapp.com//data/items.js?0.8025956148963411"></script>
	<script src="//http://protected-sands-88246.herokuapp.com//data/moves.js?0.7322831540954373"></script>
	<script src="//http://protected-sands-88246.herokuapp.com//data/abilities.js?0.2718280794046142"></script>
	<script src="//http://protected-sands-88246.herokuapp.com//data/teambuilder-tables.js?0.9859341394735539"></script>
	<script src="//http://protected-sands-88246.herokuapp.com//js/battle-tooltips.js?0.4725354616691755"></script>
	<script src="//http://protected-sands-88246.herokuapp.com//js/battle.js?0.7088175052402454"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
