<?php


namespace App\CustomClass;


class DbHelper
{

    public function timesViewed($joke,$jokesTable){

        return $jokesTable->findOneBy(array('jokeId' => $joke->id));;

    }

}