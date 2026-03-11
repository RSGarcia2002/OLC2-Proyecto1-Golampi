<?php

class Time extends Invocable
{
    public function get_arity()
    {
        return 0;
    }

    public function invoke($visitor, $args)
    {
        date_default_timezone_set("UTC");
        return date("Y-m-d H:i:s");
    }
}

class Len extends Invocable
{
    public function get_arity()
    {
        return 1;
    }

    public function invoke($visitor, $args)
    {
        $value = $args[0];

        if (is_array($value) || is_string($value)) {
            return is_array($value) ? count($value) : strlen($value);
        }

        throw new Exception("len() solo acepta arreglos o strings");
    }
}

class TypeOfFunc extends Invocable
{
    public function get_arity()
    {
        return 1;
    }

    public function invoke($visitor, $args)
    {
        $value = $args[0];

        if (is_int($value))
            return "int32";
        if (is_float($value))
            return "float32";
        if (is_bool($value))
            return "bool";
        if (is_string($value))
            return "string";
        if (is_array($value))
            return "array";
        if ($value === null)
            return "nil";

        return gettype($value);
    }
}

class SubstrFunc extends Invocable
{
    public function get_arity()
    {
        return 3;
    }

    public function invoke($visitor, $args)
    {
        $text = $args[0];
        $start = $args[1];
        $length = $args[2];

        if (!is_string($text)) {
            throw new Exception("substr() espera un string como primer argumento");
        }

        if (!is_int($start) || !is_int($length)) {
            throw new Exception("substr() espera índices enteros");
        }

        return substr($text, $start, $length);
    }
}

return $embeded = array(
    "now" => new Time(),
    "len" => new Len(),
    "typeOf" => new TypeOfFunc(),
    "substr" => new SubstrFunc()
);