<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNivelToCursoinformaticaTable extends Migration
{
    public function up()
    {
        Schema::table('cursoinformatica', function (Blueprint $table) {
            $table->string('nivel')->after('duracion');
        });
    }

    public function down()
    {
        Schema::table('cursoinformatica', function (Blueprint $table) {
            $table->dropColumn('nivel');
        });
    }
}
