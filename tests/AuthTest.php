<?php

use Laracasts\TestDummy\Factory as TestDummy;
use Laracasts\Integrated\Services\Laravel\DatabaseTransactions;

/**
 * @test
 */
class AuthTest extends TestCase
{

  use DatabaseTransactions,RegisterUsers;


  	/** @test */
  public function it_registers_a_user()
  {

    $credentials = ['email' => 'posinski@gmdadil.com'];
    $this->register($credentials)
        ->verifyInDatabase('users',$credentials)
        ->andSeePageIs('/articles');
        ->andSeePageIs('/articles');
  }
	/** @test */
  public function it_registers_a_user_of_registration_errors()
  {
    // Assuming We have a user with this email address already
    $this->createUser($overrides = ['email' => 'foo@example.com']);

    // We shouldn't be able to sign up new users with same
    $this->register($overrides)
        ->andSee('The email has already been taken.')
        ->andOnPage('auth/register');
  }

  protected function createUser(array $overrides = [])
  {
    TestDummy::create('App\User',$overrides);
  }

}
