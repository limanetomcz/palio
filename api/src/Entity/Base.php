<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\BaseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BaseRepository::class)]
#[ApiResource]
class Base
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $pergunta = null;

    #[ORM\Column(length: 255)]
    private ?string $tags = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $resposta = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $observacao = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPergunta(): ?string
    {
        return $this->pergunta;
    }

    public function setPergunta(string $pergunta): static
    {
        $this->pergunta = $pergunta;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(string $tags): static
    {
        $this->tags = $tags;

        return $this;
    }

    public function getResposta(): ?string
    {
        return $this->resposta;
    }

    public function setResposta(string $resposta): static
    {
        $this->resposta = $resposta;

        return $this;
    }

    public function getObservacao(): ?string
    {
        return $this->observacao;
    }

    public function setObservacao(?string $observacao): static
    {
        $this->observacao = $observacao;

        return $this;
    }
}
