<?php

declare(strict_types=1);

use App\Entity\Article;
use App\Entity\Task;
use Symfony\Config\FrameworkConfig;
use Survos\WorkflowHelperBundle\Attribute\Workflow;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (FrameworkConfig $framework) {
//return static function (ContainerConfigurator $containerConfigurator): void {

    foreach ([Task::class] as $workflowClass) {
        \Survos\WorkflowBundle\Service\ConfigureFromAttributesService::configureFramework($workflowClass, $framework);
    }

};
