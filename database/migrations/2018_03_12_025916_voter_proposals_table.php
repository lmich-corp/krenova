<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VoterProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voter_proposals', function (Blueprint $table) {
            $table->integer('voter_id')->unsigned()->nullable();
            $table->foreign('voter_id')->references('id')
                  ->on('votes')->onDelete('cascade');

            $table->integer('proposal_id')->unsigned()->nullable();
            $table->foreign('proposal_id')->references('id')
                  ->on('proposals')->onDelete('cascade');

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
        Schema::drop('voter_proposals');
    }
}
