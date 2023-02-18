<?php

use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BasicSettingsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactSectionController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\MenuBuilderController;
use App\Http\Controllers\ProtfolioSectionController;
use App\Http\Controllers\SectionHeadingController;
use App\Http\Controllers\ServiceSectionController;
use App\Http\Controllers\SkillSectionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::post('/contact',[ContactController::class,'store'])->name('contact');

Route::middleware(['auth'])->name('dashboard')->prefix('/dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/basicsettings', [BasicSettingsController::class, 'index'])->name('.basicsettings');
    Route::post('{basicSettings}/update-basicsettings', [BasicSettingsController::class, 'update'])->name('.update.basicsettings');

    Route::get('/menu-builder', [MenuBuilderController::class, 'index'])->name('.menuBuilder');
    Route::post('/menu-builder/update', [MenuBuilderController::class, 'update'])->name('.menuBuilder.update');

    Route::get('/section-headings', [SectionHeadingController::class, 'index'])->name('.section_heading');
    Route::post('/section-headings/{sectionHeading}/update', [SectionHeadingController::class, 'update'])->name('.section_heading.update');

    Route::get('/hero-section', [HeroSectionController::class, 'index'])->name('.hero_section');
    Route::post('/hero-section/{heroSection}/update', [HeroSectionController::class, 'update'])->name('.hero_section.update');

    Route::get('/about-section', [AboutSectionController::class, 'index'])->name('.about_section');
    Route::post('/about-section/{aboutSection}/update', [AboutSectionController::class, 'update'])->name('.about_section.update');

    Route::get('/skill-section', [SkillSectionController::class, 'index'])->name('.skill_section');
    Route::post('/skill-section/{skillSection}/update', [SkillSectionController::class, 'update'])->name('.skill_section.update');

    Route::get('/service-section', [ServiceSectionController::class, 'index'])->name('.service_section');
    Route::post('/service-section/{serviceSection}/update', [ServiceSectionController::class, 'update'])->name('.service_section.update');

    Route::get('/portfolio-section', [ProtfolioSectionController::class, 'index'])->name('.portfolio_section');
    Route::get('/contact-section', [ContactSectionController::class, 'index'])->name('.contact_section');
    Route::get('/footer', [FooterController::class, 'index'])->name('.footer');
});

require __DIR__ . '/auth.php';
