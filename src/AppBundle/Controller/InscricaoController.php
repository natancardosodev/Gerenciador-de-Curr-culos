<?php
namespace AppBundle\Controller;
use Domain\Model\Inscricao;
use Presentation\DataTransferObject\InscricaoDTO;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InscricaoController extends Controller
{
    /**
     * @Route("inscricao/inscrever")
     * @param Request $request
     */
    public function inscreverAction(Request $request)
    {
        $serializeService = $this->get('infra.serializer.service');
        $inscricaoService = $this->get('app.inscricao.service');
        try{
            $inscricao = $serializeService->converter($request->getContent(), InscricaoDTO::class);
            $resultado = $inscricaoService->inscrever($inscricao);
        }catch(\Exception $exception){
            return new Response($exception->getMessage(), 400);
        }
        return new Response($resultado);
    }
}