<?php

namespace App;

use Nayra\Contracts\Bpmn\EngineInterface;
use Nayra\Engine\Engine;
use Nayra\Bpmn\Models\Process as BpmnProcess;
use Nayra\Bpmn\Models\Instance;

class ProcessClient
{
    public function run()
    {
        $engine = new Engine();

        // Minimaler Dummy-Prozess zur Demo
        $bpmnProcess = new BpmnProcess();
        $bpmnProcess->setId('ClientFlow');

        $instance = new Instance($bpmnProcess);
        $engine->runToCompletion($instance);

        echo "Prozess erfolgreich ausgeführt.\n";
    }
}
