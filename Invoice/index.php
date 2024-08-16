<?php


class InvoiceBuilder{
    public $title;
    public $items = [];

    function addTitle($tile){
        return $this->title = $tile;
    }
    function addItem($item, $price){
        $this ->items[] = [
            'item' => $item,
            'price' => $price
        ];
    }

    function addTotal(){
        $total = 0;
        foreach($this->items as $item){
            $total += $item['price'];
        }
        return $total;
    }
    function createInvoice(){
        $data = fopen("invoice.txt","w");
        fwrite($data, $this->title.PHP_EOL);
        foreach($this->items as $item){
            fwrite($data, $item['item']."  -  " . $item['price'].PHP_EOL);
        }
        fwrite($data,"---------------".PHP_EOL);

        fwrite($data,"Total== {$this->addTotal()}");


    }
}

$inv = new InvoiceBuilder();
$inv->addTitle("My First Invoice");
$inv->addItem("Item 1", 100);
$inv->addItem("Item 2", 200);
$inv->addItem("Item 2", 200);

$inv->createInvoice();



