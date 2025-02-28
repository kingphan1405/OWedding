<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BudgetCategory;
use App\Models\BudgetItem;
use App\Models\Task;
use App\Models\Template;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create()->each(function ($user){
            BudgetCategory::factory()->count(5)->for($user)->create()->each(function ($budgetCategory){
                $numberItems = random_int(2,5);
    
                BudgetItem::factory()->count($numberItems)->for($budgetCategory)->create();
            }); 
        });
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin1@gmail.com',
            'password'=>11223344,
            'role'=>'admin',
        ]);
        Task::factory()->create([
            'user_id' => 2,
            'title'=> 'tesst title2',   
            'period'=> 'TRƯỚC NGÀY CƯỚI 6 THÁNG',
            'completed' => true,
        ]);
        Template::factory(1)->create([
            'name' => "template1",
            'photo' => "",
            'description' => "Giao diện tối ưu cho điện thoại,phong cách đơn giản, tinh tế, không thể hiện sự cầu kì, với tone màu xám xanh nhẹ nhàng."
        ]);
    }
}
