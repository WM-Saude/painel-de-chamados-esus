<?php

use App\Models\Departaments\Departaments;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calls', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Departaments::class)->constrained();
            $table->string('patients_name');
            $table->integer('call_attempts')->default(0);
            $table->boolean('call_closed')->default(0);
            $table->boolean('calling')->default(0);
            $table->boolean('bip')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calls');
    }
};
