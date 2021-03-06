<?php

/**
 * IpsApi
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
 * IpsApi Class Doc Comment
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IpsApi
{
    protected $apiClient;

    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?: new ApiClient();
    }

    /**
     * /ips/cancel-warmup
     * Cancels the warmup process for a dedicated IP.
     */
    public function cancelWarmup($body = [])
    {
        return $this->apiClient->post('/ips/cancel-warmup', $body);
    }
    /**
     * /ips/check-custom-dns
     * Tests whether a domain name is valid for use as the custom reverse DNS for a dedicated IP.
     */
    public function checkCustomDns($body = [])
    {
        return $this->apiClient->post('/ips/check-custom-dns', $body);
    }
    /**
     * /ips/create-pool
     * Creates a pool and returns it. If a pool already exists with this name, no action will be performed.
     */
    public function createPool($body = [])
    {
        return $this->apiClient->post('/ips/create-pool', $body);
    }
    /**
     * /ips/delete
     * Deletes a dedicated IP. This is permanent and cannot be undone.
     */
    public function delete($body = [])
    {
        return $this->apiClient->post('/ips/delete', $body);
    }
    /**
     * /ips/delete-pool
     * Deletes a pool. A pool must be empty before you can delete it, and you cannot delete your default pool.
     */
    public function deletePool($body = [])
    {
        return $this->apiClient->post('/ips/delete-pool', $body);
    }
    /**
     * /ips/info
     * Retrieves information about a single dedicated ip.
     */
    public function info($body = [])
    {
        return $this->apiClient->post('/ips/info', $body);
    }
    /**
     * /ips/list
     * Lists your dedicated IPs.
     */
    public function list($body = [])
    {
        return $this->apiClient->post('/ips/list', $body);
    }
    /**
     * /ips/list-pools
     * Lists your dedicated IP pools.
     */
    public function listPools($body = [])
    {
        return $this->apiClient->post('/ips/list-pools', $body);
    }
    /**
     * /ips/pool-info
     * Describes a single dedicated IP pool.
     */
    public function poolInfo($body = [])
    {
        return $this->apiClient->post('/ips/pool-info', $body);
    }
    /**
     * /ips/provision
     * Requests an additional dedicated IP for your account. Accounts may have one outstanding request at any time, and provisioning requests are processed within 24 hours.
     */
    public function provision($body = [])
    {
        return $this->apiClient->post('/ips/provision', $body);
    }
    /**
     * /ips/set-custom-dns
     * Configures the custom DNS name for a dedicated IP.
     */
    public function setCustomDns($body = [])
    {
        return $this->apiClient->post('/ips/set-custom-dns', $body);
    }
    /**
     * /ips/set-pool
     * Moves a dedicated IP to a different pool.
     */
    public function setPool($body = [])
    {
        return $this->apiClient->post('/ips/set-pool', $body);
    }
    /**
     * /ips/start-warmup
     * Begins the warmup process for a dedicated IP. During the warmup process, Mandrill will gradually increase the percentage of your mail that is sent over the warming-up IP, over a period of roughly 30 days. The rest of your mail will be sent over shared IPs or other dedicated IPs in the same pool.
     */
    public function startWarmup($body = [])
    {
        return $this->apiClient->post('/ips/start-warmup', $body);
    }
}
