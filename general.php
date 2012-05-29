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
 * Returns $alternative if $value is empty
 * 
 * @param mixed $value
 * @param mixed $alternative
 *
 * @return mixed
 *
 * @author adael <https://gist.github.com/1351278>
 */
function ifEmpty($value, $alternative = ''){
    return empty($value) ? $alternative : $value;
}

/**
 * A very simple function to change the date from the UK
 * format to the American format.
 *
 * @param string $uk_date          Assumed to be in the format day month year
 * @param string $separator_input  What divides the date up goung in.
 * @param string $sepatator_output What divides the date up going out.
 *
 * @return string The date formatted to suit the US formatting.
 *
 * @author Toby Osbourn <toby.osbourn@googlemail.com>
 */

function makeUSDate($uk_date, $separator_input = '/', $sepatator_output = '/')
{
	list($day, $month, $year) = explode($separator_input, $uk_date);

    return $month.$sepatator_output.$day.$sepatator_output.$year;
}

/**
 * Does a really simple check and attempts to do some
 * fixing of names, so if people post a name in all caps
 * or all lower case it will be converted to a standard
 * case.
 * 
 * @param  string $unknown_name The name you want to check.
 * 
 * @return string               The fixed name.
 * 
 * @author  Toby Osbourn <toby.osbourn@googlemail.com>
 */
function fixNameCase($unknown_name)
{
    if (ctype_lower($unknown_name)) {
        $name = ucfirst($unknown_name);
    } elseif (ctype_upper($unknown_name)) {
        $name = ucfirst(strtolower($unknown_name));
    } else {
        $name = $unknown_name;
    }

    return $name;
}