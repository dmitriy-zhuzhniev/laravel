<?php

namespace App\Domain\Admin;

class AdminId
{
    /**
     * @var int
     */
    private $value;

    /**
     * AdminId constructor.
     *
     * @param int $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @param string $string
     * @param string $separator
     *
     * @return AdminId[]
     */
    public static function listFromString($string, $separator = ',')
    {
        $callback = function ($id) {
            return new AdminId($id);
        };

        return array_map($callback, explode($separator, $string));
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->value;
    }

    /**
     * @param AdminId $that
     *
     * @return bool
     */
    public function equals(AdminId $that)
    {
        return $this->value === $that->value;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }
}