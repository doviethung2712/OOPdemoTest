<?php
include_once 'Student.php';

class Data
{
    public $data;

    public function __construct()
    {
        $this->data = 'data.json';
    }

    public function saveData($data)
    {
        $data = json_encode($data);
        file_put_contents($this->data, $data);
    }


    public function loadData()
    {
        $dataJson = file_get_contents($this->data);
        return json_decode($dataJson);
    }

    public function addNew($data)
    {
        $list = [
            "name" => $data->getName(),
            "age" => $data->getAge()
        ];

        $data = $this->loadData();
        $data[] = $list;
        $this->saveData($data);
    }


}