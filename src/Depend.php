<?php
class Depend
{

    public function Empty()
    {
        $value = [];
        return $value;
    }
    public function Push(array $val)
    {
        array_push($val, 'first');
        return $val;
    }
}
?>