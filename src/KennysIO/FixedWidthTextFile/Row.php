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

    protected $fieldDivider = '';

    public function setFieldDivider($fieldDivider = '')
    {
        $this->fieldDivider = $fieldDivider;
    }

    public function addField(Field $field)
    {
        $this->fields[] = $field;
    }

    public function __toString()
    {
        return implode($this->fieldDivider, $this->fields);
    }
}