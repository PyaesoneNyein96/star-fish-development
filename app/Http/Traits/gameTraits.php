<?php

namespace App\Http\Traits;

use App\Models\Unit;
use App\Models\Lesson;
use App\Models\StudentGame;
use App\Models\StudentUnit;
use App\Models\StudentGrade;
use App\Models\StudentLesson;
use App\Models\AssessmentFinishData;

trait gameTraits
{

    // common_functions

    // listening_and_choosing_clouds_one,
    // listening_and_choosing_clouds_two
    // reading_carousel,
    // video_player_lessons,
    // video_player_song,
    // drag_n_drop_and_letter ,
    // writing_topic,
    // reading_diagram,
    // writing_opposite,
    // letter_tracing,
    // fill_in_the_blanks,
    // matching_columns,
    // listening_and_choosing_pics_two,
    // drag_n_drop_and_pics

    ///////////////////////////////////////////////////////////////
    /// SUb Unit Games ************
    ///////////////////////////////////////////////////////////////
    public function Subunit_category($games,  $unit)
    {

        $gamesData = [];
        foreach ($games as  $game) {

            if (!$game && !method_exists($this, $game->category->name)) return "game and function are not match.";

            $game = [
                'game_id' => $game->id,
                'game_name' => $game->name,
                'game_status' => $game->status,
                'category' => $game->category->name,
            ];

            $gamesData[] = $game;
        }

        return $unit = [
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit' => count($gamesData) > 1 ?  true  : false,
            'games' => $gamesData,

        ];
    }


    public function common_functions($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];


        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        $roundExist = $game->ans_n_ques->some(function ($g) {
            return array_key_exists('round', $g->toArray());
        });


        $data = [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>  $game->instructions->isEmpty() ? null : $game->instructions,
        ];

