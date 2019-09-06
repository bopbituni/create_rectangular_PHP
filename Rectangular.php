<?php


class Rectangular
{
    public $height;
    public $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getArea()
    {
        return "Diện tích hình chữ nhật là: ". $this->height * $this->width;
    }
    public function getPerimeter()
    {
        return "Chu vi hình chữ nhật là: " . ($this->height + $this->width)*2;
    }
}