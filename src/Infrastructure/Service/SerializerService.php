<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario11
 * Date: 12/05/2018
 * Time: 16:00
 */

namespace Infrastructure\Service;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;
class SerializerService{
    /**
     * @var Serializer
     */
    private $serializer;
    /**
     * SerializerService constructor.
     * @param Serializer $serialize
     */
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }
    public function converter($json, $tipo){
        try{
            return $this->serializer->deserialize($json, $tipo, 'json');
        }catch (\ErrorException  $exception){
            dump($exception->getMessage()); die;
        }
    }
    public function  toJsonGroups($data, array $groups = ['default']){
        return $this->serializer->serialize(
            $data,
            'json',
            SerializationContext::create()->setGroups($groups)
        );
    }
}