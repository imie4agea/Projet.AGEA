<?php

class ArrayEntity
{    
    /**
     * Retourne l'objet en tant que tableau associatif
     * 
     * @param  boolean $crude
     * @return array
     */
    public function toArray($crude = true)
    {
        $variables = get_object_vars($this);
        $array     = array();

        foreach ($variables as $property => $value){
            if ($value instanceof ArrayEntity){
                $value = $value->toArray(false);
            }
            if ($property != 'id' || $crude === false) $array[$property] = $value;
        }
        return $array;
    }

    /**
     * Retourne tous les objets de la classe mentionnée dans un array associatif
     * 
     * @param  string  $class
     * @param  boolean $identifier_as_key
     * @return array
     */
    public static function toArrayAll($class, $identifier_as_key = true)
    {
        $objects       = getEntityManager()->getRepository($class)->findAll();
        $objects_array = array();

        foreach ($objects as $object){
            if ($identifier_as_key){
                $objects_array[$object->getId()] = $object->toArray(false);
            } else {
                $objects_array[] = $object->toArray();
            }
        }

        return $objects_array;
    }
}