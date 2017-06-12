<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuildTableRalationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table
                ->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
        Schema::table('clients', function (Blueprint $table) {

            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table
                ->foreign('client_type_id')
                ->references('id')
                ->on('client_types')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });

        Schema::table('client_histories', function (Blueprint $table) {

            $table
                ->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('user_tasks', function (Blueprint $table) {

            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table
                ->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });

        Schema::table('posts', function (Blueprint $table) {

            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table
                ->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table
                ->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table
                ->foreign('district_id')
                ->references('id')
                ->on('districts')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table
                ->foreign('wall_type_id')
                ->references('id')
                ->on('wall_types')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table
                ->foreign('currency_id')
                ->references('id')
                ->on('currencies')
                ->onUpdate('cascade')
                ->onDelete('restrict');
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
//            $table->dropForeign('users_role_id_foreign');
            $table->dropForeign(['role_id']);
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['client_type_id']);
        });
        Schema::table('client_histories', function (Blueprint $table) {
            $table->dropForeign(['client_id']);
        });
        Schema::table('user_tasks', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['client_id']);
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['client_id']);
            $table->dropForeign(['category_id']);
            $table->dropForeign(['district_id']);
            $table->dropForeign(['wall_type_id']);
            $table->dropForeign(['currency_id']);
        });
    }
}
