<?php
/**
 * A class which represents an Http Reponse
 *
 * @author  Joshua Eichorn <josh@bluga.net>
 */
class Bluga_Http_Request_Response {

    /**
     * HTTP Return code
     * @var string
     * @link http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
     */
    public $code = 100;
    
    /**
     * Response headers
     * @var array
     */
    public $headers;

    /**
     * Cookies set in response  
     * @var array
     */
    public $cookies;

    /**
     * Response body
     * @var string
     */
    public $body = '';

    /**
     * Constructor
     *
     */
    function Bluga_HTTP_Request_Response($details, $body, $headers, $cookies)
    {
        foreach($details as $name => $value) {
            $this->name = $value;
        }
        $this->body = $body;
        $this->headers = $headers;
        $this->cookies = $cookies;
    }
} 
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
?>