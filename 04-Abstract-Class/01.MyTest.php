<?php


/**
 * Abstract can only be used by child class.
 * You can not initiate it anywhere with new keyword
 * What it is provide us 
 *  It provide to create parent classes that special to childclass.
 *  
 */
abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        //FirstThousanPoints => First Thousan Points
        return trim(preg_replace('/[A-Z]/',' ${0}',$class));
    }

    public function icon()
    {
       return strtolower(str_replace(' ','-',$this->name())).'.png';
    }

    /**
     * if you define abstract method in parent class
     * All child class must have that method inside
     * You can think that Abstract method warn you to use the method 
     * Abstract method doesn't have body normal.
     * It just have parameter.
     * It doesnt implement anything just forces to child class to use that method.
     * 
     */
    abstract public function qualifier($user); 
     
}

class firstThousandPoints extends AchievementType
{

    public function qualifier($user)
    {

    }
}


class firstBestAnswer extends AchievementType
{

    public function qualifier($user)
    {

    }
}

class ReachTop50 extends AchievementType
{
    public function qualifier($user)
    {
        return 'qualifer user ';

    }
 
}


$replace = new ReachTop50();
echo $replace->name();