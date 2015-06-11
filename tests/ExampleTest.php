<?php
use Laracasts\Integrated\Extensions\Laravel as IntegrationTest;
use Laracasts\Integrated\Services\Laravel\DatabaseTransactions;
use Laracasts\TestDummy\Factory as TestDummy;

class ExampleTest extends TestCase {

	use DatabaseTransactions;

	/** @test */
	public function testBasicExample()
	{

		$this->visit('/');

	}

	/** @test */
	public function it_visit_articles()
	{
			$this->visit('/articles')
					->see('Synchro Articles');
	}

	/** @test */
	public function it_display_all_posts()
	{
		TestDummy::Create('App\Articles',['title' => 'gesu']);

		$this->visit('/articles')
				->andSee('gesu');

	}

		/** @test */
	public function it_login()
	{
		// login
		$this->visit('/articles')
					->click('Login')
					->andSee('Forgot Your Password')
					->type('wiki@mail.com','email')
					->type('wikiwiki','password')
					->press('Login')
					->andSee('Logout');
	}

		/** @test */
	public function it_create_articles_until_confirm()
	{
		$this->visit('/articles')
					->click('Login')
					->andSee('Forgot Your Password')
					->type('wiki@mail.com','email')
					->type('wikiwiki','password')
					->press('Login')
					->visit('/articles/create')
					->andSee('Write a New Article')
					->type('title','title')
					->type('titleUnitTest','title')
					->type('bodyUnitTest','body')
					->select('tag_list','2')
					->andPress('Confirm Article')
					->andSee('Please Cofirm Your Article');
	}

		/** @test */
	public function it_create_articles()
	{
		$this->visit('/articles')
					->click('Login')
					->andSee('Forgot Your Password')
					->type('wiki@mail.com','email')
					->type('wikiwiki','password')
					->press('Login')
					->visit('/articles/create')
					->andSee('Write a New Article')
					->type('title','title')
					->type('titleUnitTest','title')
					->type('bodyUnitTest','body')
					->select('tag_list','2')
					->andPress('Confirm Article')
					->andSee('Please Cofirm Your Article')
					->press('Add Article');
	}


		/** @test */
	public function it_create_articles_useTestDummy()
	{

		$article = TestDummy::create('App\Articles');
		// dd($article)

		$this->visit('/articles')
					->click('Login')
					->andSee('Forgot Your Password')
					->type('wiki@mail.com','email')
					->type('wikiwiki','password')
					->press('Login')
					->visit('/articles/create')
					->andSee('Write a New Article')
					->type($article['title'],'title')
					->type($article['body'],'body')
					->select('tag_list','2')
					->andPress('Confirm Article')
					->andSee('Please Cofirm Your Article')
					->press('Add Article');
	}
}
