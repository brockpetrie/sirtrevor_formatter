<?php

require_once EXTENSIONS . '/sirtrevor_formatter/vendor/autoload.php';

Class FormatterSirTrevor extends TextFormatter{

	private $converter;

	public function __construct() {
		if (!$this->converter) {
			$this->converter = new Sioen\Converter();
		}
	}

	public function about(){
		return array('name' => 'Sir Trevor JS');
	}

	public function run($string){

		return trim($this->converter->toHtml($string));

	}

}