<?php


namespace app\core;


/**
 * Class Response
 * @package app\core
 */
class Response
{


    /**
     * @param int $statusCode
     * @return int
     */
    public function setStatusCode(int $statusCode) {
        return http_response_code(404);
    }

}