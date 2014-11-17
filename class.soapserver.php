<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 17/11/14
 * Time: 11:00 AM
 */

class PhpSoapServer extends SoapServer{

    public function handle($soapRequest=null){
        PhpWsdl::Debug("Soap Server handle called");
        ob_start();
        parent::handle();
        $content = ob_get_contents();
        PhpWsdl::Debug( "Ob content: \n".$content );
        ob_end_flush();
        PhpWsdl::Debug( "Handle ends." );
    }

}