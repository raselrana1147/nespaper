<?php
    
    use App\User;
    use Illuminate\Database\Seeder;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'user_role_id' => 1,
            'password' => bcrypt('12345678')
        ]);
    }
}
