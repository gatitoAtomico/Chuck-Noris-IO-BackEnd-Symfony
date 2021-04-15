<?php

namespace App\Entity;

use App\Repository\JokeViewsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JokeViewsRepository::class)
 */
class JokeViews
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $jokeId;

    /**
     * @ORM\Column(type="integer")
     */
    private $viewedTimes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJokeId(): ?string
    {
        return $this->jokeId;
    }

    public function setJokeId(string $jokeId): self
    {
        $this->jokeId = $jokeId;

        return $this;
    }

    public function getViewedTimes(): ?int
    {
        return $this->viewedTimes;
    }

    public function setViewedTimes(int $viewedTimes): self
    {
        $this->viewedTimes = $viewedTimes;

        return $this;
    }
}
