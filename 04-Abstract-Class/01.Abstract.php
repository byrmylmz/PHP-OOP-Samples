<?php


class AchievementType
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
}

class firstThousandPoints extends AchivementType
{


    public function qualifier($user)
    {

    }
}


class firstBestAnswer extends AchivementType
{

    public function qualifier($user)
    {

    }
}


$replace = new firstBestAnswer();
echo $replace->icon();