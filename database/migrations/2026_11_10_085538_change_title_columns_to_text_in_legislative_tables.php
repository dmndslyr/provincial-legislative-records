
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('ordinances', function (Blueprint $table) {
            $table->text('title')->change();
        });

        Schema::table('resolutions', function (Blueprint $table) {
            $table->text('title')->change();
        });
    }

    public function down(): void
    {
        Schema::table('ordinances', function (Blueprint $table) {
            $table->string('title', 255)->change();
        });

        Schema::table('resolutions', function (Blueprint $table) {
            $table->string('title', 255)->change();
        });
    }
};
