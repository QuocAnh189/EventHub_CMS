<?php

namespace Database\Seeders;

use App\Domains\Event\Model\Expenses;
use App\Domains\Event\Model\SubExpenses;
use Illuminate\Database\Seeder;

class SubExpenseSeeder extends Seeder
{
    public function run(): void
    {
        $expenses = Expenses::all();

        foreach ($expenses as $expense) {
            $remainingTotal = $expense->total;
            $subExpenseCount = rand(1, 5);
            $created = fake()->dateTimeBetween($expense->created_at);

            for ($i = 1; $i <= $subExpenseCount; $i++) {
                if ($i === $subExpenseCount) {
                    $price = $remainingTotal;
                } else {
                    $price = round(rand(1, $remainingTotal * 100) / 100, 2);
                }

                SubExpenses::factory()->create([
                    'expense_id' => $expense->id,
                    'price' => $price,
                    'created_at' => $created,
                    'updated_at' => now(),
                ]);

                $remainingTotal -= $price;
            }
        }
    }
}
