<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;

class UserSeeder extends Seeder {
  
  public function run()
  {
    
    Eloquent::unguard();
    
    // users::create(array(
    //   'name' => 'user',
    //   'email' => 'user@gmail.com',
    //   'password' => Hash::make('user')
    // ));
   
    
  }
}
