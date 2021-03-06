<?php

namespace PJBank\Api;

use GuzzleHttp\Client;

/**
 * Client Factory
 * @author Matheus fidelis
 */
class PJBankClient extends Api
{

    private $client;

    /**
     * API Client Invoker
     * @param [type] $credencial
     * @param [type] $chave
     * @return void
     */
    public function __construct($sandbox=false)
    {
        $base_uri = ($sandbox) ? $this->apiBaseUrlSandbox : $this->apiBaseUrl;

        $this->client = new Client([
            'base_uri' => $base_uri,
        ]);

    }

    /**
     * Retorna o Client HTTP feito para a API do PJBank
     * @return GuzzleHttp\Client
     */
    public function getClient() 
    {
        return $this->client;
    }
}