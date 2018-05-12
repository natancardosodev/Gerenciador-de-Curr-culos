<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario11
 * Date: 12/05/2018
 * Time: 16:00
 */

namespace Infrastructure\Service;


use JMS\Serializer\Serializer;

class SerializerService
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * SerializerService constructor.
     * @param Serializer $serializer
     */
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }
    public function converter($json, $tipo)
    {
        try {
            return $this->serializer->deserialize($json, $tipo, 'json');
        }catch(\Exception $exception){
            dump($exception->getMessage()); die;
        }
    }
}