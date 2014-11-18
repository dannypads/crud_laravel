<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 11/18/14
 * Time: 2:59 PM
 */

class FacturaControllerTest extends TestCase {


     public function test_total_billing()
     {
         $factura = new FacturaController();

         $this->AssertEquals(1.12, $factura->calculoTotal(1));
     }

    public function test_discount()
    {
        $factura = new FacturaController();

        $this->AssertEquals(10, $factura->descuentoTotal(100,10));
    }
}
 