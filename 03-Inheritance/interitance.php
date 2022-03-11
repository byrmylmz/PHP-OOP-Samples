<?php



class Collection
{
    protected array $items;

    public function __construct(array $items)
    {
        $this->items=$items;
    }

    public function sum($key)
    {
       return  array_map(function($item) use ($key){
            return $item->$key;
        },$this->items);

    }

    public function length1(){
        // return $this->items;
        return array_map(function($item){
                return $item['length'];
        },$this->items);
    }
}  

class VideosCollection extends Collection
{   
    public function length()
    {
        return $this->sum('length');
    }
}



 class Video
 {
     public $title;
     public $length;

     public function __construct($title, $length)
     {
         $this->title = $title;
         $this->length = $length;
     }
 }


 $videos = new VideosCollection([
     new Video('Some Video',100),
     new Video('Some Video1',200),
     new Video('Some Video2',300),
 ]);

 var_dump($videos->length());

