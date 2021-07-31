<?php

namespace JaguarJack\MigrateGenerator\Migration\Columns\Thinkphp;

class DateTimeType extends AbstractType
{
    public function migrateColumn():string
    {
       return $this->getParsedField('datetime', $this->columnOptions());
    }
}