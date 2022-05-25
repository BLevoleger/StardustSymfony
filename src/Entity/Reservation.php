<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
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
    private $arrivalDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $departureDate;

    /**
     * @ORM\ManyToOne(targetEntity=Room::class, inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $rid;

    /**
     * @ORM\ManyToOne(targetEntity=Account::class, inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $uid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArrivalDate(): ?string
    {
        return $this->arrivalDate;
    }

    public function setArrivalDate(string $arrivalDate): self
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    public function getDepartureDate(): ?string
    {
        return $this->departureDate;
    }

    public function setDepartureDate(string $departureDate): self
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    public function getRid(): ?Room
    {
        return $this->rid;
    }

    public function setRid(?Room $rid): self
    {
        $this->rid = $rid;

        return $this;
    }

    public function getUid(): ?Account
    {
        return $this->uid;
    }

    public function setUid(?Account $uid): self
    {
        $this->uid = $uid;

        return $this;
    }
}
