<?php defined('BASEPATH') OR exit('No direct script access allowed');

// use Dompdf\Dompdf;
use Dompdf\Options; 
// Reference the Font Metrics namespace 
use Dompdf\FontMetrics; 

/**
 * 
 */
class Pdf1
{
	
	public function __construct()
	{
		require_once dirname(__FILE__).'/dompdf/autoload.inc.php';

		$options = new Options(); 

		$CI =& get_instance();
		$CI->dompdf = $options;
		// $CI->dompdf = $options;
	}
}






?>