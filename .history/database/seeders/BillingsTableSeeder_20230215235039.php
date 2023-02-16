public function run()
{
    $faker = \Faker\Factory::create();
    $used_appointment_ids = [];

    for ($i = 0; $i < 50; $i++) {
        $appointment_id = $faker->unique()->numberBetween(1, 50);

        while (in_array($appointment_id, $used_appointment_ids)) {
            $appointment_id = $faker->unique()->numberBetween(1, 50);
        }

        array_push($used_appointment_ids, $appointment_id);

        Billing::create([
            'patient_id' => $faker->numberBetween(1, 50),
            'appointment_id' => $appointment_id,
            'total_cost' => $faker->randomFloat(2, 50, 200),
            'payment_method' => $faker->randomElement(['Cash', 'debit card', 'credit card', 'insurance']),
            'insurance_provider' => $faker->randomElement([null, 'Aetna', 'Cigna', 'Blue Cross Blue Shield']),
        ]);
    }
}
