<?php

class FacturaController extends \BaseController {


	public function calculoTotal($subtotal)
	{
        $total = $subtotal * 1.12;
        return $total;
	}

    public function descuentoTotal($total,$descuento)
    {
        $porcentaje_descuentp = $descuento * 0.01;
        $descuento_total = $total * $porcentaje_descuentp;
        return $descuento_total;
    }


}
