<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
// $factory->define(App\User::class, function (Faker\Generator $faker) {
    // static $password;

    // return [
        // 'name' => $faker->name,
        // 'email' => $faker->unique()->safeEmail,
        // 'password' => $password ?: $password = bcrypt('secret'),
        // 'remember_token' => str_random(10),
    // ];
// });

$factory->define(App\Nasabah::class, function (Faker\Generator $faker) {
    static $rekening;

    return [
			   
			'nama_lengkap' 		=> $faker->name,
			'rekening'			=> $faker->numberBetween,
			'alamat'			=> $faker->city,
						
		// $faker->randomDigit;
		// $faker->numberBetween(1,100);
		// $faker->word;
		// $faker->paragraph;
		// $faker->lastName;
		// $faker->city;
		// $faker->year;
		// $faker->domainName;
		// $faker->creditCardNumber;
		// $faker->region; // fr_FR Region "Saint-Pierre-et-Miquelon"
// $faker->bankAccountNumber; // pl_PL "PL14968907563953822118075816"
// $faker->cellNumber; // nz_NZ "021 123 4567"
		
		


    ];
});
