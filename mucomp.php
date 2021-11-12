<?php
/**
 * MU Compensation Translation
 *
 * Compensation Listing for HR
 *
 * @package  MU Compensation Translation
 *
 * Plugin Name:  MU Compensation Translation
 * Plugin URI: https://www.marshall.edu
 * Description: Compensation Listing for HR
 * Version: 1.0
 * Author: Christopher McComas
 */

/**
 * Add 'alpha' to the acceptable URL parameters
 *
 * @param array $vars The array of acceptable URL parameters.
 * @return array
 */
function mu_hr_compensation_url_parameters( $vars ) {
	$vars[] = 'alpha';
	return $vars;
}
add_filter( 'query_vars', 'mu_hr_compensation_url_parameters' );

/**
 * Shortcode to display the compensation table
 *
 * @return string
 */
function mu_hr_compensation_shortcode() {
	$html  = '<h2>Alpha Search</h2>';
	$html .= '<div class="flex flex-wrap space-x-1 justify-center">';
	$html .= '<a href="?alpha=A" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">A</a>';
	$html .= '<a href="?alpha=B" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">B</a>';
	$html .= '<a href="?alpha=C" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">C</a>';
	$html .= '<a href="?alpha=D" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">D</a>';
	$html .= '<a href="?alpha=E" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">E</a>';
	$html .= '<a href="?alpha=F" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">F</a>';
	$html .= '<a href="?alpha=G" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">G</a>';
	$html .= '<a href="?alpha=H" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">H</a>';
	$html .= '<a href="?alpha=I" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">I</a>';
	$html .= '<a href="?alpha=J" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">J</a>';
	$html .= '<a href="?alpha=K" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">K</a>';
	$html .= '<a href="?alpha=L" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">L</a>';
	$html .= '<a href="?alpha=M" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">M</a>';
	$html .= '<a href="?alpha=N" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">N</a>';
	$html .= '<a href="?alpha=O" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">O</a>';
	$html .= '<a href="?alpha=P" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">P</a>';
	$html .= '<a href="?alpha=Q" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">Q</a>';
	$html .= '<a href="?alpha=R" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">R</a>';
	$html .= '<a href="?alpha=S" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">S</a>';
	$html .= '<a href="?alpha=T" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">T</a>';
	$html .= '<a href="?alpha=U" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">U</a>';
	$html .= '<a href="?alpha=V" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">V</a>';
	$html .= '<a href="?alpha=W" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">W</a>';
	$html .= '<a href="?alpha=X" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">X</a>';
	$html .= '<a href="?alpha=Y" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">Y</a>';
	$html .= '<a href="?alpha=Z" class="mb-1 text-base lg:text-lg mb-2 py-2 px-3 bg-gray-100 text-gray-700 hover:bg-white hover:text-gray-800 no-underline hover:underline">Z</a>';
	$html .= '</div>';

	$config = include plugin_dir_path( __FILE__ ) . 'config.php';
	$mysqli = new mysqli( $config['server'], $config['user'], $config['password'], $config['database'] );

	if ( $mysqli->connect_errno ) {
		echo 'Sorry, this website is experiencing problems.';
		exit;
	}

	if ( get_query_var( 'alpha' ) ) {
		$alpha = get_query_var( 'alpha' );
	} else {
		$alpha = 'A';
	}

	$sql = "SELECT * FROM mu_compensation WHERE title LIKE '$alpha%' ORDER BY title ASC";

	if ( ! $result = $mysqli->query( $sql ) ) {
		echo 'Sorry, the website is experiencing problems.';
		exit;
	}

	if ( 0 === $result->num_rows ) {
		echo 'We could not find a match for the letter ' . esc_attr( $alpha ) . ', sorry about that. Please try again.';
		exit;
	}

	$html .= '<table class="table w-full table-striped table-bordered table-services">';
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>Current Title</th>';
	$html .= '<th class="w-1/6 text-center">New Pay Grade</th>';
	$html .= '<th class="w-1/6 text-center">Salary Range Min</th>';
	$html .= '<th class="w-1/6 text-center">Salary Range Mid</th>';
	$html .= '<th class="w-1/6 text-center">Salary Range Max</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	while ( $res = $result->fetch_assoc() ) {
		$html .= '<tr>';
		$html .= '<td><a href="http://www.marshall.edu/development/hrfiles/' . $res['id'] . '.pdf">' . $res['title'] . '</a></td>';
		$html .= '<td>' . $res['pay_grade'] . '</td>';
		$html .= '<td>' . $res['salary_min'] . '</td>';
		$html .= '<td>' . $res['salary_mid'] . '</td>';
		$html .= '<td>' . $res['salary_max'] . '</td>';
		$html .= '</tr>';
	}
	$html .= '</tbody>';
	$html .= '</table>';

	$result->free();
	$mysqli->close();
	return $html;
}
add_shortcode( 'mu-hr-compensation', 'mu_hr_compensation_shortcode' );

/**
 * Proper way to enqueue scripts and styles
 */
function mu_hr_compensation_scripts() {
	wp_enqueue_style( 'mu-hr-compensation', plugin_dir_url( __FILE__ ) . 'css/mu-hr-compensation.css', '', true );
}
add_action( 'wp_enqueue_scripts', 'mu_hr_compensation_scripts' );
