<?php

include_once DOL_DOCUMENT_ROOT . "/core/modules/DolibarrModules.class.php";

class modFacturaeVerifactu extends DolibarrModules
{
    public function __construct($db)
    {
        global $langs;
        $this->db = $db;
        $this->numero = 104001;
        $this->rights_class = 'facturaeverifactu';
        $this->family = 'financial';
        $this->module_position = 500;
        $this->name = preg_replace('/^mod/i', '', get_class($this));
        $this->description = "Módulo para generar Facturae y enviar a Verifactu";
        $this->version = '1.0.0';
        $this->const_name = 'MAIN_MODULE_' . strtoupper($this->name);
        $this->picto = 'generic';
        $this->module_parts = array(
    'hooks' => array('invoicecard')
);

        $this->dirs = array();
        $this->config_page_url = array();
        $this->langfiles = array();
        $this->phpmin = array(7, 0);
        $this->need_dolibarr_version = array(13, 0);
        $this->rights = array();
		file_put_contents('/tmp/mod_facturaeverifactu.txt', "El módulo se está cargando\n", FILE_APPEND);

    }
}
