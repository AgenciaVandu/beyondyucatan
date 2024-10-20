<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BucketlistController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StateController;
use App\Mail\NewLead;
use App\Mail\NewLeadBucketlist;
use App\Mail\NewLeadExperience;
use App\Models\Bucketlist;
use App\Models\category;
use App\Models\Experience;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Controladores de pagina frontal
Route::get('/experiencias', [ExperienciaController::class, 'index'])->name('experiencias');
Route::post('/filter', function (Request $request) {
    if ($request->filtro == 'experiences') {
        $experiencias = Experience::where('category_id', $request->category_id)
            ->where('state_id', $request->state_id)
            ->get();

        $categories = category::all();
        $states = State::all();
        return view('viajes.experiencias', ['experiencias' => $experiencias, 'categories' => $categories, 'states' => $states]);
    } else {
        $bucket = Bucketlist::where('category_id', $request->category_id)->where('state_id', $request->state_id)->get();
        $categories = category::all();
        $states = State::all();
        return view('viajes.bucketlist', ['bucket' => $bucket, 'states' => $states, 'categories' => $categories]);
    }
})->name('filter'); // Experiencias grupo

Route::post('send-form-basic',function (Request $request){
    Mail::to('contacto@beyondyucatan.travel')->send(new NewLead($request->name,$request->email,$request->phone,$request->country,$request->message));
    return redirect()->route('home')->with('success', 'Tu mensaje ha sido enviado correctamente.');
})->name('send.form.basic');

Route::post('send-form-experience',function (Request $request){
    Mail::to('contacto@beyondyucatan.travel')->send(new NewLeadExperience($request->fechallegada,$request->adultos, $request->kids, $request->name, $request->tel, $request->mail, $request->masexperiencias, $request->message, $request->titulo));
    return redirect()->route('home')->with('success', 'Tu mensaje ha sido enviado correctamente.');
})->name('send.form.experiences');
Route::post('send-form-bucketlist',function (Request $request){
    Mail::to('contacto@beyondyucatan.travel')->send(new NewLeadBucketlist($request->fechallegada,$request->adultos, $request->kids, $request->name, $request->tel, $request->mail, $request->masexperiencias, $request->message, $request->titulo));
    return redirect()->route('home')->with('success', 'Tu mensaje ha sido enviado correctamente.');
})->name('send.form.bucketlist');

Route::get('/experiencias/{experiencia}', [ExperienciaController::class, 'show'])->name('experiencia'); // Experiencia individual

Route::get('/bucketlist', [BucketlistController::class, 'index'])->name('bucketlist'); // Experiencias especiales
Route::get('/bucketlist/{bucket}', [BucketlistController::class, 'show'])->name('bucketlist-detalle'); // detalle de bucketlist

Route::get('/cotizar-experiencia-en-grupo/{experience?}', [PageController::class, 'cotizadorgroup'])->name('cotizador-grupo');
Route::get('/cotizar-bucket-en-grupo/{bucketlist?}', [PageController::class, 'cotizadorgroupbucket'])->name('cotizador-grupo-bucket');
Route::get('/solicitar-aventura', [PageController::class, 'solicitud'])->name('cotizador'); // Solicitar aventura

Route::get('/artesanos', [PageController::class, 'artesanos'])->name('artesanos'); // index de artesanos
Route::get('/contactar-a-un-asesor', [PageController::class, 'contact'])->name('contacto'); // Vista Contacto

Route::middleware('auth')->group(function () {
    //Controladores para administrar el contenido
    Route::get('/admin/experiencies', [ExperienciaController::class, 'listExperiences'])->name('admin.experiences.index');
    Route::get('/admin/experiencies/create', [ExperienciaController::class, 'create'])->name('admin.experiences.create'); //
    Route::post('/admin/experiencies', [ExperienciaController::class, 'store'])->name('admin.experiences.store'); //
    Route::get('/admin/experiencies/{experience}/edit', [ExperienciaController::class, 'edit'])->name('admin.experiences.edit'); //
    Route::put('/admin/experiencies/{experience}/update', [ExperienciaController::class, 'update'])->name('admin.experiences.update'); //
    Route::delete('/admin/experiencies/{experience}', [ExperienciaController::class, 'destroy'])->name('admin.experiences.destroy'); //

    //Creame Rutas para CRUD de buketlists
    Route::get('/admin/bucketlists', [BucketlistController::class, 'listBucketlists'])->name('admin.bucketlists.index');
    Route::get('/admin/bucketlists/create', [BucketlistController::class, 'create'])->name('admin.bucketlists.create'); //
    Route::post('/admin/bucketlists', [BucketlistController::class, 'store'])->name('admin.bucketlists.store'); //
    Route::any('/admin/bucketlists/{bucket}/edit', [BucketlistController::class, 'edit'])->name('admin.bucketlists.edit'); //
    Route::put('/admin/bucketlists/{bucket}/update', [BucketlistController::class, 'update'])->name('admin.bucketlists.update'); //
    Route::delete('/admin/bucketlists/{bucket}', [BucketlistController::class, 'destroy'])->name('admin.bucketlists.destroy'); //
    Route::get('/admin/bucketlists/{bucket}/addDay/', [BucketlistController::class, 'createDay'])->name('admin.bucketlists.addDay'); //
    Route::post('/admin/bucketlists/{bucket}/storeDay/', [BucketlistController::class, 'storeDay'])->name('admin.bucketlists.storeDay'); //
    Route::get('/admin/bucketlists/{day}/editDay/', [BucketlistController::class, 'editDay'])->name('admin.bucketlists.editDay'); //
    Route::put('/admin/bucketlists/{day}/updateDay/', [BucketlistController::class, 'updateDay'])->name('admin.bucketlists.updateDay'); //
    Route::delete('/admin/bucketlists/{bucket}/deleteDay/', [BucketlistController::class, 'deleteDay'])->name('admin.bucketlists.deleteDay'); //

    //Crear rutas para crud de categories
    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create'); //
    Route::post('/admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store'); //
    Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit'); //
    Route::put('/admin/categories/{category}/update', [CategoryController::class, 'update'])->name('admin.categories.update'); //
    Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy'); //

    //Rutas para CRUD icons
    Route::get('/admin/icons', [IconController::class, 'index'])->name('admin.icons.index');
    Route::get('/admin/icons/create', [IconController::class, 'create'])->name('admin.icons.create'); //
    Route::post('/admin/icons', [IconController::class, 'store'])->name('admin.icons.store'); //
    Route::get('/admin/icons/{icon}/edit', [IconController::class, 'edit'])->name('admin.icons.edit'); //
    Route::put('/admin/icons/{icon}/update', [IconController::class, 'update'])->name('admin.icons.update'); //
    Route::delete('/admin/icons/{icon}', [IconController::class, 'destroy'])->name('admin.icons.destroy'); //

    //Routes CRUD states
    Route::get('/admin/states', [StateController::class, 'index'])->name('admin.states.index');
    Route::get('/admin/states/create', [StateController::class, 'create'])->name('admin.states.create'); //
    Route::post('/admin/states', [StateController::class, 'store'])->name('admin.states.store'); //
    Route::get('/admin/states/{state}/edit', [StateController::class, 'edit'])->name('admin.states.edit'); //
    Route::put('/admin/states/{state}/update', [StateController::class, 'update'])->name('admin.states.update'); //
    Route::delete('/admin/states/{state}', [StateController::class, 'destroy'])->name('admin.states.destroy'); //
});






Route::get('storage-link', function () {
    Artisan::call('storage:link');
    echo (Artisan::output());
});
