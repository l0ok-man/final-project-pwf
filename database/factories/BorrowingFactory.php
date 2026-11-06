<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BorrowingFactory extends Factory
{
    public function definition(): array
    {
        $borrowDate = $this->faker->dateTimeThisMonth();
        $dueDate = (clone $borrowDate)->modify('+7 days');

        return [
            'user_id' => User::factory(),
            'member_id' => Member::factory(),
            'book_id' => Book::factory(),
            'borrow_date' => $borrowDate,
            'due_date' => $dueDate,
            'return_date' => null,
            'status' => 'borrowed',
        ];
    }
}
