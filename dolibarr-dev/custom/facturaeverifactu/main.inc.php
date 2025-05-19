<?php
if (!defined('DOL_DOCUMENT_ROOT')) return 0;
require_once DOL_DOCUMENT_ROOT . '/custom/facturaeverifactu/core/modules/modFacturaeVerifactu.class.php';
return new modFacturaeVerifactu($db);
