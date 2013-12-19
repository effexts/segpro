<?php

namespace UTA\SegProBundle\Utilidades;
/**
 * Description of Funciones
 *
 * @author root
 */
class Funciones {
    public function obtenerMontoTotal($monto) {
        $montoTotal=0;
        if (empty($monto)) {
            return $this->redirect($this->generateUrl('uta_seg_pro_homepage'));
        }
        else {
            foreach ($monto as $mont) {
                $montoTotal+= $mont['MONTO'];
            }
        }
        return $montoTotal;
    }
}
