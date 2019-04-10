<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddDefaultinformations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Add superadmin account
        DB::table('users_admin')->insert(array(
            'id_num' => 'superadmin01',
            'email' => 'itstaff.ptc@gmail.com',
            'password' => Hash::make('admin'),
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'usertype' => 'superadmin',
        ));

        //Add Semester
        DB::table('semester_info')->insert(array(
            'title' => '1st Sem',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('semester_info')->insert(array(
            'title' => '2nd Sem',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));

        DB::table('semester_info')->insert(array(
            'title' => '3rd Sem',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));

        //Add Year Level
        DB::table('yearlevel_info')->insert(array(
            'title' => 'First Year',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));

        DB::table('yearlevel_info')->insert(array(
            'title' => 'Second Year',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));

        DB::table('yearlevel_info')->insert(array(
            'title' => 'Third Year',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));

        DB::table('yearlevel_info')->insert(array(
            'title' => 'Fourth Year',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));

        DB::table('yearlevel_info')->insert(array(
            'title' => 'Grade 11',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));

        DB::table('yearlevel_info')->insert(array(
            'title' => 'Grade 12',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));

        //Add Section
        DB::table('section_info')->insert(array(
            'title' => 'A',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));

        DB::table('section_info')->insert(array(
            'title' => 'B',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));

        DB::table('section_info')->insert(array(
            'title' => 'C',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));

        DB::table('section_info')->insert(array(
            'title' => 'D',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));

        DB::table('section_info')->insert(array(
            'title' => 'Executive',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));

        DB::table('section_info')->insert(array(
            'title' => 'Senior High School',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));

        //Add program information
        DB::table('programs_information')->insert(array(
            'program_code' => 'ABA',
            'descriptive_title' => 'Associate in Business Administration',
            'advising_id' => '1',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('programs_information')->insert(array(
            'program_code' => 'COA',
            'descriptive_title' => 'Certificate in Office Administration',
            'advising_id' => '1',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('programs_information')->insert(array(
            'program_code' => 'CCS',
            'descriptive_title' => 'Certificate in Computer Science',
            'advising_id' => '2',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('programs_information')->insert(array(
            'program_code' => 'CHRM',
            'descriptive_title' => 'Certificate in Hotel and Restaurant Management',
            'advising_id' => '1',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('programs_information')->insert(array(
            'program_code' => 'BSIT',
            'descriptive_title' => 'Bachelor of Science in Information Technology',
            'advising_id' => '2',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('programs_information')->insert(array(
            'program_code' => 'BSOA',
            'descriptive_title' => 'Bachelor of Science in Office Administration',
            'advising_id' => '1',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('programs_information')->insert(array(
            'program_code' => 'BSIT-EXEC',
            'descriptive_title' => 'Executive - Bachelor of Science in Information Technology',
            'advising_id' => '2',        
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('programs_information')->insert(array(
            'program_code' => 'BSOA-EXEC',
            'descriptive_title' => 'Executive - Bachelor of Science in Office Administration',
            'advising_id' => '1',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('programs_information')->insert(array(
            'program_code' => 'ABM',
            'descriptive_title' => 'Accountancy, Business and Management',
            'advising_id' => '3',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('programs_information')->insert(array(
            'program_code' => 'HUMSS',
            'descriptive_title' => 'Humanities and Social Science',
            'advising_id' => '3',        
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('programs_information')->insert(array(
            'program_code' => 'TECH-VOC ICT',
            'descriptive_title' => 'Tech-Voc Information and Communications Technology',
            'advising_id' => '3',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_defaultinformations');
    }
}
