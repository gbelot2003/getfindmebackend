<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Gerardo A. Belot',
                'email' => 'gerardo.belot@gmail.com',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'IveokBCLx7',
                'created_at' => '2020-08-09 18:02:58',
                'updated_at' => '2020-08-09 18:02:58',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Arlene Batz',
                'email' => 'dorcas.tremblay@example.org',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '7pkJanqGEy',
                'created_at' => '2020-08-09 18:02:58',
                'updated_at' => '2020-08-09 18:02:58',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Florida Mohr',
                'email' => 'kaitlyn.wiza@example.com',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'iLfx2LGUbK',
                'created_at' => '2020-08-09 18:02:58',
                'updated_at' => '2020-08-09 18:02:58',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Prof. Faye Wilderman IV',
                'email' => 'mstrosin@example.net',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'dcttshRxZO',
                'created_at' => '2020-08-09 18:02:59',
                'updated_at' => '2020-08-09 18:02:59',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Mr. Roel Thompson I',
                'email' => 'douglas.ziemann@example.com',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'wjiuktWKAE',
                'created_at' => '2020-08-09 18:02:59',
                'updated_at' => '2020-08-09 18:02:59',
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Mr. Mohamed Hermiston',
                'email' => 'geffertz@example.net',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'ji2PPtdnR2',
                'created_at' => '2020-08-09 18:02:59',
                'updated_at' => '2020-08-09 18:02:59',
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Miss Hanna Metz III',
                'email' => 'jeanne.mayert@example.net',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'xetAZq3IFn',
                'created_at' => '2020-08-09 18:02:59',
                'updated_at' => '2020-08-09 18:02:59',
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Christy Kunze',
                'email' => 'schuster.amely@example.org',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'ctCzvuxzZR',
                'created_at' => '2020-08-09 18:02:59',
                'updated_at' => '2020-08-09 18:02:59',
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Alba Heaney',
                'email' => 'msipes@example.org',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '03IzuVUmBu',
                'created_at' => '2020-08-09 18:02:59',
                'updated_at' => '2020-08-09 18:02:59',
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Elian Lubowitz IV',
                'email' => 'quigley.golda@example.net',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'BhpcVtlcKU',
                'created_at' => '2020-08-09 18:02:59',
                'updated_at' => '2020-08-09 18:02:59',
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Cale Harber',
                'email' => 'rempel.katelyn@example.net',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'eqmbwMlaK5',
                'created_at' => '2020-08-09 18:02:59',
                'updated_at' => '2020-08-09 18:02:59',
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'Kyle Braun',
                'email' => 'bbosco@example.com',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'wXTQ79xm6c',
                'created_at' => '2020-08-09 18:02:59',
                'updated_at' => '2020-08-09 18:02:59',
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'Jeffery Cassin',
                'email' => 'cwhite@example.org',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'VNg1RqCrnX',
                'created_at' => '2020-08-09 18:02:59',
                'updated_at' => '2020-08-09 18:02:59',
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'Angeline Hand',
                'email' => 'beaulah48@example.com',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'Dbjp5KCNYV',
                'created_at' => '2020-08-09 18:02:59',
                'updated_at' => '2020-08-09 18:02:59',
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'Ms. Filomena Paucek I',
                'email' => 'zernser@example.net',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'Jpujkp7NW8',
                'created_at' => '2020-08-09 18:02:59',
                'updated_at' => '2020-08-09 18:02:59',
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Lora Johns',
                'email' => 'sauer.tamara@example.net',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'HxuJvHuD3Q',
                'created_at' => '2020-08-09 18:02:59',
                'updated_at' => '2020-08-09 18:02:59',
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'Ethel Upton',
                'email' => 'roxane.sawayn@example.net',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'EsIACFS8do',
                'created_at' => '2020-08-09 18:02:59',
                'updated_at' => '2020-08-09 18:02:59',
            ),
            17 =>
            array(
                'id' => 18,
                'name' => 'Cecil Kulas',
                'email' => 'maggio.bonnie@example.net',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'Gr0sWHFq4B',
                'created_at' => '2020-08-09 18:02:59',
                'updated_at' => '2020-08-09 18:02:59',
            ),
            18 =>
            array(
                'id' => 19,
                'name' => 'Mrs. Nyasia Farrell',
                'email' => 'marquardt.sandra@example.org',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'VqdBerf065',
                'created_at' => '2020-08-09 18:02:59',
                'updated_at' => '2020-08-09 18:02:59',
            ),
            19 =>
            array(
                'id' => 20,
                'name' => 'Santa Torphy IV',
                'email' => 'cormier.levi@example.com',
                'email_verified_at' => '2020-08-09 18:02:58',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'G3Bgpb4nWQ',
                'created_at' => '2020-08-09 18:03:00',
                'updated_at' => '2020-08-09 18:03:00',
            ),
        ));
    }
}
