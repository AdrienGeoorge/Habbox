<?php
namespace App\Controllers\Admin;

use App\Helper;
use App\Models\Admin;
use App\Models\Community;
use App\Models\Player;

use Core\View;
use Library\Json;

class Vacancies
{
    public function delete() 
    {
        $validate = request()->validator->validate([
            'id'  => 'required|numeric'
        ]);

        if(!$validate->isSuccess()) {
            return;
        }
      
        $jobid = input()->post('id')->value;
        
        $job = Community::getJob($jobid);
      
        if(!empty($job)) {
            Admin::deleteJob($jobid);
            response()->json(["status" => "success", "message" => "L'annonce a été supprimé!"]);
        }
    }
  
    public function editadd() 
    {
        $validate = request()->validator->validate([
            'job_title'           => 'required',
            'small_description'   => 'required|max:200',
            'full_description'    => 'required'
        ]);

        if(!$validate->isSuccess()) {
            return;
        }

        $jobid = input()->post('jobid')->value;
        $job_title = input()->post('job_title')->value;
        $small_description = input()->post('small_description')->value;
        $full_description = input()->post('full_description')->value;
      
        $job = Community::getJob($jobid);
      
        if(!empty($job)) {
            Admin::editJob($jobid, $job_title, $small_description, $full_description);
            response()->json(["status" => "success", "message" => "Le poste a été modifié!"]);
        }
      
        Admin::addJob($job_title, $small_description, $full_description);
        response()->json(["status" => "success", "message" => "La poste a été ajouté!"]);
    }
  
    public function accept()
    {
        $validate = request()->validator->validate([
            'id'  => 'required|numeric'
        ]);

        if(!$validate->isSuccess()) {
            return;
        }
      
        $jobid = input()->post('id')->value;
        
        $job = Community::getApplicationById($jobid);
      
        if(!empty($job)) {
            Admin::changeJobStatus($jobid);
            response()->json(["status" => "success", "message" => "Le poste est devenu fermé!"]);
        }
    }
  
    public function seejob()
    {
        $this->job = new \stdClass();
        $this->job->job = Community::getApplicationById(input()->post('id')->value);
        $this->job->job->message = Helper::filterString($this->job->job->message);
        Json::encode($this->job);
    } 
  
    public function getjob() 
    {
        $jobs = Community::getJob(input()->post('id')->value);
        Json::encode($jobs);
    }
  
    public function getApplications() 
    {
        $applications = Community::getAllApplications(input()->post('jobid')->value);
        foreach($applications as $application) {
            $application->user_id = Player::getDataById($application->user_id, 'username')->username;
            $application->message = Helper::filterString($application->message);
        }
      
        Json::filter($applications, 'desc', 'id');
    }
  
    public function getVacanies() 
    {
        $jobs = Community::getJobs();
        foreach($jobs as $job) {
            $job->applys = count(Community::getJobApplicationsAdmin($job->id));
        }
      
        Json::filter($jobs, 'desc', 'id');
    }
  
    public function view()
    {
        View::renderTemplate('Admin/Management/vacancies.html', ['permission' => 'housekeeping_permissions']);
    }
}
