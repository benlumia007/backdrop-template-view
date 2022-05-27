<?php
/**
 * Engine interface
 *
 * @package   Backdrop
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2019-2022. Benjamin Lu
 * @link      https://github.com/benlumia007/backdrop-template-view
 * @license   https://www.gnu.org/licenses/gpl-2.0.html

 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\Template\View\Contracts;

/**
 * Engine interface.
 * 
 * @since  1.0.0
 * @access public
 */
interface Engine {
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
    public function view( $name, $slugs = [], $data = [] );

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
    public function display( $name, $slugs = [], $data = [] );

    /**
     * Returns a view template as a string.
     * 
     * @since  1.0.0
     * @access public
     * @param  string           $name
     * @param  array|string     $slugs
     * @param  array|Collection $data
     * @return void
     */
    public function render( $name, $slugs = [], $data = [] );
}