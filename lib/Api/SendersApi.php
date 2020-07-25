<?php

/**
 * SendersApi
 * PHP version 5
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mailchimp Transactional API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.6
 * Contact: apihelp@mandrill.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailchimpTransactional\Api;

use MailchimpTransactional\ApiException;
use MailchimpTransactional\ApiClient;
use MailchimpTransactional\HeaderSelector;
use MailchimpTransactional\ObjectSerializer;

/**
 * SendersApi Class Doc Comment
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SendersApi
{
    protected $apiClient;

    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?: new ApiClient();
    }

    /**
     * /senders/add-domain
     * Adds a sender domain to your account. Sender domains are added automatically as you send, but you can use this call to add them ahead of time.
     */
    public function addDomain($body = [])
    {
        return $this->apiClient->post('/senders/add-domain', $body);
    }
    /**
     * /senders/check-domain
     * Checks the SPF and DKIM settings for a domain. If you haven&#39;t already added this domain to your account, it will be added automatically.
     */
    public function checkDomain($body = [])
    {
        return $this->apiClient->post('/senders/check-domain', $body);
    }
    /**
     * /senders/domains
     * Returns the sender domains that have been added to this account
     */
    public function domains($body = [])
    {
        return $this->apiClient->post('/senders/domains', $body);
    }
    /**
     * /senders/info
     * Return more detailed information about a single sender, including aggregates of recent stats
     */
    public function info($body = [])
    {
        return $this->apiClient->post('/senders/info', $body);
    }
    /**
     * /senders/list
     * Return the senders that have tried to use this account
     */
    public function list($body = [])
    {
        return $this->apiClient->post('/senders/list', $body);
    }
    /**
     * /senders/time-series
     * Return the recent history (hourly stats for the last 30 days) for a sender
     */
    public function timeSeries($body = [])
    {
        return $this->apiClient->post('/senders/time-series', $body);
    }
    /**
     * /senders/verify-domain
     * Sends a verification email in order to verify ownership of a domain. Domain verification is a required step to confirm ownership of a domain. Once a domain has been verified in a Mandrill account, other accounts may not have their messages signed by that domain unless they also verify the domain. This prevents other Mandrill accounts from sending mail signed by your domain.
     */
    public function verifyDomain($body = [])
    {
        return $this->apiClient->post('/senders/verify-domain', $body);
    }
}
