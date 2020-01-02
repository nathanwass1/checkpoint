<?php
namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateHelloCommand extends Command {
    
    protected function configure(){
        $this->setName('Hello')
            ->setDescription('speak a message')
            ->addArgument('message', InputArgument::REQUIRED, 'What Message should I say');
        
    }    
    
    protected function execute(InputInterface $input, OutputInterface $output){
        exec('Hello ' .$input->getArgument('message'));
        //$this->info();
    }
    
 
 
}