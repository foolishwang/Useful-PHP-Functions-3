<?PHP
/**
 * General functions that prove to be useful to have to hand.
 *
 * PHP version 5.2
 *
 * @category General
 * @package  PHPFunctions
 * @author   Toby Osbourn <toby.osbourn@googlemail.com>
 * @license  http://creativecommons.org/licenses/by/3.0/ CC by 3.0
 * @link     http://tosbourn.com
 */

/**
 * This will either return itself or a passed in alternative
 * depending on if the passed in variable is set or not.
 *
 * @param string $first       The main variable to check
 * @param string $alternative Option string to set the first variable to
 *
 * @return string Either $first or $alternative
 *
 * @author Toby Osbourn <toby.osbourn@googlemail.com>
 */

function issetOr($first, $alternative = null)
{
    $output = '';

    if (isset($first)) {
        $output = $first;
    } else {
        $output = $alternative;
    }

    return $output;
}

/**
 * A very simple function to change the date from the UK
 * format to the American format.
 *
 * @param string $uk_date          Assumed to be in the format day month year
 * @param string $separator_input  What divides the date up goung in.
 * @param string $sepatator_output What divides the date up going out.
 *
 * @author Toby Osbourn <toby.osbourn@googlemail.com>
 */

function makeUSDate($uk_date, $separator_input = '/', $sepatator_output = '/')
{
	list($day, $month, $year) = explode($separator_input, $uk_date);

    return $month.$sepatator_output.$day.$sepatator_output.$year;
}