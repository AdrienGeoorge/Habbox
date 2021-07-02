<?php
namespace App\Controllers\Jobs;

use App\Models\Community;

use Core\Locale;
use Core\View;

class Jobs
{
    public function index()
    {
        if(!isset(request()->player->id)){
            redirect('/');
        }

        $jobs = Community::getJobs();
        $myJobs = Community::getMyJobApplication(request()->player->id);

        if(request()->player) {
            foreach($jobs as $job) {
                if(Community::getJobApplication($job->id, request()->player->id)) {
                    $job->apply = true;
                }
            }
        }
        
        View::renderTemplate('Jobs/jobs.html', [
            'title' => Locale::get('core/title/jobs/index'),
            'page'  => 'jobs',
            'jobs'  => $jobs,
            'myJobs' => $myJobs
        ]);
    }
}