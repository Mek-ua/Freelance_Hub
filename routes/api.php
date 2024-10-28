<?php
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryGroupsController;
use App\Http\Controllers\SkillGroupsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SkillListsController;
use App\Http\Controllers\PaymentMethodsController;
use App\Http\Controllers\EducationalStatusController;
use App\Http\Controllers\FreelancersController;
use App\Http\Controllers\FreelancerSkillsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProjectSkillsController;
use App\Http\Controllers\ProposalsController;
use App\Http\Controllers\ContractsController;
use App\Http\Controllers\RateNumberController;
use App\Http\Controllers\RatingsController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\NotificationMessagesController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\ProgressTrackingsController;
use App\Http\Controllers\CertificatesController;
use App\Http\Controllers\ServiceFeesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;






Route::apiResource('roles', RoleController::class);
Route::apiResource('countries', CountryController::class);
Route::apiResource('users', UserController::class);
Route::apiResource('category-groups', CategoryGroupsController::class);
Route::apiResource('skill-groups',SkillGroupsController::class);
Route::apiResource('skills', SkillListsController::class);
Route::apiResource('categories',CategoriesController::class);
Route::apiResource('payment-methods', PaymentMethodsController::class);
Route::apiResource('educational-statuses', EducationalStatusController::class);
Route::apiResource('service', ServiceFeesController::class);
Route::apiResource('freelancers', FreelancersController::class);
Route::apiResource('freelancer_skill',FreelancerSkillsController::class);
Route::apiResource('projects', ProjectsController::class);
Route::apiResource('project-skills',ProjectSkillsController::class);
Route::apiResource('proposals', ProposalsController::class);
Route::apiResource('contracts',ContractsController::class);
Route::apiResource('rate-numbers', RateNumberController::class);
Route::apiResource('ratings', RatingsController::class);
Route::apiResource('chats', ChatsController::class);
Route::apiResource('notification-messages', NotificationMessagesController ::class);
Route::apiResource('notifications', NotificationsController::class);
Route::apiResource('progress-trackings', ProgressTrackingsController::class);
Route::apiResource('certificates', CertificatesController::class);


Route::get('/m', [AuthController::class, 'index']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




