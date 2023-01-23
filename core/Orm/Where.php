<?php

namespace Core\Orm;
use Core\Orm\Sql;

class Where
{
    public array $where;

    public function __construct($where)
    {
        $this->where = $where;

    }

    public function Where(): string
    {
        $temp = $this->RowBuilder();
        return $temp;
    }



    public function RowBuilder(): string
    {
        $array = [];
        foreach ($this->where as $value){
            if (is_array($value)){
                $firstArray = $this->where[0];
                $secondArray = $this->where[2];
                $logik = $this->where[1];
                $row = implode(" ", $firstArray);
                $row = "(" . $row . ")";
                $row .= implode(" ", $logik);
                $row .= "(" . implode(" ", $secondArray) . ")";
                }else{
                $array = $this->where;
                $row = "(" . implode(" ", $array) . ")";
            }
        }

        return $row;
    }

}