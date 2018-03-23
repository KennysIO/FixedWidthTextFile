<?php
/*
 * This file is part of the FixedWidthTextFile package.
 *
 * (c) Kenny Wildfeuer <kenny@kennys.io>
 */
namespace KennysIO\FixedWidthTextFile;

/**
 * @package KennysIO\FixedWidthTextFile
 */
class Field
{
    protected $width;
    protected $value;
    protected $align;
    protected $padding;

    public function __construct($width, $value, $align='L', $padding=' ')
    {
        settype($width, 'int');
        $this->width = $width;

        $this->value = (string)$value;
        if (strlen($value) > $width)
            throw new Exception('Value too wide for field');

        $this->align = $align;
        $this->padding = $padding;
    }

    public function __toString()
    {
        $format = '%';
        $format .= "'" . $this->padding;
        if ('L' == $this->align)
            $format .= '-';
        $format .= $this->width;
        $format .= 's';

        return sprintf($format, $this->value);
    }
}