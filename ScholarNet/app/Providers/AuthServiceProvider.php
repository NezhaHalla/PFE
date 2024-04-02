<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Classe;
use App\Models\Module;
use App\Models\Resource;
use App\Models\Assignment;
use Illuminate\Auth\GenericUser;
use Illuminate\Support\Facades\Gate;
use App\Models\assignment_submissions;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('cours-details', function (Authenticatable $user, Resource $resource) {
            if ($user->role === 'Teacher') {
                return $user->id === $resource->id_teacher;
            } elseif ($user->role === 'Student') {
                $courses = $user->modules->flatMap->resource;
                return $courses->contains('id', $resource->id);
            }
        });

        Gate::define('assignment-details',function(Authenticatable $user,Assignment $assignment){
            if($user->role === 'Teacher'){
                $assignments=$user->teacherAssignments;
                return $assignments->contains('id',$assignment->id);
            }elseif($user->role === 'Student'){
                $assignments=$user->studentAssignments;
                return $assignments->contains('id',$assignment->id);
            }
        });

        Gate::define('classe',function(Authenticatable $user,Classe $class){
            //if the teacher teach this class
            
        });

        Gate::define('exercice',function(Authenticatable $user,assignment_submissions $exercice){
            return $exercice->id_student === $user->id ;
        });

        Gate::define('module',function(Authenticatable $user,Module $module){
            $modules=$user->modules;
            return $modules->contains('id',$module->id);
        });
    }
}
