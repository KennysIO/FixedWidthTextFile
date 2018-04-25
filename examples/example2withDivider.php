<?php

use KennysIO\FixedWidthTextFile\File;
use KennysIO\FixedWidthTextFile\Row;
use KennysIO\FixedWidthTextFile\Field;

require_once __DIR__ . '/../vendor/autoload.php';

$row1 = new Row();
$row1->addField( new Field(8, 'field1.1') );
$row1->addField( new Field(8, 'field1.2') );

$row2 = new Row();
$row2->addField( new Field(8, 'field2.1') );
$row2->addField( new Field(8, 'field2.2') );

$file = new File();
$file->setFieldDivider("\t");
$file->addRow($row1);
$file->addRow($row2);

echo $file;
