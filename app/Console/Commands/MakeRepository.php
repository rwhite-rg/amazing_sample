<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class MakeRepository extends GeneratorCommand
{
    protected $name = 'make:repository';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Repository file';

    protected $type = 'Repository';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (parent::handle() === false && ! $this->option('force')) {
            return false;
        }
    }

    protected function getStub()
    {
        return __DIR__.'/stubs/repository.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Repositories';
    }

    public function getOptions()
    {
        return [
            ['force', null, InputOption::VALUE_NONE, 'Create the class even if the repository already exists'],
        ];
    }


}
