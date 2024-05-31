<?php

namespace App\Http\Traits;

use App\Models\Unit;
use App\Models\Lesson;
use App\Models\StudentGame;
use App\Models\StudentUnit;
use App\Models\StudentGrade;
use App\Models\StudentLesson;
use App\Models\AssessmentFinishData;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

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

    private $domain, $vd_path;

    public function __construct()
    {
        $this->domain = app('domain');
        // $this->vd_path = $this->domain . "/storage/images/";
    }


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

    public function video_player_lessons($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

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

        // return $result;

        /*
            image thumbnail
        */
        $vd = $videos->first();
        $vimeo_link = "http://vimeo.com/api/oembed.json?url=http%3A//vimeo.com/";

        $data = Http::get($vimeo_link . $vd['video_id']);
        $dataExist = false;
        try {
            $data = Http::get($vimeo_link . $vd['video_id']);
            $dataExist = isset($data['type']);
        } catch (\Throwable $th) {
            $dataExist = false;
        }



        if($dataExist){
            $thumbnail = Http::get($data['thumbnail_url']);
            $names = $game->lesson;

            $path = "images/video_thumbnail/Grade_$names->grade_id/lesson_$names->name/" . $vd["video_id"] . ".png";
            $thumb_path = $this->domain . "/storage/$path";
            $publicPath = "public/$path";

            $directoryPath = dirname(storage_path("app/$publicPath"));

            if (!Storage::exists(dirname($publicPath))) {
                Storage::makeDirectory(dirname($publicPath));
            }

            chmod($directoryPath, 0555);

            Storage::put($publicPath, $thumbnail);
            /*
                end image thumbnail
            */
        }



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

            // "thumbnail_url" => $vd['isLocal'] ? $thumb_path : null,
            // "title" => $vd['isLocal'] ? $data["title"] : null,
            "thumbnail_url" => $dataExist ? $thumb_path : null ,
            "title" => $dataExist ? $data["title"] : null,
            'data' =>  $dataExist ? $videos->first() : null,

        ];
    }

    ///////////////////////////////////////////////////////////////
    // Song
    public function video_player_song($game, $student, $unit)
    {
        if (isset($game[0])) $game = $game[0];

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
