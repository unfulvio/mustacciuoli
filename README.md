#Mustacciuoli

Adds **[Mustache](http://mustache.github.io/) template engine** support to [WordPress](http://www.wordpress.org) in one of its [PHP](https://github.com/bobthecow/mustache.php) and one of its [Javascript](https://github.com/twitter/hogan.js) implementations so you can use Mustache template files in your theme development and reuse the same template files across two languages.

An interesting case use would be combining Mustache with [WordPress JSON API](http://wp-api.org/) to supply data to template files for example.  

## Installation

Install the plugin as you would with any WordPress plugin in your `wp-content/plugins/` directory or equivalent.   

 **Note:** If you are cloning or manually downloading this git repo from GitHub, make sure to init git submodule dependencies with:

    $ git submodule init
    $ git submodule update

This step is not necessary if you happen to download this plugin from WordPress.org or a compiled package.

Once installed, activate Mustacciuoli from WordPress plugins dashboard page and you're ready to go, Mustache PHP library will be loaded already and Hogan.js script enqueued (Hogan.js is used instead of Mustache.js as the former seems to be better maintained by Twitter and faster).

## Usage (PHP)

To render a template file in PHP you need to follow [Mustache.php instructions](https://github.com/bobthecow/mustache.php/wiki), for example:

	$mustache = new Mustache_Engine( array(
		'loader'          => new Mustache_Loader_FilesystemLoader( 'your-path-to/templates' ),
		'partials_loader' => new Mustache_Loader_FilesystemLoader( 'your-path-to/templates/partials' ),
		'charset'         => get_bloginfo( 'charset' ),
		'cache'           => 'your-path-to/cache',
	) );
	$template = $mustache->loadTemplate( 'your-template-file' );
	echo $template->render( array( 'your-vars') );

You could set `$mustache` as a global in your `functions.php` file and use it across your theme, so you won't need to instatiate Mustache multiple times.

## Usage (Javascript)

Follow [Hogan.js documentation](http://twitter.github.io/hogan.js/).

Don't need the JS support? If you want to disable Hogan, you can de-queue the script with this code in your theme `functions.php` file (an example):

	function dequeue_hogan_js() {
   		wp_dequeue_script( 'hogan' );
	}
	add_action( 'wp_print_scripts', 'dequeue_hogan_js', 100 );

You can use this method if you don't want Hogan.js but rather enqueue another implementation of Mustache, like [Mustache.js](https://github.com/janl/mustache.js).
