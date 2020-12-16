<?php

    require_once __DIR__ . '/vendor/autoload.php';
    use Symfony\Component\EventDispatcher\EventDispatcher;
    use Symfony\Contracts\EventDispatcher\Event;

    # uma instância desta classe será enviada para os listeners
    class Aula {
        public $sumario;
        public $data;
        public $professor;
    }

    class PlanoDeAulaEnviadoEvent extends Event {
        const NOME_DO_EVENTO = 'plano_de_aula_enviado';
        protected $aula;

        public function __construct(Aula $aula) {
            $this->aula = $aula;
        }

        public function getAula() {
            return $this->aula;
        }
    }

    #listener 1
    class PrimeiroListener {
        public function onPlanoDeAulaEnviado(Event $event) {
            echo "Sumário: ".$event->getAula()->sumario."\n";
            echo "Data: ".$event->getAula()->data."\n";
            echo "Professor: ".$event->getAula()->professor; 
        }
    }

    #Walter -> escreva um listener que imprime so o sumário e faça um pull request do código.



    #Teresa -> adiciona o campo curso na classe Aula e adiciona um listener que imprime este campo e faça um pull request 

    
    #instâncias
    $aula = new Aula();
    $aula->sumario = "Introdução ao Symfony";
    $aula->data = "18/12/2020";
    $aula->professor = "Luís Tchitue";

    $planoDeAula_evento = new PlanoDeAulaEnviadoEvent($aula);

    $dispatcher = new EventDispatcher();
    $listener = new PrimeiroListener();

    #regista um listener no dispatcher
    $dispatcher
        ->addListener(PlanoDeAulaEnviadoEvent::NOME_DO_EVENTO, [$listener, 'onPlanoDeAulaEnviado']);    


    # propaga os eventos para todos os listeners registados no dispatcher
    $dispatcher
        ->dispatch($planoDeAula_evento, PlanoDeAulaEnviadoEvent::NOME_DO_EVENTO);
    
?>