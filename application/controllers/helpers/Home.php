<?php

 class Zend_Controller_Action_Helper_Home extends Zend_Controller_Action_Helper_Abstract{
 	function __invoke(){
 		$home=new Application_Model_DbTable_Home();
 		$data_home=$home->fetchAll();
 		$html = '
 			<div id="anchor1"></div>
			<section id="home" class="clear"></section>
			<div class="main-title">
				<div class="title-container">
					<ul>
						<li class="t-current">'.$data_home[0]['titre'].'</li>
					</ul>
					<div class="spacer"></div>
						<div class="second-title">'.$data_home[0]['slogan'].'</div>
            <a href="#anchor2"><div class="buy-logo">'.$data_home[0]['bouton'].'<span></span></div></a>
				</div>
			</div>
			<div id="logx"></div>
			<header class="header">
			<div class="logo"><span><span></span></span>solido</div>
				<nav id="nav2" role="navigation">
					<a class="jump-menu" title="Show navigation">Show navigation</a>
					<ul>
						<li class="current"><a href="#anchor1">home</a></li>
						<li><a href="#anchor2">about</a></li>
						<li><a href="#anchor3">portfolio</a></li>
						<li><a href="#anchor4">contact</a></li>
					</ul>
				</nav>
				<nav class="menu">
					<ul id="nav">
						<li class="current"><a href="#anchor1">home</a></li>
						<li><a href="#anchor2">about</a></li>
						<li><a href="#anchor3">portfolio</a></li>
						<li><a href="#anchor4">contact</a></li>
					</ul>
				</nav>
			</header>';
		return $html;
	}
	

}

?>