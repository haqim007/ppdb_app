<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH. 'third_party/dompdf/autoload.inc.php');
/**
 * CodeIgniter DomPDF Library
 *
 * Generate PDF's from HTML in CodeIgniter
 *
 * @packge        CodeIgniter
 * @subpackage        Libraries
 * @category        Libraries
 * @author        Ardianta Pargo
 * @license        MIT License
 * @link        https://github.com/ardianta/codeigniter-dompdf
 */
use Dompdf\Dompdf;
class DomPDF_helper extends Dompdf{
    /**
     * PDF filename
     * @var String
     */
    public $filename;
    public function __construct(){
        parent::__construct();
    }
    /**
     * Get an instance of CodeIgniter
     *
     * @access    protected
     * @return    void
     */
    protected function ci()
    {
        return get_instance();
    }
    /**
     * Load a CodeIgniter view into domPDF
     *
     * @access    public
     * @param    string    $view The view to load
     * @param    array    $data The view data
     * @return    void
     */
    public function load_view($view, $data = array(), $title="document.pdf"){
        $html = $this->ci()->load->view($view, $data, TRUE);
        $this->load_html($html);
        // Render the PDF
        $this->render();
        // Output the generated PDF to Browser
        $this->stream($title, array("Attachment" => false));
    }

    public function export_html($doc_title, $content){
        $this->load_html($content);
        // Render the PDF
        $this->render();
        // DomPDF_helper the generated PDF to Browser
        $this->stream($doc_title, array("Attachment" => false));
    }
}