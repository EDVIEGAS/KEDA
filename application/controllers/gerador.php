<?php
    
    require_once 'Application/libraries/dompdf/autoload.inc.php';
    // $this->load->library('Pdf');

    use Dompdf\Dompdf; 
    // Reference the Options namespace 
    use Dompdf\Options; 
    // Reference the Font Metrics namespace 
    use Dompdf\FontMetrics; 
    
    // Set options to enable embedded PHP 
    $options = new Options(); 
    $options->set('isPhpEnabled', 'true'); 
    
    // Instantiate dompdf class 
    $dompdf = new Dompdf($options); 
    
    // Load HTML content 
    $dompdf->loadHtml('<h1>Welcome to CodexWorld.com</h1>'); 
    
    // (Optional) Setup the paper size and orientation 
    $dompdf->setPaper('A4', 'landscape'); 
    
    // Render the HTML as PDF 
    $dompdf->render(); 
    
    // Instantiate canvas instance 
    $canvas = $dompdf->getCanvas(); 
    
    // Instantiate font metrics class 
    // $fontMetrics = new FontMetrics($canvas, $options); 
    
    // Get height and width of page 
    $w = $canvas->get_width(); 
    $h = $canvas->get_height();
    
    // Specify watermark image 
    $imageURL = 'images/certificado.jpg'; 
    $imgWidth = 200; 
    $imgHeight = 20;    
   
    // Set text opacity 
    $canvas->set_opacity(.5); 
    
    // Specify horizontal and vertical position 
    $x = (($w-$imgWidth)/2); 
    $y = (($h-$imgHeight)/2);
    
    // Add an image to the pdf 
    $canvas->image($imageURL, $x, $y, $imgWidth, $imgHeight);
    
    // Output the generated PDF (1 = download and 0 = preview) 
    $dompdf->stream('document.pdf', array("Attachment" => 0));

?>
