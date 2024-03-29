<?php

    namespace Database\Factories;

    use App\User;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;
    use Illuminate\Support\Str;

    class UserFactory extends Factory
    {
        protected $model = User::class;

        public function definition(): array
        {
            return [
                'name'           => $this->faker->name,
                'email'          => 'admin@mail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now(),
                'role'           => "admin",
                'image'          => $this->faker->imageUrl(640,480),
                'imagethumb'     => $this->faker->imageUrl(640,480),
            ];
        }
    }
