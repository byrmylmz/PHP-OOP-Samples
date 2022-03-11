<?php

class AchivementType
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
class FirstThousandPoints extends AchivementType
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