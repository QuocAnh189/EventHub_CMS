<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(CommandSeeder::class);
        $this->call(FunctionSeeder::class);
        $this->call(CommandFunctionSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserFollowersSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(EventSeeder::class);
        $this->call(EventCategoriesSeeder::class);
        $this->call(InvitationSeeder::class);
        $this->call(SubImageSeeder::class);
        $this->call(ReasonSeeder::class);
        $this->call(TicketTypeSeeder::class);
        $this->call(ExpenseSeeder::class);
        $this->call(SubExpenseSeeder::class);
        $this->call(CouponSeeder::class);
        $this->call(EventCouponsSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(EventFavoritesSeeder::class);
        $this->call(ConversationSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(MessageAttachmentsSeeder::class);
    }
}
