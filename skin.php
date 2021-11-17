<?php
// esoDark/skin.php
// esoDark skin file.

if (!defined("IN_ESO")) exit;

class esoDark extends Skin {

var $name = "Dark";
var $version = "0.1.1";
var $author = "berd";
var $numberOfColors = 28;

// Add stylesheets and a favicon to the page header.
function init()
{
	global $config;
	$this->eso->addCSS("skins/base.css");
	$this->eso->addCSS("skins/{$config["skin"]}/styles.css");
	$this->eso->addCSS("skins/ie6.css", "ie6");
	$this->eso->addCSS("skins/ie7.css", "ie7");
	$this->eso->addToHead("<link rel='shortcut icon' type='image/ico' href='skins/{$config["skin"]}/favicon.ico'/>");
}

// Generate button HTML.
function button($attributes)
{
	$class = $id = $style = ""; $attr = " type='submit'";
	foreach ($attributes as $k => $v) {
		if ($k == "class") $class = " $v";
		elseif ($k == "id") $id = " id='$v'";
		elseif ($k == "style") $style = " style='$v'";
		else $attr .= " $k='$v'";
	}
	return "<span class='button$class'$id$style><input$attr/></span>";
}

}

?>
