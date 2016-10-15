<?php 
namespace App\Modules\Subject\Providers; 
use App\Modules\Subject\Repositories\DocumentRepository;
use App\Modules\Subject\Repositories\DocumentRepositoryEloquent;
use App\Modules\Subject\Repositories\MeetingRepository;
use App\Modules\Subject\Repositories\MeetingRepositoryEloquent;
use App\Modules\Subject\Repositories\NotifyRepository;
use App\Modules\Subject\Repositories\NotifyRepositoryEloquent;
use App\Modules\Subject\Repositories\QuestionRepository;
use App\Modules\Subject\Repositories\QuestionRepositoryEloquent;
use App\Modules\Subject\Repositories\SubjectRepository;
use App\Modules\Subject\Repositories\SubjectRepositoryEloquent;
use App\Modules\Subject\Repositories\TestRepository;
use App\Modules\Subject\Repositories\TestRepositoryEloquent;
use App\Modules\Subject\Repositories\TheoryRepository;
use App\Modules\Subject\Repositories\TheoryRepositoryEloquent;
use App\Modules\Subject\Repositories\UnitRepository;
use App\Modules\Subject\Repositories\UnitRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class SubjectRepositoryProvider extends ServiceProvider
{
    public function boot(){

    }
    public function register(){
        $this->app->bind(SubjectRepository::class, SubjectRepositoryEloquent::class);
        $this->app->bind(UnitRepository::class, UnitRepositoryEloquent::class);
        $this->app->bind(TheoryRepository::class, TheoryRepositoryEloquent::class);
        $this->app->bind(DocumentRepository::class, DocumentRepositoryEloquent::class);
        $this->app->bind(TestRepository::class, TestRepositoryEloquent::class);
        $this->app->bind(NotifyRepository::class, NotifyRepositoryEloquent::class);
        $this->app->bind(QuestionRepository::class, QuestionRepositoryEloquent::class);
        $this->app->bind(MeetingRepository::class, MeetingRepositoryEloquent::class);
    }
}
