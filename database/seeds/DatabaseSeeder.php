<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->clearImages(storage_path('app/public/articles'), []);

        $this->call(LanguagesTableSeeder::class);

        if (env('APP_ENV') != 'production') {
            $this->call(UsersTableSeeder::class);
            $this->call(PagesTableSeeder::class);
            $this->call(BlogSeeder::class);
        }
    }

    protected function clearImages(string $path, array $exclude = [])
    {
        $images = glob(sprintf('%s/*.jpg', $path));

        foreach ($images as $image) {
            if (!in_array(basename($image), $exclude)) {
                File::delete($image);
            }
        }
    }
}
