<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoInformaticaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cursoinformatica', function (Blueprint $table) {
            $table->dropColumn('nivel');
            $table->integer('duracion')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cursoinformatica', function (Blueprint $table) {
            $table->string('nivel')->after('descripcion');
            $table->integer('duracions')->nullable(false)->change();
        });
    }
}
