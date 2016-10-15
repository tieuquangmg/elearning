<?php 
namespace App\Modules\Lesson\Providers; 

use App\Modules\Lesson\Repositories\DialogueRepository;
use App\Modules\Lesson\Repositories\DialogueRepositoryEloquent;
use App\Modules\Lesson\Repositories\GrammarRepository;
use App\Modules\Lesson\Repositories\GrammarRepositoryEloquent;
use App\Modules\Lesson\Repositories\SummaryRepository;
use App\Modules\Lesson\Repositories\SummaryRepositoryEloquent;
use App\Modules\Lesson\Repositories\TextsRepository;
use App\Modules\Lesson\Repositories\TextsRepositoryEloquent;
use App\Modules\Lesson\Repositories\VocabularyRepository;
use App\Modules\Lesson\Repositories\VocabularyRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class LessonRepositoryProvider extends ServiceProvider
{
    public function boot(){
    }
    public function register(){
        $this->app->bind(VocabularyRepository::class, VocabularyRepositoryEloquent::class);
        $this->app->bind(DialogueRepository::class, DialogueRepositoryEloquent::class);
        $this->app->bind(GrammarRepository::class, GrammarRepositoryEloquent::class);
        $this->app->bind(SummaryRepository::class, SummaryRepositoryEloquent::class);
        $this->app->bind(TextsRepository::class, TextsRepositoryEloquent::class);
    }
}
