<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 16-7-2016
 * Time: 01:51
 */

namespace Dizzy\Trakt\Request\Movies;


use Dizzy\Trakt\Request\AbstractRequest;
use Dizzy\Trakt\Request\RequestType;
use Dizzy\Trakt\Traits\RequestParameters\IdTrait;

/**
 * Class Aliases
 * @package Dizzy\Trakt\Request\Movies
 */
class Aliases extends AbstractRequest
{
    use IdTrait;

    /**
     * Aliases constructor.
     * @param $id
     */
    public function __construct($id)
    {
        parent::__construct();
        $this->setId($id);
    }

    /**
     * Tells which request type needs to be used for this request.
     * @return string
     */
    public function getRequestType()
    {
        return RequestType::GET;
    }

    /**
     * Tells the uri of this endpoint.
     * @return string
     */
    public function getUri()
    {
        return "movies/:id/aliases";
    }
}