<?php defined('BASEPATH') OR exit('No direct script access allowed');



use Dompdf\Dompdf;
use Dompdf\Options; 
// Reference the Font Metrics namespace 
use Dompdf\FontMetrics; 

/**
 * 
 */
class Pdf
{
	
	public function __construct()
	{
		require_once dirname(__FILE__).'/dompdf/autoload.inc.php';

		$pdf = new DOMPDF();

		$CI =& get_instance();
		$CI->dompdf = $pdf;
		// $CI->dompdf = $options;
	}
}






?>