use Illuminate\Database\Seeder;

class ConferencesSeeder extends Seeder
{
    public function run()
    {
        DB::table('conferences')->insertOrIgnore([
            ['name' => 'AFC'],
            ['name' => 'NFC'],
        ]);
    }
}

// DivisionsSeeder.php
use Illuminate\Database\Seeder;

class DivisionsSeeder extends Seeder
{
    public function run()
    {
        $divisions = [
            ['name' => 'AFC North'],
            ['name' => 'AFC South'],
            ['name' => 'AFC East'],
            ['name' => 'AFC West'],
            ['name' => 'NFC North'],
            ['name' => 'NFC South'],
            ['name' => 'NFC East'],
            ['name' => 'NFC West'],
        ];

        DB::table('divisions')->insertOrIgnore($divisions);
    }
}