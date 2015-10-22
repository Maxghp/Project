<?php
/* Сделайте класс-оболочку над $_SERVER. Класс должен иметь следующие свойства:
request_uri, ip, document_root, http_host, http_user_agent, query_string.
*/

Class Server {

    public $requestUri;
    public $ip;
    public $documentRoot;
    public $documentHost;
    public $httpHost;
    public $httpUserAgent;
    public $queryString;

    public function __construct($requestUri,$ip,$documentRoot,$documentHost,
                                $httpHost,$httpUserAgent,$queryString)
    {
        $this->requestUri = $requestUri;
        $this->ip = $ip;
        $this->documentRoot = $documentRoot;
        $this->documentHost = $documentHost;
        $this->httpHost = $httpHost;
        $this->httpUserAgent = $httpUserAgent;
        $this->queryString = $queryString;
    }

    public function getRequestUri(){
        return $this->requestUri;
    }
    public function getIp(){
        return $this->ip;
    }
    public function getDocumentRoot(){
        return $this->documentRoot;
    }
    public function getDocumentHost(){
        return $this->documentHost;
    }
    public function getHttpHost(){
        return $this->httpHost;
    }
    public function getHttpUserAgent(){
        return $this->httpUserAgent;
    }
    public function getQueryString(){
        return $this->queryString;
    }
}

$first = new Server($_SERVER['REQUEST_URI'],$_SESSION['1.1.1.11'],$_SERVER['DOCUMENT_ROOT'],$_SERVER['DOCUMENT_HOST'],$_SERVER['httphost'],$_SERVER['httpuseragent'],$_SERVER['qury']);
?>

