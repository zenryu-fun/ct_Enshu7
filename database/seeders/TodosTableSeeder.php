<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '起床',
        ];
        Todo::create($param);
        $param = [
            'name' => '出勤',
        ];
        Todo::create($param);
        $param = [
            'name' => '昼休憩',
        ];
        Todo::create($param);
        $param = [
            'name' => '退勤',
        ];
        Todo::create($param);
        $param = [
            'name' => '就寝',
        ];
        Todo::create($param);

    }
}
