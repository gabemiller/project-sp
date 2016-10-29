<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Divide\CMS\Menu;

class InstallCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'divide:install';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Init the app.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		while (true){
            $name = $this->ask('What is your name? ');
            $email = $this->ask('What is your email? ');
            $password = $this->secret('Please, give a password for login: ');
            $confirmPassword = $this->secret('Please, confirm your password: ');
            if(strcmp($password,$confirmPassword) == 0){
                $this->info('Name: '.$name);
                $this->info('Email: '.$email);
                if($this->confirm('Does everything correct? [yes|no]')){

                    $this->createUser($name,$email,$password);
                    $this->createUserGroups();
                    $this->assignUsersAndUserGroups($email);
                    $this->createMenus();

                    $this->info('Successful installation!');
                    break;
                }
            }else{
                $this->error('The passwords do not match.');
            }
        }
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
		);
	}

	private function createUser($name,$email,$password){
        $this->info('Creating user...');

        Sentry::getUserProvider()->create(array(
            'email' => $email,
            'password' => $password,
            'activated' => 1,
            'first_name' => explode(' ',$name)[1],
            'last_name' => explode(' ',$name)[0],
            'phone' => '',
            'deletable' => false
        ));

        $this->info('User is successfully created!');
    }

    private function createUserGroups(){
        $this->info('Creating usergroups...');

        Sentry::getGroupProvider()->create(array(
            'name' => 'Admin',
            'permissions' => array(
                'admin' => 1,
                'users' => 1,
            )));

        $this->info('Usergroups are succesfully created!');
    }

    private function assignUsersAndUserGroups($email){
        $this->info('Assigning users and usergroups...');

        $adminUser = Sentry::getUserProvider()->findByLogin($email);
        $adminGroup = Sentry::getGroupProvider()->findByName('Admin');
        $adminUser->addGroup($adminGroup);

        $this->info('Assignation is succesfully finished!');
    }

    private function createMenus(){
        $this->info('Creating menu...');

        Menu::create([
            'name'=>'Főmenü'
        ]);

        $this->info('Menu is successfully created!');
    }

}
