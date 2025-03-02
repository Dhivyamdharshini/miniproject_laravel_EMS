<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('register_number')->unique();
            $table->string('class');
            $table->string('event_selected');
            $table->timestamps();
        });
    }
    
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
};
