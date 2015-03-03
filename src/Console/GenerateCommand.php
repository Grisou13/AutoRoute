<?php

use Grisou13\AutoRoute\Generator;
use Illuminate\Config\Repository as ConfigRepository;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;


/**
 * A command to generate autocomplete information for your IDE
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */
class GenerateCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'route:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a new route';

    /** @var \Illuminate\Config\Repository */
    protected $config;

    /** @var \Illuminate\Filesystem\Filesystem */
    protected $files;

    /** @var \Illuminate\View\Factory */
    protected $view;

    protected $onlyExtend;

    public function __construct() {
    	parent::__construct();
    }
    /*
	 * Execute the console command
    */
    public function fire(){

    }
    protected getArguments(){
    	return ['route',InputArgument::REQUIRED,"The route name"]
    }
}