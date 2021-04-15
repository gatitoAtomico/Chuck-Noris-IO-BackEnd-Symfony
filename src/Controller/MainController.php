<?php

namespace App\Controller;

use App\CustomClass\DbHelper;
use App\Entity\JokeViews;
use App\Repository\JokeViewsRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;


class MainController extends AbstractFOSRestController
{
    private $jokeViews;

    public function __construct(JokeViewsRepository $jokeViews)
    {
        $this->jokeViews = $jokeViews;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @Rest\Route("/categories", methods={"GET"})
     */
    public function getCategories()
    {
        $json = file_get_contents("https://api.chucknorris.io/jokes/categories");
        $categories = json_decode($json);

        return $this->json([
            'categories' => $categories
        ], 201);
    }


    /**
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @Rest\Route("/{category}", methods={"PUT"})
     */
    public function update($category)
    {
        $dbHelper = new DbHelper();

        $allJokeCategories = file_get_contents("https://api.chucknorris.io/jokes/categories");
        $listOfCategories =json_decode($allJokeCategories);

        //check if the category provided by the request exists in the category list
        if (!in_array($category, $listOfCategories))
        {
            return $this->json([
                'timesViewed' => 'infinite',
                'jokeValue' => 'Do you think thats funny :('
            ], 201);
        }

        $categoryJoke = file_get_contents("https://api.chucknorris.io/jokes/random?category={$category}");
        $joke = json_decode($categoryJoke);

        $jokeInfo = $dbHelper->timesViewed($joke,$this->jokeViews);

        if ($jokeInfo!= null) {

            $jokeInfo->setViewedTimes($jokeInfo->getViewedTimes() + 1);
            $this->getDoctrine()->getManager()->flush();

            return $this->json([
                'timesViewed' => $jokeInfo->getViewedTimes(),
                'jokeValue' => $joke->value,
            ], 201);

        };

        $addJoke = new JokeViews();
        $addJoke->setJokeId($joke->id);
        $addJoke->setViewedTimes(1);

        $em = $this->getDoctrine()->getManager();
        $em->persist($addJoke);
        $em->flush();

        return $this->json([
            'timesViewed' => 1,
            'jokeValue' => $joke->value,
        ], 201);
    }

}