        if ($roundExist) {
            $data['rounds'] = $game->ans_n_ques->groupBy('round')->values();
            if (count($data['rounds'][0]) == 1) $data["rounds"] = $game->ans_n_ques;
        } else {
            $data['data'] = $game->ans_n_ques;
        }
        return $data;
    }



    //////////////////////////////////////////////////////////////
    // For without round Games
    public function reading_carousel($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];
        // $game = $games[0];

        //  $rounds =  $game->ans_n_ques->groupBy('round')->values();

        $roundExist = $game->ans_n_ques->some(function ($g) {
            return array_key_exists('round', $g->toArray());
        });


        $data = [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  =>  $game->count() < 1,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->isEmpty() ? null : $game->instructions,
        ];


        if ($roundExist) {
            $data['rounds'] = $game->ans_n_ques->groupBy('round')->values();
        } else {
            $data['data'] = $game->ans_n_ques;
        }
        return $data;
    }

    ///////////////////////////////////////////////////////////////
    // Video
    public function video_player_lessons($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];


    //    /////////////// ------------ start del
    //     $lessonUnit = Unit::where('lesson_id', $game->lesson->id)->get();
    //     $ExistLesson =  StudentLesson::where('student_id', $student->id)
    //             ->where('lesson_id', $game->lesson->id)->first();

    //     ///////////////

    //     $alreadyDone = StudentGame::where('student_id', $student->id)
    //     ->where('game_id', $game->id)->first();

    //     if(!$alreadyDone) {
    //     StudentGame::insert([
    //         'student_id' => $student->id,
    //         'game_id' => $game->id,
    //         'unit_id' => $unit->id,
    //         'count' => 1 ,
    //     ]);

    //     if(!$ExistLesson) $this->addPointFunction($student, 1, 1);

    //     $this->addPointFunction($student, 1, 1);

    //     }else if($alreadyDone && $alreadyDone->count < 5 )
    //     {
    //             $alreadyDone->count = $alreadyDone->count + 1;
    //             $alreadyDone->save();
    //     }


    //     ///////////////////////////////////////////////

    //     $unitDone = $student->units;
    //     $gameDone = $student->games;

    //     /// Check sub game check
    //     $subGameCheck = $unit->games->reject(function ($g) use ($gameDone) {
    //         return $gameDone->contains('id', $g->id);
    //     });

    //     /// Check duplicate unit
    //     $dup_unit_check = $unitDone->filter(function($done) use($unit){
    //         return $done->id == $unit->id;
    //     });

    //     ////// populate Unit records
    //     if(count($subGameCheck) == 0 && count($dup_unit_check) == 0) {

    //         // return "in";

    //         $unitInsert = StudentUnit::insert([
    //             'student_id' => $student->id,
    //             'unit_id' => $unit->id,
    //             'lesson_id' => $game->lesson->id,
    //         ]);

    //     }



    //     /// unit left in each lesson ?
    //     $unit_left_check = empty($this->lessonCheck($student, $lessonUnit, $unitDone));


    //     $lesson_completed = false;
    //     if($unit_left_check) {
    //         $lesson_completed = true;
    //         // Subscription checkpoint (** block adding & updating lesson records **)
    //         $grade_id = Lesson::find($game->lesson->id)->grade['id'];
    //         $studentGrade = StudentGrade::where('student_id', $student->id)->where('grade_id', $grade_id)->first();

    //         $assessment_prove = AssessmentFinishData::where('student_id',$student->id)
    //         ->where('grade_id',$grade_id)->count() * 8 + ($grade_id - 1 ) * 40;


    //         if ($studentGrade && !$ExistLesson && ($game->lesson->id > $assessment_prove)){

    //             $lessonInsert = StudentLesson::create([
    //                 'student_id' => $student->id,
    //                 'lesson_id' => $game->lesson->id,
    //                 'grade_id' => $grade_id,
    //                 'count' => 1,
    //             ]);

    //         }

    //         /// Delete units and games after add lesson record
    //         $lessonGamesId = Lesson::find($game->lesson->id)->games->pluck('id');

    //         StudentUnit::where('student_id', $student->id)->where('lesson_id', $game->lesson->id)->delete();
    //         // StudentGame::where('student_id', $student->id)->whereIn('game_id', $lessonGamesId)->delete();


    //         //  For Subscription and Real Server (** block adding lesson records **)

    //             if (!$studentGrade) return response()->json(
    //                 ["message" => "You are not a subscriber"],402);

    //         //----------------

    //     }



    //     /////////////////////////////////////////////// end - del

        $data = $game->ans_n_ques;

        $result = $data->filter(function ($v) use ($student) {
            return $v->isLocal == $student->isLocal;
        });

        $videos = $result->values()->map(function ($v) use ($student) {
            return [
                'video_id' => $v->a_content,
                'isLocal' => $v->isLocal,
                'type' => 'Video',
            ];
        });

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit' => $game->count() == 1 ? false : true,
            'category' => $game->category->name,
            'instructionGIF' => $game->instructionGIF,
            'instructions' =>  $game->instructions->count() == 0 ? null : $game->instructions,
            'data' => $videos->first(),

        ];
    }

    ///////////////////////////////////////////////////////////////
    // Song
    public function video_player_song($game, $student, $unit)
    {
        if (isset($game[0])) $game = $game[0];


        // ///////////////
        // $lessonUnit = Unit::where('lesson_id', $game->lesson->id)->get();
        // $ExistLesson =  StudentLesson::where('student_id', $student->id)
        //         ->where('lesson_id', $game->lesson->id)->first();

        // ///////////////

        // $alreadyDone = StudentGame::where('student_id', $student->id)
        // ->where('game_id', $game->id)->first();

        // if(!$alreadyDone) {
        // StudentGame::insert([
        //     'student_id' => $student->id,
        //     'game_id' => $game->id,
        //     'unit_id' => $unit->id,
        //     'count' => 1 ,
        // ]);

        // if(!$ExistLesson) $this->addPointFunction($student, 1, 1);

        // $this->addPointFunction($student, 1, 1);

        // }else if($alreadyDone && $alreadyDone->count < 5 )
        // {
        //         $alreadyDone->count = $alreadyDone->count + 1;
        //         $alreadyDone->save();
        // }


        // ///////////////////////////////////////////////

        // $unitDone = $student->units;
        // $gameDone = $student->games;

        // /// Check sub game check
        // $subGameCheck = $unit->games->reject(function ($g) use ($gameDone) {
        //     return $gameDone->contains('id', $g->id);
        // });

        // /// Check duplicate unit
        // $dup_unit_check = $unitDone->filter(function($done) use($unit){
        //     return $done->id == $unit->id;
        // });

        // ////// populate Unit records
        // if(count($subGameCheck) == 0 && count($dup_unit_check) == 0) {

        //     // return "in";

        //     $unitInsert = StudentUnit::insert([
        //         'student_id' => $student->id,
        //         'unit_id' => $unit->id,
        //         'lesson_id' => $game->lesson->id,
        //     ]);

        // }



        // /// unit left in each lesson ?
        // $unit_left_check = empty($this->lessonCheck($student, $lessonUnit, $unitDone));


        // $lesson_completed = false;
        // if($unit_left_check) {
        //     $lesson_completed = true;
        //     // Subscription checkpoint (** block adding & updating lesson records **)
        //     $grade_id = Lesson::find($game->lesson->id)->grade['id'];
        //     $studentGrade = StudentGrade::where('student_id', $student->id)->where('grade_id', $grade_id)->first();

        //     $assessment_prove = AssessmentFinishData::where('student_id',$student->id)
        //     ->where('grade_id',$grade_id)->count() * 8 + ($grade_id - 1 ) * 40;


        //     if ($studentGrade && !$ExistLesson && ($game->lesson->id > $assessment_prove)){

        //         $lessonInsert = StudentLesson::create([
        //             'student_id' => $student->id,
        //             'lesson_id' => $game->lesson->id,
        //             'grade_id' => $grade_id,
        //             'count' => 1,
        //         ]);

        //     }

        //     /// Delete units and games after add lesson record
        //     $lessonGamesId = Lesson::find($game->lesson->id)->games->pluck('id');

        //     StudentUnit::where('student_id', $student->id)->where('lesson_id', $game->lesson->id)->delete();
        //     // StudentGame::where('student_id', $student->id)->whereIn('game_id', $lessonGamesId)->delete();


        //     //  For Subscription and Real Server (** block adding lesson records **)

        //         if (!$studentGrade) return response()->json(
        //             ["message" => "You are not a subscriber"],402);

        //     //----------------

        // }



        ///////////////////////////////////////////////




        $result = $game->ans_n_ques->filter(function ($s) use ($student) {
            return $s->isLocal == $student->isLocal;
        });

        $songs = $result->values()->map(function ($s) {
            return [
                'song_id' => $s->a_content,
                'isLocal' => $s->isLocal,
                'type' => "song",
            ];
        });



        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit' => $game->count() == 1 ? false : true,
            'category' => $game->category->name,
            'instructionGIF' => $game->instructionGIF,
            'instructions' =>  $game->instructions->count() == 0 ? null : $game->instructions,
            'data' => $songs->first()
        ];
    }

    ///////////////////////////////////////////////////////////////
    // For Cloud Games One
    public function listening_and_choosing_clouds_one($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        $roundExist = $game->ans_n_ques->some(function ($g) {
            return array_key_exists('round', $g->toArray());
        });


        $data = [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>  !isset($game->instructions) ? null : $game->instructions,
            // 'rounds' => $rounds
        ];

        if ($roundExist) {
            $data['rounds'] = $game->ans_n_ques->groupBy('round')->values();
            // $data['round_count'] = count($game->ans_n_ques->groupBy('round')->values());
            return $data;
        }
        $data['data'] = $game->ans_n_ques;
        return $data;
    }

    ///////////////////////////////////////////////////////////////
    // For Drag and Drop
    public function drag_n_drop_and_letter($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>  $game->instructions->count() == 0 ? null : $game->instructions,
            'rounds' => $rounds

        ];
    }

    ///////////////////////////////////////////////////////////////
    // For Cloud Games Two
    public function listening_and_choosing_clouds_two($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];


        $roundExist = $game->ans_n_ques->some(function ($g) {
            return array_key_exists('round', $g->toArray());
        });

        $data = [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->count() == 0 ? null : $game->instructions,

        ];

        if ($roundExist) {
            $data['rounds'] = $game->ans_n_ques->groupBy('round')->values();
        } else {
            $data['data'] = $game->ans_n_ques;
        }

        return $data;
    }


    ///////////////////////////////////////////////////////////////
    // Matching Columns
    public function matching_columns($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();



        $data = [];

        foreach ($rounds as  $round) {

            $first = array_slice($round->toArray(), 0, $round->count() / 2);
            $second = array_slice($round->toArray(), $round->count() / 2);
            shuffle($second);

            $final = array_merge($first, $second);
            $data[] = $final;
        }



        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>  $game->instructions->count() == 0 ? null : $game->instructions,
            'rounds' => $data
        ];
    }


    public function letter_tracing($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        $rounds = $game->ans_n_ques;

        foreach ($rounds as $k => $count) {
            $count['a_extra'] = (int)$count['a_extra'];
        }

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->count() == 0 ? null : $game->instructions,
            'rounds' => $rounds
        ];
    }


    public function fill_in_the_blanks($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        $rounds = $game->ans_n_ques->groupBy('round')->values();

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->count() == 0 ? null : $game->instructions,
            'rounds' => $rounds
        ];
    }


    public function reading_diagram($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        // if($game->ans_n_ques)

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->count() == 0 ? null : $game->instructions,
            'data' => $game->ans_n_ques
        ];
    }


    // Writing_topic

    public function writing_topic($game, $student, $unit)
    {


        if (isset($game[0])) $game = $game[0];
        // $rounds =  $game->ans_n_ques->groupBy('round')->values();

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->count() == 0 ? null : $game->instructions,
            'data' => $game->ans_n_ques
        ];
    }


    //writing_opposite

    public function writing_opposite($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();


        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->count() == 0 ? null : $game->instructions,
            'rounds' => $rounds
        ];
    }


    public function listening_and_choosing_pics_two($game, $student, $unit)
    {
        if (isset($game[0])) $game = $game[0];

        $roundExist = $game->ans_n_ques->some(function ($g) {
            return array_key_exists('round', $g->toArray());
        });

        $data = [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->count() == 0 ? null : $game->instructions,
        ];

        if ($roundExist) {
            $data['rounds'] = $game->ans_n_ques->groupBy('round')->values();
        } else {
            $data['data'] = $game->ans_n_ques;
        }
        return $data;
    }

    public function drag_n_drop_and_pics($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        $roundExist = $game->ans_n_ques->some(function ($g) {
            return array_key_exists('round', $g->toArray());
        });

        $data = [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->count() == 0 ? null : $game->instructions,
        ];

        if ($roundExist) {
            $data['rounds'] = $game->ans_n_ques->groupBy('round')->values();
        } else {
            $data['data'] = $game->ans_n_ques;
        }

        return $data;
    }



    public function mcq_tf_grammar($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        $roundExist = $game->ans_n_ques->some(function ($g) {
            return array_key_exists('round', $g->toArray());
        });

        $data = [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->count() == 0 ? null : $game->instructions,
        ];

        if ($roundExist) {
            $data['rounds'] = $game->ans_n_ques->groupBy('round')->values();
            return $data;
        }
        $data['data'] = $game->ans_n_ques;

        return $data;
    }



    // // skimming_reading_passage
    // public function skimming_reading_conversation($game, $student, $unit)
    // {

    //     if (isset($game[0])) $game = $game[0];

    //     $roundExist = $game->ans_n_ques->some(function ($g) {
    //         return array_key_exists('round', $g->toArray());
    //     });

    //     $data = [

    //         'game_id' => $game->id,
    //         'lesson_id' => $unit->lesson_id,
    //         'game_name' => $game->name,
    //         'unit_name' => $unit->name,
    //         'game_status' => $game->status,
    //         'sub_unit'  => $game->count() < 1 ? true : false,
    //         'category' => $game->category->name,
    //         'instructionGIF'  => $game->instructionGIF,
    //         'instructions' =>  $game->instructions->count() == 0 ? null : $game->instructions,
    //     ];

    //     if ($roundExist) {
    //         $json = collect($game->ans_n_ques);

    //         $groupedByRound = $json->groupBy('round')->values();

    //         $result = $groupedByRound->map(function ($q) {
    //             return collect($q)->groupBy('q_content')->values();
    //         });

    //         $data['rounds'] = $result->collapse();

    //     }else{
    //           $data['data'] = $game->ans_n_ques;
    //     }
    //     return $data;


    // }






}
