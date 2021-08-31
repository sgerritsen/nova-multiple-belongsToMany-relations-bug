<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\PartnerSchool;
use Illuminate\Database\Seeder;

class AddApplicationsWithAttachedPartnerSchoolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partnerSchoolForAll = PartnerSchool::create();
        for ($i =0; $i < 3; $i++) {
            /** @var Application $application */
            $application = Application::create();
            $application->partnerSchools()->attach($partnerSchoolForAll);
            $application->partnerSchools()->attach(PartnerSchool::create());
            $application->partnerSchools()->attach(PartnerSchool::create());
            $application->partnerSchools()->attach(PartnerSchool::create());
            $application->selectedDestinations()->attach($partnerSchoolForAll);
            $application->selectedDestinations()->attach(PartnerSchool::create());
            $application->selectedDestinations()->attach(PartnerSchool::create());
        }
    }
}
