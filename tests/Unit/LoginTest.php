<?php 

namespace Tests\Feature; 

use Tests\TestCase; 

use Illuminate\Foundation\Testing\WithFaker; 
use Illuminate\Foundation\Testing\RefreshDatabase; 
use Spatie\Permission\Models\Role; 
use Faker\Factory as Faker; 
use App\User; 
use Hash; 

class LoginTest extends TestCase { 

  protected $faker, $user; 

  /** 
   * Create a new faker instance. 
   * 
   * @return void 
   */ 

   public function __construct() { 

     parent::__construct(); 
     $this->faker = Faker::create();
    }

    /**
     * Create a new user instance.
     *
     * @return array
     */
    private function validCredentials()
    {
        self::createRoles();
        $password   = $this->faker->password;
        $this->user = factory(User::class)->create(['password' => Hash::make($password)]);

        return [
            'email'    => $this->user->email,
            'password' => $password,
        ];
    }




    
}


