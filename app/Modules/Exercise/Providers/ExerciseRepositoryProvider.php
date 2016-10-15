<?php 
namespace App\Modules\Exercise\Providers; 
use App\Modules\Exercise\Repositories\FillInBlankRepository;
use App\Modules\Exercise\Repositories\FillInBlankRepositoryEloquent;
use App\Modules\Exercise\Repositories\MatchingRepository;
use App\Modules\Exercise\Repositories\MatchingRepositoryEloquent;
use App\Modules\Exercise\Repositories\MultipleChoiceRepository;
use App\Modules\Exercise\Repositories\MultipleChoiceRepositoryEloquent;
use App\Modules\Exercise\Repositories\MultipleChoiceTextRepository;
use App\Modules\Exercise\Repositories\MultipleChoiceTextRepositoryEloquent;
use App\Modules\Exercise\Repositories\MultipleResponseRepository;
use App\Modules\Exercise\Repositories\MultipleResponseRepositoryEloquent;
use App\Modules\Exercise\Repositories\QuestionRepository;
use App\Modules\Exercise\Repositories\QuestionRepositoryEloquent;
use App\Modules\Exercise\Repositories\ReplyRepository;
use App\Modules\Exercise\Repositories\ReplyRepositoryEloquent;
use App\Modules\Exercise\Repositories\SequenceRepository;
use App\Modules\Exercise\Repositories\SequenceRepositoryEloquent;
use App\Modules\Exercise\Repositories\TrueFalseRepository;
use App\Modules\Exercise\Repositories\TrueFalseRepositoryEloquent;
use App\Modules\Exercise\Repositories\TypeInRepository;
use App\Modules\Exercise\Repositories\TypeInRepositoryEloquent;
use App\Modules\Exercise\Repositories\WordBlankRepository;
use App\Modules\Exercise\Repositories\WordBlankRepositoryEloquent;
use App\Modules\Exercise\Repositories\WritingRepository;
use App\Modules\Exercise\Repositories\WritingRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class ExerciseRepositoryProvider extends ServiceProvider
{
    public function boot(){
    }
    public function register(){
        $this->app->bind(FillInBlankRepository::class, FillInBlankRepositoryEloquent::class);
        $this->app->bind(MatchingRepository::class, MatchingRepositoryEloquent::class);
        $this->app->bind(MultipleChoiceRepository::class, MultipleChoiceRepositoryEloquent::class);
        $this->app->bind(MultipleChoiceTextRepository::class, MultipleChoiceTextRepositoryEloquent::class);
        $this->app->bind(MultipleResponseRepository::class, MultipleResponseRepositoryEloquent::class);
        $this->app->bind(QuestionRepository::class, QuestionRepositoryEloquent::class);
        $this->app->bind(ReplyRepository::class, ReplyRepositoryEloquent::class);
        $this->app->bind(SequenceRepository::class, SequenceRepositoryEloquent::class);
        $this->app->bind(TrueFalseRepository::class, TrueFalseRepositoryEloquent::class);
        $this->app->bind(TypeInRepository::class, TypeInRepositoryEloquent::class);
        $this->app->bind(WordBlankRepository::class, WordBlankRepositoryEloquent::class);
        $this->app->bind(WritingRepository::class, WritingRepositoryEloquent::class);
    }
}
