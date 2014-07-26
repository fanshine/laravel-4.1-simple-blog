<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class UserGeneratorCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'user:generate';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generate a new user.';

	protected $user;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct(User $user)
	{
		parent::__construct();
		// $this->user = $user;
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		// $this->line('Welcome to the user generator.');
		// // $this->user->name = $this->argument('name');
		// // $email = $this->option('email');
		// // $this->line("User: {$name}'s email is {$email}");
		// $this->user->email = $this->argument('email');
		// $this->user->password = Hash::make($this->option('password'));
		// $correctPassword = false;
		// while( ! $correctPassword) {
		// 	if ( ! $this->confirm("Are you sure the password is {$this->option('password')} ? [yes|no]", true)) {
		// 		$this->user->password = Hash::make($this->ask('So what is your password?'));
		// 	} else {
		// 		$correctPassword = true;
		// 	}
		// }
		// $this->user->password_confirmation = $this->user->password;
		// $this->line($this->user->email . '  ' . $this->user->password . '  ' . $this->user->password_confirmation);
		// $this->user->save();
		// $this->info("{$this->user->email} has been generated and saved.");
		//
		Queue::later(2, 'QueueAuthorTest', ['message' => 'QueueAuthorTest']);
		Queue::later(1,   'QueueUserTest', ['message' => 'QueueUserTest']);
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	// protected function getArguments()
	// {
	// 	return array(
	// 		// array('name', InputArgument::REQUIRED, 'User Name.'),
	// 		array('email', InputArgument::REQUIRED, 'User Email.'),
	// 	);
	// }

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	// protected function getOptions()
	// {
	// 	return array(
	// 		array('password', null, InputOption::VALUE_OPTIONAL, 'User Password.', null),
	// 	);
	// }

}
