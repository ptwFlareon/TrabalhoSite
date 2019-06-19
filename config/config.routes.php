<?php 

namespace Symfony\Component\Routing\Loader\Configurator;

return function(RoutingConfigurator $routes){
	$routes->add('home','/')
		->controller(['Site\Home','helloWorld']);
	
	$routes->add('produto','/produto')
		->controller(['Site\Produto','listarProdutos']);
		
	//Nova rota adicionada para resolver /blog no controller Site\Blog
	//no método ultimasPostagens
	
	$routes->add('blog','/blog')
		->controller(['Site\Blog','ultimasPostagens']);
		
	$routes->add('postx','/blog/{post}')
		->controller(['Site\Blog','viewPost'])
		->defaults(['post'=>0])
		->requirements(['post'=>'\d+']);
		
	$routes->add('blogp','/blog/pesquisar')
		->controller(['Site\Blog','pesquisar']);
};