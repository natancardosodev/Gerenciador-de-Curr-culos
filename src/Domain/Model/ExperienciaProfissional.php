<?php

namespace Domain\Model;
class ExperienciaProfissional
{
    /**
     * @var int
     */
    private $idExperienciaProfissional;
    /**
     * @var string
     */
    private $cargo;
    /**
     * @var string
     */
    private $descricao;
    /**
     * @var \DateTime
     */
    private $periodoInicial;
    /**
     * @var \DateTime
     */
    private $periodoFinal;
    /**
     * @var boolean
     */
    private $trabalhoAtual;
}