<?php

/**
 * TagsApi
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
 * TagsApi Class Doc Comment
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TagsApi
{
    protected $apiClient;

    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?: new ApiClient();
    }

    /**
     * /tags/all-time-series
     * Return the recent history (hourly stats for the last 30 days) for all tags
     */
    public function allTimeSeries($body = [])
    {
        return $this->apiClient->post('/tags/all-time-series', $body);
    }
    /**
     * /tags/delete
     * Deletes a tag permanently. Deleting a tag removes the tag from any messages that have been sent, and also deletes the tag&#39;s stats. There is no way to undo this operation, so use it carefully.
     */
    public function delete($body = [])
    {
        return $this->apiClient->post('/tags/delete', $body);
    }
    /**
     * /tags/info
     * Return more detailed information about a single tag, including aggregates of recent stats
     */
    public function info($body = [])
    {
        return $this->apiClient->post('/tags/info', $body);
    }
    /**
     * /tags/list
     * Return all of the user-defined tag information
     */
    public function list($body = [])
    {
        return $this->apiClient->post('/tags/list', $body);
    }
    /**
     * /tags/time-series
     * Return the recent history (hourly stats for the last 30 days) for a tag
     */
    public function timeSeries($body = [])
    {
        return $this->apiClient->post('/tags/time-series', $body);
    }
}
