<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CoinsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(DocumentsTableSeeder::class);
        $this->call(FavoritesTableSeeder::class);
        $this->call(HistoriesTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(UserbanksTableSeeder::class);
    }
}
