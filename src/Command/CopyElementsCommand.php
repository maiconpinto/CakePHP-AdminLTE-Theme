<?php
declare(strict_types=1);

namespace AdminLTE\Command;

use \Cake\Console\Arguments;
use \Cake\Console\BaseCommand;
use \Cake\Console\ConsoleIo;
use \Cake\Console\ConsoleOptionParser;
use \Cake\Utility\Filesystem;

class CopyElementsCommand extends BaseCommand
{
    protected function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser->setDescription(__('Copy AdminLTE theme files to destination folder templates/plugin/adminlte/element'));
        return $parser;
    }

    public function execute(Arguments $args, ConsoleIo $io): int
    {
        $sourceDir = ROOT . DS . 'vendor' . DS . 'maiconpinto' . DS . 'cakephp-adminlte-theme' . DS  . 'templates' . DS . 'element';
        $destinationDir = ROOT . DS . 'templates' . DS . 'plugin'. DS . 'AdminLTE'. DS . 'element';

        $filesystem = new Filesystem();

        if (!is_dir($sourceDir)) {
            $io->error(__("The source folder does not exist."));
            return BaseCommand::CODE_ERROR;
        }

        if (!is_dir($destinationDir)) {
            $filesystem->mkdir($destinationDir);
            $io->out(__("Destination folder has been created."));
        }

        if (!$filesystem->copyDir($sourceDir, $destinationDir)) {
            $io->error(__("Error copying folder."));
            return BaseCommand::CODE_ERROR;
        }
        
        $io->success(__("Files copied successfully!"));
        return BaseCommand::CODE_SUCCESS;
    }
}
