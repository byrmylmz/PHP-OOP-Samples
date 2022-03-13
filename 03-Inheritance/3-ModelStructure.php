<?php


class AchivementType1
{
    public function name()
    {
        //achivement type


    }

    public function diffuculty()
    {
        return 'intermediate';
    }

    public function icon()
    {
        return '/images/imgaet';
    }

}

// is a 
class FirstThousandPoints extends AchivementType1
{


    public function qualifier()
    {

    }
    /**
     * you can override name class here.
     *
     * @return void
     */
    public function name()
    {
        return 'welcome abroad';
    }
}

