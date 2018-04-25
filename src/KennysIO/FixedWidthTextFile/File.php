<?php
/*
 * This file is part of the FixedWidthTextFile package.
 *
 * (c) Kenny Wildfeuer <kenny@kennys.io>
 */
namespace KennysIO\FixedWidthTextFile;

use KennysIO\FixedWidthTextFile\Row;

/**
 * @package KennysIO\FixedWidthTextFile
 */
class File
{
    protected $rows = array();

    protected $fieldDivider = '';

    public function setFieldDivider($fieldDivider = '')
    {
        $this->fieldDivider = $fieldDivider;
    }

    /**
     * @param Row $row
     */
    public function addRow(Row $row)
    {
        $row->setFieldDivider( $this->fieldDivider );
        $this->rows[] = $row;
    }

    public function __toString()
    {
        return implode(PHP_EOL, $this->rows);
    }
}