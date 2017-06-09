<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'avatar')) {
                $table->string('avatar')->nullable()->after('email');
            }
            $table->integer('role_id')->nullable()->after('id');
            $table->string('surname')->nullable()->after('role_id');
            $table->string('middle_name')->nullable()->after('name');
            $table->string('phone')->nullable()->after('middle_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
            $table->dropColumn('role_id');
            $table->dropColumn('surname');
            $table->dropColumn('middle_name');
            $table->dropColumn('phone');
        });
    }
}
