<?php

class ActionsFacturaeverifactu
{
    public function addMoreActionsButtons($parameters, &$object, &$action, $hookmanager)
    {
        global $langs;

        if (in_array('invoicecard', explode(':', $parameters['context'])) && $object->statut >= 1) {
            $url = dol_buildpath('/custom/facturaeverifactu/action_generate.php', 1) . '?facid=' . $object->id;
            print '<a class="butAction" href="' . $url . '">Generar Facturae</a>';
        }

        return 0;
    }
}
