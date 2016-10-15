<?php

namespace App\Modules\Lesson\Repositories;

use App\Modules\Knowledge\Models\Unit;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Modules\Lesson\Models\Vocabulary;

/**
 * Class VocabularyRepositoryEloquent
 * @package namespace App\Repositories\Lesson;
 */
class VocabularyRepositoryEloquent implements VocabularyRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Vocabulary::class;
    }

    public function byUnit($unit_id){
        $data['unit'] = Unit::find($unit_id);
        $data['vocabularies'] = $data['unit']->vocabulary;
        return $data;
    }

    public function createMulti($input){
        //dd($input);
        $i = 0;
        try{
            if($input['word']){
                foreach ($input['word'] as $v) {
                    $n = new Vocabulary();
                    $n->unit_id = $input['unit_id'];
                    $n->word = $v;
                    $n->mean = $input['mean'][$i];
                    if ($input['image'][$i] != null) {
                        $name = uniqid() . $input['image'][$i]->getClientOriginalName();
                        $filename = 'images/vocabulary/'.$name;
                        if (!file_exists('images/vocabulary')) {
                            mkdir('images/vocabulary', 0777, true);
                        }
                        $input['image'][$i++]->move('images/vocabulary', $filename);
                        Image::make(sprintf($filename,  $name))->resize(300, 200)->save();
                        $n->image = $filename;
                    }
                    $n->save();
                }
            }

        }catch (\Exception $e){
            dd($e);
            return false;
        }
        return true;
    }
    public function delete_all($unit_id){
        $data = Vocabulary::where('unit_id', $unit_id)->get();
        foreach ($data as $row){
            File::delete($row->image);
        }
        return Vocabulary::where('unit_id', $unit_id)->delete();
    }
}
