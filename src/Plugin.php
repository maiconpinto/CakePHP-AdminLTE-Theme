<?php
declare(strict_types=1);

namespace AdminLTE;

use Cake\Console\CommandCollection;
use Cake\Core\BasePlugin;
use AdminLTE\Command\CopyElementsCommand;

class Plugin extends BasePlugin
{
    public function console(CommandCollection $commands): CommandCollection
    {
        $commands->add('adminlte copy_elements', CopyElementsCommand::class);

        return $commands;
    }
}
