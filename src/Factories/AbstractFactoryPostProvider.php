<?php

namespace Factories;

abstract class AbstractFactoryPostProvider {
	
	/**
	* este método retorna a chamada ao método create
	* o método create será implementado na fabrica concreta
	*/
	public function getPostProvider(){
		return $this->create();
	}
	
	public abstract function create();
	
}