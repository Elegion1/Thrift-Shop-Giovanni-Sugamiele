<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        // ['giocattoli', 'accessori', 'vestiti', 'borsette', 'portafogli', 'ufficio'];

       $categories = [
         "Motori",
         "Immobili",
         "Lavoro e Servizi",
         "Elettronica",
         "Per la casa e la persona",
         "Sport e Hobby"
        ];

    

        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
