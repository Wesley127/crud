<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\DateTimeType;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $code;

    /*
    #[ORM\Column(type: 'decimal', precision: 10, scale: '0')]
    private $prijs;

*/

    #[ORM\Column(type: 'text', nullable: true)]
    private $omschrijving;

    #[ORM\Column(type: 'datetime')]
    private $creatietijd;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $changetijd;


    #[ORM\Column(type: 'float')]
    private $prijs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }

    /*
    public function getPrijs(): ?string
    {
        return $this->prijs;
    }

    public function setPrijs(string $prijs): self
    {
        $this->prijs = $prijs;

        return $this;
    }
*/

    public function getOmschrijving(): ?string
    {
        return $this->omschrijving;
    }

    public function setOmschrijving(?string $omschrijving): self
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    public function getCreatietijd(): ?\DateTimeInterface
    {
        return $this->creatietijd;
    }

    public function setCreatietijd(\DateTimeInterface $creatietijd): self
    {

        if (empty($this->creatietijd)){
        $this->creatietijd = new \DateTime("now");
        }else{
            $this->creatietijd = $creatietijd;
            $this->test = $creatietijd;
        }
        return $this;
    }



    public function getChangetijd(): ?\DateTimeInterface
    {
        return $this->changetijd;
    }

    public function setChangetijd(?\DateTimeInterface $changetijd): self
    {
        if (!empty($this->test)){
            $this->changetijd = new \DateTime("now");
            
    }elseif (!empty($this->changetijd)) {

        $this->changetijd = new \DateTime("now");


    }


    return $this;
    }














    public function getPrijs(): ?float
    {
        return $this->prijs;
    }

    public function setPrijs(float $prijs): self
    {
        $this->prijs = $prijs;

        return $this;
    }
}
