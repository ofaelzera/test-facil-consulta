<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('estado')->delete();

        \DB::table('estado')->insert(array (
            0 =>
            array (
                'id' => 1,
                'nome' => 'Acre',
                'uf' => 'AC',
                'ibge' => 12,
                'ddd' => '68',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'nome' => 'Alagoas',
                'uf' => 'AL',
                'ibge' => 27,
                'ddd' => '82',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'nome' => 'Amazonas',
                'uf' => 'AM',
                'ibge' => 13,
                'ddd' => '97,92',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'nome' => 'Amapá',
                'uf' => 'AP',
                'ibge' => 16,
                'ddd' => '96',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'nome' => 'Bahia',
                'uf' => 'BA',
                'ibge' => 29,
                'ddd' => '77,75,73,74,71',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'nome' => 'Ceará',
                'uf' => 'CE',
                'ibge' => 23,
                'ddd' => '88,85',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'nome' => 'Distrito Federal',
                'uf' => 'DF',
                'ibge' => 53,
                'ddd' => '61',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'nome' => 'Espírito Santo',
                'uf' => 'ES',
                'ibge' => 32,
                'ddd' => '28,27',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'nome' => 'Goiás',
                'uf' => 'GO',
                'ibge' => 52,
                'ddd' => '62,64,61',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'nome' => 'Maranhão',
                'uf' => 'MA',
                'ibge' => 21,
                'ddd' => '99,98',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'nome' => 'Minas Gerais',
                'uf' => 'MG',
                'ibge' => 31,
                'ddd' => '34,37,31,33,35,38,32',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'nome' => 'Mato Grosso do Sul',
                'uf' => 'MS',
                'ibge' => 50,
                'ddd' => '67',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'nome' => 'Mato Grosso',
                'uf' => 'MT',
                'ibge' => 51,
                'ddd' => '65,66',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'nome' => 'Pará',
                'uf' => 'PA',
                'ibge' => 15,
                'ddd' => '91,94,93',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'nome' => 'Paraíba',
                'uf' => 'PB',
                'ibge' => 25,
                'ddd' => '83',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'nome' => 'Pernambuco',
                'uf' => 'PE',
                'ibge' => 26,
                'ddd' => '81,87',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'nome' => 'Piauí',
                'uf' => 'PI',
                'ibge' => 22,
                'ddd' => '89,86',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'nome' => 'Paraná',
                'uf' => 'PR',
                'ibge' => 41,
                'ddd' => '43,41,42,44,45,46',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'nome' => 'Rio de Janeiro',
                'uf' => 'RJ',
                'ibge' => 33,
                'ddd' => '24,22,21',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'nome' => 'Rio Grande do Norte',
                'uf' => 'RN',
                'ibge' => 24,
                'ddd' => '84',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'nome' => 'Rondônia',
                'uf' => 'RO',
                'ibge' => 11,
                'ddd' => '69',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'nome' => 'Roraima',
                'uf' => 'RR',
                'ibge' => 14,
                'ddd' => '95',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'nome' => 'Rio Grande do Sul',
                'uf' => 'RS',
                'ibge' => 43,
                'ddd' => '53,54,55,51',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'nome' => 'Santa Catarina',
                'uf' => 'SC',
                'ibge' => 42,
                'ddd' => '47,48,49',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'nome' => 'Sergipe',
                'uf' => 'SE',
                'ibge' => 28,
                'ddd' => '79',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'nome' => 'São Paulo',
                'uf' => 'SP',
                'ibge' => 35,
                'ddd' => '11,12,13,14,15,16,17,18,19',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'nome' => 'Tocantins',
                'uf' => 'TO',
                'ibge' => 17,
                'ddd' => '63',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'id' => 99,
                'nome' => 'Exterior',
                'uf' => 'EX',
                'ibge' => 99,
                'ddd' => NULL,
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));


    }
}
