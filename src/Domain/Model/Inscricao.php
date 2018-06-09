<?php

namespace Domain\Model;
class Inscricao
{
    /**
     * @var int
     */
    private $idInscricao;
    /**
     * @var Candidato
     */
    private $candidato;
    /**
     * @var Oportunidade
     */
    private $oportunidade;
    /**
     * @var string
     */
    private $codigoConfirmacao;
    /**
     * @var boolean
     */
    private $ativa;
}