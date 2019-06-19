<?php

namespace Contracts;

interface PostProviderInterface {
	/**
	* @return PostInterface[]
	*/
	public function getUltimos();
	/**
	* Aqui poderia ser especificado getAll, Save, ...
	*/
	
	public function getById($id);
	
	public function getByParam($parametro);

}