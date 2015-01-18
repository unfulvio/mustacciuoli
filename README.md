#Mustacciuoli

Adds **[Mustache](http://mustache.github.io/) template engine** support to [WordPress](http://www.wordpress.org) in one of its [PHP](https://github.com/bobthecow/mustache.php) and one of its [Javascript](https://github.com/janl/mustache.js) implementations so you can use Mustache template files in your theme development and reuse the same template files across two languages.

An interesting case use would be combining Mustache with [WordPress JSON API](http://wp-api.org/) to supply data to template files for example.  


## Installation

Install the plugin as you would with any WordPress plugin in your `wp-content/plugins/` directory or equivalent.   

Once installed, activate Mustacciuoli from WordPress plugins dashboard page and you're ready to go, Mustache PHP library will be loaded already and mustache.js script enqueued.


## Usage (PHP)

To render a template file in PHP you need to follow [Mustache.php instructions](https://github.com/bobthecow/mustache.php/wiki), for example:

    // instantiate Mustache
	$mustache = new Mustache_Engine( array(
		'loader'          => new Mustache_Loader_FilesystemLoader( 'your-path-to/templates' ),
		'partials_loader' => new Mustache_Loader_FilesystemLoader( 'your-path-to/templates/partials' ),
		'charset'         => get_bloginfo( 'charset' ),
		'cache'           => 'your-path-to/cache',
	) );

	// load template in a variable
	$template = $mustache->loadTemplate( 'your-template-file' );
	// render (output) the compiled template by echoing it
	echo $template->render( array( 'your-vars') );

You could register `$mustache` as a global in your `functions.php` file and use it across your theme, so you won't need to instatiate Mustache multiple times.


## Usage (Javascript)

Refer to [mustache.js documentation](https://github.com/janl/mustache.js).

Don't need the JS support? If you want to disable mustache.js, you can de-queue the script with this code in your theme `functions.php` file (an example):

	function dequeue_mustacciuoli() {
   		wp_dequeue_script( 'mustacciuoli' );
	}
	add_action( 'wp_print_scripts', 'dequeue_mustacciuoli', 100 );

	
## Unavailability on wordpress.org

This plugin is currently not available on [WordPress.org Plugin's directory](https://wordpress.org/plugins/) because frameworks, boilerplates, and libraries such as those included in this plugin are deemed not a good fit for the official repository for the time being. Therefore, please refer to this repo on Github for updates/support, etc. Thank you.
