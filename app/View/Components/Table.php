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
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $headerArray = ["col1", "col2", "col3"],
        $contentDBArray = false,
        $toggleColumnsArray = [])
    {
        // =[['a','b','c'],['a','b','c']]
        $row1 = new MyRow();
        $row2 = new MyRow();
        $this->headerArray = $headerArray;
        $this->contentDBArray = $contentDBArray?
            $contentDBArray :
            [$row1, $row2] ;
        $this->toggleColumns = $toggleColumnsArray;
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

    public function where($condition = true){
        return $condition;
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
