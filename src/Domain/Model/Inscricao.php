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

    public function __construct(
        Candidato $candidato,
        Oportunidade $oportunidade
    ) {
        $this->candidato = $candidato;
        $this->oportunidade = $oportunidade;
        $this->ativa = false;
    }

    /**
     * @return int
     */
    public function getIdInscricao()
    {
        return $this->idInscricao;
    }

    /**
     * @return Candidato
     */
    public function getCandidato()
    {
        return $this->candidato;
    }

    /**
     * @return Oportunidade
     */
    public function getOportunidade()
    {
        return $this->oportunidade;
    }

    /**
     * @return string
     */
    public function getCodigoConfirmacao()
    {
        return $this->codigoConfirmacao;
    }



    public function gerarCodigoConfirmacao()
    {
        $this->codigoConfirmacao = substr(uniqid(rand(), true), -6, 6);
    }

    /*
     *
     Json para inscrever o candidato na oportunidade

{
	"candidato": {
		"nome": "Natan Cardoso",
		"email": "natancb7@gmail.com",
        "cpf": "09854787415",
		"telefone": "99999999",
		"habilidadesTecnicas": [{
			"descricao": "PHP"
		}, {
			"descricao": "Angular"
		}],
		"experienciasProfissionais": [{
			"cargo": "Programador",
			"descricao": "Trabalhei como programador full-stack",
			"periodoInicial": "01/05/2018",
			"periodoFinal": "31/05/2018",
			"trabalhoAtual": 0
		}]
	},
	"oportunidade": {
		"id": 1
	}
}
     * */
}