<?php
/*
 * This file is part of the FixedWidthTextFile package.
 *
 * (c) Kenny Wildfeuer <kenny@kennys.io>
 */
namespace KennysIO\FixedWidthTextFile;

use KennysIO\FixedWidthTextFile\Field;

/**
 * @package KennysIO\FixedWidthTextFile
 */
class Row
{
    protected $fields = array();

    public function addField(Field $field)
    {
        $this->fields[] = $field;
    }

    public function __toString()
    {
        return implode('', $this->fields);
    }
}