<?php

class Rectangle
{
    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width  = $width;
    }
    public function area()
    {
        return $this->height * $this->width;
    }

    public function perimeter()
    {
    	$perimeter = ($this->height * 2) + ($this->width * 2);
        return $perimeter;
    }
// added protect fundtion getHeight
    protected function getHeight()
	{
	    return $this->height;
	}


}

?>
