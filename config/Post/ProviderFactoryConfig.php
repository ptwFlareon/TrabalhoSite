<?php

namespace Config\Post;

use Factories\ManualPostProviderFactory;
use Factories\SqlitePostProviderFactory;

class ProviderFactoryConfig {
	
	public static function getPostProviderFactory(){
		return new SqlitePostProviderFactory();
	}

}