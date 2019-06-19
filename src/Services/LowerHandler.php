<?php

namespace Services;

use Contracts\InputHandlerInterface;

class LowerHandler extends SearchHandler {
	
	public function handleRequest($post) {
		
		$newInput = strtolower($post);		
		if (!$this->getNext()) {
			return $newInput;
		}
		return $this->getNext()->handleRequest($newInput);
	}

}