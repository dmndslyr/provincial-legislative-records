<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ordinance;
use App\Models\Resolution;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | PROVINCIAL ORDINANCES OF LA UNION
        |--------------------------------------------------------------------------
        */

        $ordinances = [
            [
                'ordinance_number' => '298-2021',
                'title' => 'Amending Sangguniang Panlalawigan Ordinance No. 209-2020 Entitled: An Act Imposing Curfew Within the Territorial Jurisdiction of the Province of La Union from 8:00 in the Evening to 5:00 in the Morning as a Precautionary Measure in Times of Pandemic and Other National or Province-Wide Public Health Emergencies, as Amended by SP Ordinance No. 290-2021',
                'date_passed' => '2021-08-01',
                'author' => 'Sangguniang Panlalawigan of La Union',
                'description' => 'An ordinance amending the existing provincial curfew regulations during public health emergencies.',
            ],
            [
                'ordinance_number' => '239-2020',
                'title' => 'An Act Prohibiting the Sneaking-In or Smuggling of Contrabands in Detention Facilities, Jails, Reformatory Centers, Halfway Houses and Shelters in the Province of La Union',
                'date_passed' => '2020-01-01',
                'author' => 'Sangguniang Panlalawigan of La Union',
                'description' => 'An ordinance prohibiting the introduction or smuggling of prohibited items into detention facilities and other specified institutions.',
            ],
            [
                'ordinance_number' => '236-2020',
                'title' => 'An Act Creating the Environment and Natural Resources Office (ENRO), and the Position of Provincial Environment and Natural Resources Officer in the Provincial Government of La Union',
                'date_passed' => '2020-01-01',
                'author' => 'Sangguniang Panlalawigan of La Union',
                'description' => 'An ordinance establishing the Environment and Natural Resources Office and creating the corresponding provincial position.',
            ],
            [
                'ordinance_number' => '199-2019',
                'title' => 'An Ordinance Establishing the Provincial Museum and Center for Culture, Heritage and Arts of La Union',
                'date_passed' => '2019-01-01',
                'author' => 'Sangguniang Panlalawigan of La Union',
                'description' => 'An ordinance establishing a provincial institution dedicated to the preservation and promotion of La Union culture, heritage and arts.',
            ],
            [
                'ordinance_number' => '165-2019',
                'title' => 'La Union Meat Inspection Code',
                'date_passed' => '2019-01-01',
                'author' => 'Sangguniang Panlalawigan of La Union',
                'description' => 'An ordinance establishing regulations and standards concerning meat inspection in the Province of La Union.',
            ],
            [
                'ordinance_number' => '163-2019',
                'title' => 'Paperless Session System and the Legislative Information System of the Sangguniang Panlalawigan',
                'date_passed' => '2019-01-01',
                'author' => 'Sangguniang Panlalawigan of La Union',
                'description' => 'An ordinance concerning the implementation of a paperless session system and legislative information system.',
            ],
            [
                'ordinance_number' => '123-2017',
                'title' => 'An Act Prohibiting the Acts of Vandalism in All Public Parks and Areas of Public Domain Within the Province of La Union',
                'date_passed' => '2017-01-01',
                'author' => 'Sangguniang Panlalawigan of La Union',
                'description' => 'An ordinance prohibiting vandalism in public parks and other public areas within the province.',
            ],
            [
                'ordinance_number' => '118-2017',
                'title' => 'An Ordinance Providing Mechanisms for the Production, Distribution and Use of Iron-Fortified Rice in the Province of La Union, Otherwise Known as the La Union Iron-Fortified Rice Ordinance of 2017',
                'date_passed' => '2017-01-01',
                'author' => 'Sangguniang Panlalawigan of La Union',
                'description' => 'An ordinance promoting the production, distribution and consumption of iron-fortified rice.',
            ],
        ];

        foreach ($ordinances as $ordinance) {
            Ordinance::updateOrCreate(
                ['ordinance_number' => $ordinance['ordinance_number']],
                $ordinance
            );
        }


        /*
        |--------------------------------------------------------------------------
        | PROVINCIAL RESOLUTIONS OF LA UNION
        |--------------------------------------------------------------------------
        */

        $resolutions = [
            [
                'resolution_number' => '1230-2024',
                'title' => 'Resolution Declaring a State of Calamity in the Province of La Union Due to the Severe Impacts of Tropical Cyclone Carina and the Enhanced Southwest Monsoon',
                'date_passed' => '2024-07-01',
                'author' => 'Sangguniang Panlalawigan of La Union',
                'description' => 'A resolution declaring the Province of La Union under a State of Calamity to facilitate immediate and coordinated response measures for affected communities.',
            ],
            [
                'resolution_number' => '1345-2022',
                'title' => 'A Resolution Expressing the Desire of the Provincial Government of La Union to Establish a Sisterhood Relationship with the Provincial Government of Bataan',
                'date_passed' => '2022-10-04',
                'author' => 'Sangguniang Panlalawigan of La Union',
                'description' => 'A resolution expressing the intention to establish a sisterhood relationship between the Provincial Governments of La Union and Bataan.',
            ],
            [
                'resolution_number' => '445-2022',
                'title' => 'Resolution Congratulating Prosecutor Bonifacio B. Mangibin for His Appointment as the Provincial Prosecutor of La Union',
                'date_passed' => '2022-01-01',
                'author' => 'Hon. Jennifer C. Mosuela-Fernandez',
                'description' => 'A resolution congratulating Prosecutor Bonifacio B. Mangibin on his appointment as Provincial Prosecutor of La Union.',
            ],
            [
                'resolution_number' => '1413-2021',
                'title' => 'Declaring a State of Calamity in the Province of La Union Due to Destruction and Loss of Livestock, Agricultural Products and Infrastructures Brought About by Severe Tropical Storm Maring',
                'date_passed' => '2021-10-01',
                'author' => 'Sangguniang Panlalawigan of La Union',
                'description' => 'A resolution declaring a state of calamity following the damage caused by Severe Tropical Storm Maring.',
            ],
            [
                'resolution_number' => '211-2020',
                'title' => 'Requesting the Office of the Governor Through the Local Finance Committee to Conduct a Feasibility Study Concerning a Digital System in the Distribution of Financial Assistance to PGLU Scholars',
                'date_passed' => '2020-02-21',
                'author' => 'Hon. Gerard G. Ostrea',
                'description' => 'A resolution requesting a feasibility study for a digital system to distribute financial assistance to La Union scholars.',
            ],
            [
                'resolution_number' => '230-2018',
                'title' => 'Urging All Local Chief Executives and Punong Barangays in the Province to Invest in the Installation of High Definition CCTV Cameras in Their Respective Jurisdictions',
                'date_passed' => '2018-05-17',
                'author' => 'Sangguniang Panlalawigan of La Union',
                'description' => 'A resolution encouraging local government units and barangays to prioritize CCTV installation and communication equipment for public safety.',
            ],
            [
                'resolution_number' => '231-2018',
                'title' => 'Urging All Barangay Councils in the Province to Include the Development of an Efficient Communication System in Their Annual Investment Plans',
                'date_passed' => '2018-05-17',
                'author' => 'Sangguniang Panlalawigan of La Union',
                'description' => 'A resolution encouraging barangay councils to include communication systems and CCTV installation in their annual investment plans.',
            ],
            [
                'resolution_number' => '092-2008',
                'title' => 'A Resolution Enhancing the Welfare and Protection of Minors and Regulating Their Activity from Roaming and Loitering Within the Territorial Jurisdiction of the Province',
                'date_passed' => '2008-01-01',
                'author' => 'Sangguniang Panlalawigan of La Union',
                'description' => 'A resolution concerning the welfare and protection of minors and regulating unauthorized nighttime roaming and loitering.',
            ],
        ];

        foreach ($resolutions as $resolution) {
            Resolution::updateOrCreate(
                ['resolution_number' => $resolution['resolution_number']],
                $resolution
            );
        }
    }
}
