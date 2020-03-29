<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee', function (Blueprint $table) {
            // name カラムの長さを32から50に変更します。
            $table->string('name', 50)->change();

            // nameカラムの後にint型でageカラムを追加。デフォルト値に0を指定。
            $table->integer('age')->after('name')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee', function (Blueprint $table) {
            $table->string('name',32)->change();
            $table->dropColumn('age');
        });
    }
}
