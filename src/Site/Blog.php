<?php

namespace Site;

use Services\LowerHandler;
use Services\SearchHandler;
use Services\StringInputFilter;
use Helpers\ViewModel;
use Symfony\Component\HttpFoundation\Request;
use Config\Post\ProviderFactoryConfig as Pfc;

class Blog 
{
	/**
	*	Este método tem a responsabilidade de lista as últimas postagens 
	*/
	public function ultimasPostagens()
	{
		$provider = Pfc::getPostProviderFactory()->getPostProvider();
		return new ViewModel('blog.lista',['posts'=>$provider->getUltimos()]);
	}
	
	public function viewPost(Request $req) {
		$idp = $req->attributes->get('post',0);
		$provider = Pfc::getPostProviderFactory()->getPostProvider();
		$res = $provider->getById($idp);
		return new ViewModel('blog.detail',['post'=>$res]);
	}
	
	public function pesquisar(Request $req) {
		$h1 = new SearchHandler();
		$h2 = new StringInputFilter();
		$h1->setNext($h2);
		
		$h3 = new LowerHandler();
		$h2->setNext($h3);
		
		$provider = Pfc::getPostProviderFactory()->getPostProvider();
		return new ViewModel('blog.lista',['posts'=>$provider->getByParam($h1->handleRequest($_POST))]);
	}

}