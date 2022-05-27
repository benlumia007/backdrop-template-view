<?php
/**
 * Engine class.
 *
 * A wrapper around the `View` class with methods for quickly working with views
 * without having to manually instantiate a view object.  It's also useful
 * because it passes an `$engine` variable to all views.
 *
 * @package   Backdrop Core
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @author    Benjamin Lu ( https://getbenonit.com )
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\Template\View\Engine;
use Benlumia007\Backdrop\Proxies\App;
use Benlumia007\Backdrop\Template\View\View\Component as View;
use Benlumia007\Backdrop\Tools\Collection;

/**
 * Egine class
 * 
 * @since  1.0.0
 * @access public
 */
class Component {
	/**
	 * Returns a View object.
	 *
	 * @since  1.0.0
	 * @access public
     * @param  string           $name
     * @param  array|string     $slugs
     * @param  array|Collection $data
	 * @return View
	 */
	public function view( $name, $slugs = [], $data = [] ) {
		
		if ( ! $data instanceof Collection ) {
			$data = new Collection( ( array ) $data );
		}

		$data->add( 'engine', $this );

		return App::resolve( View::class, compact( 'name', 'slugs', 'data' ) );
	}

	/**
	 * Outputs a view template.
	 *
	 * @since  1.0.0
	 * @access public
     * @param  string           $name
     * @param  array|string     $slugs
     * @param  array|Collection $data
	 * @return void
	 */
	public function display( $name, $slugs = [], $data = [] ) {

		$this->view( $name, $slugs, $data )->display();
	}

	/**
	 * Returns a view template as a string.
	 *
	 * @since  1.0.0
	 * @access public
     * @param  string           $name
     * @param  array|string     $slugs
     * @param  array|Collection $data
	 * @return string
	 */
	public function render( $name, $slugs = [], $data = [] ) {

		return $this->view( $name, $slugs, $data )->render();
	}
}