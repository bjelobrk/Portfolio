<?php
include_once 'prevod/common.php';
class Page {
	private $title, $stylesheets=array(), $javascripts=array(), $body;
	
	function Page() {
		$this->addCSS('stylesheets/screen.css');
                $this->addJavascript('js/scroll.js');
                $this->addJavascript('js/smoothscroll.js');
                $this->addJavascript('js/top.js');
                $this->addJavascript('js/form.js');
                $this->addJavascript('js/popup.js');
                $this->addJavascript('js/mobile_menu.js');
                
               
	}
	
	function setTitle($title) {
		$this->title = $title;
	}
	
	function addCSS($path) {
		$this->stylesheets[] = $path;
	}
	
	function addJavascript($path) {
		$this->javascripts[] = $path;
	}
	
	function startBody() {
		ob_start();
	}
	
	function endBody() {
		$this->body = ob_get_clean();
	}
	
	function render($path) {
		ob_start();
		include($path);
		return ob_get_clean();
	}
}