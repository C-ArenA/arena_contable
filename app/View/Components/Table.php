<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MyRow{
    public $c1 = 'a';
    public $c2 = 'b';
    public $c3 = 'c';
}

class Table extends Component
{
    public $headerArray;
    public $contentDBArray;
    public $toggleColumns;
    public $condition;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $headerArray = ["col1", "col2", "col3"],
        $contentDBArray = false,
        $toggleColumnsArray = [],
        $condition = [])
    {
        // =[['a','b','c'],['a','b','c']]
        $row1 = new MyRow();
        $row2 = new MyRow();
        $this->headerArray = $headerArray;
        $this->contentDBArray = $contentDBArray?
            $contentDBArray :
            [$row1, $row2] ;
        $this->toggleColumns = $toggleColumnsArray;
        $this->condition = $condition;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table');
    }

    public function where($thisRow){
        if (count($this->condition) == 0) {
            return true;
        }
        if (count($this->condition) > 1) {
            $this->contentDBArray = [];
            return false;
        }
        // if 1
        $specifiedColumn = array_keys($this->condition)[0];
        if (!property_exists($thisRow, $specifiedColumn)) {
            $this->contentDBArray = [];
            return false;
        }

        $correctValue = $this->condition[$specifiedColumn];
        if ($thisRow->$specifiedColumn == $correctValue) {
            return true;
        }
        return false;
    }
    
    public function findID($row)
    {
        foreach ($row as $key => $value) {
            return $value;
        }
    }
    public function isToggleColumn($columnName)
    {
        foreach ($this->toggleColumns as $column) {
            if ($column == $columnName) {
                return true;
            }
        }
        return false;
    }
}
