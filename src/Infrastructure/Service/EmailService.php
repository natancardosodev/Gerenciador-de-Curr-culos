<?php
namespace Infrastructure\Service;
use Domain\Model\Inscricao;
class EmailService
{
    public function enviarNotificacaoInscricao(Inscricao $inscricao)
    {
        $candidato = $inscricao->getCandidato();
        $destinatario = $candidato->getEmail();
        $nomeDestinatario = $candidato->getNome();
        $assunto = "Inscrição de Emprego - Código de Confirmação";
        $corpoDoEmail = "Olá, " . $nomeDestinatario . "\n" .
            "Seu código de confirmação de inscrição é: " . $inscricao->getCodigoConfirmacao();
        $this->enviarNotificacao($destinatario, $nomeDestinatario, $assunto, $corpoDoEmail);
    }
    public function enviarNotificacao(
        string $destinatario,
        string $nomeDestinatario,
        string $assunto,
        string $corpoDoEmail
    ) {
        //Criação do transport, mail.smtp2go, mailgun, etc.
        $transport = (new
        \Swift_SmtpTransport('mail.smtp2go.com', 2525))
            ->setUsername('natancb7@gmail.com')
            ->setPassword('uIg8nps8qx03');
        $mailer = new \Swift_Mailer($transport);
        //Criação da mensagem
        $message = new \Swift_Message($assunto);
        $message->setFrom(["suporte.inscricao@hotmail.com" => "Suporte - Inscrição de Emprego"])
            ->setTo([$destinatario => $nomeDestinatario])
            ->setBody($corpoDoEmail);
        //Dispara o e-mail
        $mailer->send($message);
    }
}