<?php
/**
 * Created by PhpStorm.
 * User: dharshan
 * Date: 1/8/18
 * Time: 9:53 PM
 */

namespace app\CMBairs\core;


use Illuminate\Support\Facades\Log;

class MySoapClass extends \SoapClient
{




    public function __construct($wsdl, array $options = null)
    {
        parent::__construct($wsdl, $options);
    }

    /**
     * WS-Security Username
     * @var string
     */
    private $username;
    public $nonce;

    public $timestamp;
    /**
     * WS-Security Password
     * @var string
     */
    private $password;

    /**
     * Set WS-Security credentials
     *
     * @param string $username
     * @param string $password
     */
    public function __setUsernameToken($username, $password)
    {
        $this->username = 'InventoryServiceUsr';
        $this->password = 'mobitel#123InventService';
    }

    /**
     * Overwrites the original method adding the security header. As you can
     * see, if you want to add more headers, the method needs to be modified.
     */
    public function __soapCall($function_name, $arguments, $options=null, $input_headers=null, &$output_headers=null)
    {


        return parent::__soapCall($function_name, $arguments, $options, $this->generateWSSecurityHeader());
    }

    function test(){
        echo ('testttt');

}

    /**
     * Generate password digest
     *
     * Using the password directly may work also, but it's not secure to
     * transmit it without encryption. And anyway, at least with
     * axis+wss4j, the nonce and timestamp are mandatory anyway.
     *
     * @return string   base64 encoded password digest
     */
    private function generatePasswordDigest()
    {
        // Can use rand() to repeat the word if the server is under high load
       $this->nonce = mt_rand();
        $this->timestamp = gmdate('Y-m-d\TH:i:s\Z');

        $packedNonce = pack('H*', $this->nonce);
        $packedTimestamp = pack('a*', $this->timestamp);
        $packedPassword = pack('a*', 'mobitel#123InventService');

        $hash = sha1($packedNonce . $packedTimestamp . $packedPassword);
        $packedHash = pack('H*', $hash);

        return base64_encode($packedHash);
    }

    /**
     * Generates WS-Security headers
     *
     * @return \SoapHeader
     */
    private function generateWSSecurityHeader()
    {
        $passwordDigest = $this->generatePasswordDigest();

        $soap='<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ser="http://service.mobitel.com/">
   <soapenv:Header/>
   <soapenv:Body>
      <ser:test/>
   </soapenv:Body>
</soapenv:Envelope>';

        $xml = '
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ser="http://service.mobitel.com/"
xmlns:seq="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
   <soapenv:Header>

      <wsse:Security  xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
         <wsse:UsernameToken wsu:Id="UsernameToken-1">
            <wsse:Username>InventoryServiceUsr</wsse:Username>
            <wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">mobitel#123InventService</wsse:Password>        
         </wsse:UsernameToken>
      </wsse:Security>
 </soapenv:Header>

   <soapenv:Body>
      <ser:test></ser:test>
   </soapenv:Body>
</soapenv:Envelope>
';

      $samp= new \SoapHeader('http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd',
            'Security',
            new \SoapVar($xml, XSD_ANYXML),
            true
        );

     // echo (print_r($samp,true));
      Log::info(print_r($samp,true));
    }


}