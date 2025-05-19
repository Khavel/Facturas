<?php

class InterfaceModFacturaeVerifactu
{
    public function addMoreActionsButtons($parameters, &$object, &$action, $hookmanager)
    {
        global $langs;

        $buttons = '';

        if (get_class($object) == 'Facture' && $object->statut >= 1) {
            $url = dol_buildpath('/facturaeverifactu/action_generate.php', 1) . '?facid=' . $object->id;
            $buttons .= '<a class="butAction" href="' . $url . '">Generar Facturae</a>';
        }

        return $buttons;
    }
}
