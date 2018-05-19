<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario11
 * Date: 12/05/2018
 * Time: 14:49
 */

namespace Domain\Model;

use JMS\Serializer\Annotation as Serializer;

class Oportunidade
{
    /**
     * @var int
     */
    private $idOportunidade;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    private $descricao;

    /**
     * @var \DateTime
     * @Serializer\SerializedName("periodoInicial")
     * @Serializer\Type("DateTime<'d/m/Y'>")
     *
     */
    private $periodoInicial;

    /**
     * @var \DateTime
     * @Serializer\SerializedName("periodoFinal")
     * @Serializer\Type("DateTime<'d/m/Y'>")
     */
    private $periodoFinal;

    /**
     * Oportunidade constructor.
     * @param string $descricao
     * @param \DataTime $periodoInicial
     * @param \DateTime $periodoFinal
     */
    public function __construct(
        string $descricao,
        \DataTime $periodoInicial,
        \DateTime $periodoFinal)
    {
        $this->descricao = $descricao;
        $this->periodoInicial = $periodoInicial;
        $this->periodoFinal = $periodoFinal;
    }

    /**
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @return \DataTime
     */
    public function getPeriodoInicial()
    {
        return $this->periodoInicial;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodoFinal()
    {
        return $this->periodoFinal;
    }




}