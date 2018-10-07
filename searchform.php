<?php
	echo '<form role="search" method="get" class="search-form" action="'.home_url( '/' ).'">',
		 '<label>',

		 '<input type="search" class="search-field" placeholder="'.__( '挖个坑', 'wikiwp' ).'" value="'.get_search_query().'" name="s" title="'.__( '搜索', 'wikiwp' ).'" />',
		 '</label>',
		 '<input type="submit" class="search-submit" value="'.__( '搜索', 'wikiwp' ).'" />',
		 '</form>';