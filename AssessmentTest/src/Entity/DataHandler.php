<?php

namespace App\Entity;

use App\Repository\DataHandlerRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @ORM\Entity(repositoryClass=DataHandlerRepository::class)
 */
class DataHandler
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $link;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateTime;

    /**
     * @ORM\Column(type="text")
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $adres;

    /**
     * @ORM\Column(type="float")
     */
    private $floatingNumber;

    /**
     * @ORM\Column(type="integer")
     */
    private $number;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function getDateTime(): ?DateTime
    {
        return $this->dateTime;
    }

    public function setDateTime($DateTime)
    {
        $this->DateTime = $DateTime;
    }

    public function getAdres(): ?string
    {
        return $this->id;
    }

    public function setAdres($Adres)
    {
        $this->Adres = $Adres;
    }

    public function getFloatingNumber(): ?float
    {
        return $this->id;
    }

    public function setFloatingNumber($FloatingNumber)
    {
        $this->FloatingNumber = $FloatingNumber;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber($Number)
    {
        $this->Number = $Number;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText($Text)
    {
        $this->Text = $Text;
    }
}
