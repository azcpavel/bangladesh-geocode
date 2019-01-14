<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivisionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('divisions', function (Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->charset = 'utf8';
			$table->collation = 'utf8_unicode_ci';

			$table->increments('id');
			$table->string('name');
			$table->string('bn_name');
			$table->timestamps();

			$table->primary('id');
		});

		DB::table('divisions')->insert([
			['id' =>1, 'name' =>'Barishal', 'bn_name' =>'বরিশাল'],
			['id' =>2, 'name' =>'Chattogram', 'bn_name' =>'চট্টগ্রাম'],
			['id' =>3, 'name' =>'Dhaka', 'bn_name' =>'ঢাকা'],
			['id' =>4, 'name' =>'Khulna', 'bn_name' =>'খুলনা'],
			['id' =>5, 'name' =>'Rajshahi', 'bn_name' =>'রাজশাহী'],
			['id' =>6, 'name' =>'Rangpur', 'bn_name' =>'রংপুর'],
			['id' =>7, 'name' =>'Sylhet', 'bn_name' =>'সিলেট'],
			['id' =>8, 'name' =>'Mymensingh', 'bn_name' =>'ময়মনসিংহ']
		]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('divisions');
	}
}
