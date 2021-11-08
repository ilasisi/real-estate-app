<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('document_unique_id')->default("DOC-" . mt_rand(10000000,99999999) . "-BRC");
            $table->foreignId('tenant_id')
                    ->constrained()
                    ->onDelete('cascade');
            $table->string('document_category');
            $table->string('document_url');
            $table->string('document_format');
            $table->string('description');
            $table->foreignId('assigned_id')
                    ->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
