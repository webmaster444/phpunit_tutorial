<?php
namespace App;

class Box{
	protected $items = [];
	public function __construct($items = []){
		$this->items = $items;
	}

	public function has($item){
		return in_array($item, $this->items);
	}

	public function takeOne(){
		return array_shift($this->items);
	}

	public function startsWith($letter){
		return array_filter($this->items, function ($item) use ($letter){
			return stripos($item, $letter) === 0;
		});
	}
}
?>