<?php

namespace Services;

use Contracts\PostProviderInterface;

class ManualPostProvider implements PostProviderInterface
{
	
	public function getUltimos() {
		$out = [];
		for($i=0; $i<10; $i++) {
			$out[] = [
				'titulo' => "Post ".($i+1),
				'conteudo' => "Post para teste ".($i+1),
				'miniatura' => 'https://picsum.photos/200',
				'autor' => 'fulano de tal'
			];
		}
		return $out;
	}
	
	public function getById($id) {
		$out = [];
		for($i=0; $i<1; $i++) {
			$out[] = [
				'titulo' => "Post ".($i+1),
				'conteudo' => "Post para teste ".($i+1),
				'miniatura' => 'https://picsum.photos/'.$id,
				'autor' => 'fulano de tal'
			];
		}
		return $out;
	}
	
	/*Não implementado*/
	public function getByParam($parametro) {
		$out = [];
		for($i=0; $i<1; $i++) {
			$out[] = [
				'titulo' => "Post ".($i+1),
				'conteudo' => "Post para teste ".($i+1),
				'miniatura' => 'https://picsum.photos/'.$id,
				'autor' => 'fulano de tal'
			];
		}
		return $out;
	}
	
}