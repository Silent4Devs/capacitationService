<?php

use App\Http\Controllers\Api\Capacitaciones\tbApiControllerCapacitaciones;
use App\Http\Controllers\Api\Capacitaciones\tbApiControllerInstructorCapacitaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    return response()->json(['message' => 'API funcionando correctamente']);
});

Route::prefix('capacitaciones')->group(function () {
    Route::get('/tblastcourse', [tbApiControllerCapacitaciones::class, 'tbFunctionUltimoCurso']);
    Route::get('/tbinscribedcourses', [tbApiControllerCapacitaciones::class, 'tbFunctionCursosInscrito']);
    Route::get('/tbcoursecatalogue', [tbApiControllerCapacitaciones::class, 'tbFunctionCatalogoCursos']);
    Route::get('/tbcourseinfo/{id}', [tbApiControllerCapacitaciones::class, 'tbFunctionInformacionCurso']);
    Route::get('tbstudentcourse/{course}/evaluation/{evaluation}', [tbApiControllerCapacitaciones::class, 'tbFunctionCursoEvaluacion']);
    Route::get('/tbstudentcourse/{id}', [tbApiControllerCapacitaciones::class, 'tbFunctionCursoEstudiante']);
    Route::post('/tbstudentevaluation/answers', [tbApiControllerCapacitaciones::class, 'tbFunctionRespuestasCursoEvaluacion']);
});

Route::prefix('instructorCapacitaciones')->group(function () {
    Route::get('/tbIndexCourse', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionIndexCurso']);
    Route::get('/tbCreateCourse', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionCreateCurso']);
    Route::post('/tbStoreCourse', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionStoreCurso']);
    Route::get('/tbEditCourse/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionEditCurso']);
    Route::post('/tbUpdateCourse/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionUpdateCurso']);
    Route::get('/tbShowCourse/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionShowCurso']);
    Route::delete('/tbDeleteCourse/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionDeleteCurso']);

    Route::get('/tbIndexGoals/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionIndexGoals']);
    Route::post('/tbStoreGoals/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionStoreGoals']);
    Route::get('/tbEditGoals/{id_goal}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionEditGoals']);
    Route::post('/tbUpdateGoals/{id_goal}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionUpdateGoals']);
    Route::delete('/tbDeleteGoals/{id_goal}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionDeleteGoals']);

    Route::get('/tbIndexRequirements/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionIndexRequirements']);
    Route::post('/tbStoreRequirements/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionStoreRequirements']);
    Route::get('/tbEditRequirements/{id_requirement}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionEditRequirements']);
    Route::post('/tbUpdateRequirements/{id_requirement}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionUpdateRequirements']);
    Route::delete('/tbDeleteRequirements/{id_requirement}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionDeleteRequirements']);

    Route::get('/tbIndexAudience/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionIndexAudience']);
    Route::post('/tbStoreAudience/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionStoreAudience']);
    Route::get('/tbEditAudience/{id_audience}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionEditAudience']);
    Route::post('/tbUpdateAudience/{id_audience}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionUpdateAudience']);
    Route::delete('/tbDeleteAudience/{id_audience}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionDeleteAudience']);

    Route::get('/tbIndexEstudiantes/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionIndexEstudiantes']);
    Route::post('/tbStoreEstudiantes/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionStoreEstudiantes']);
    Route::delete('/tbDeleteEstudiantes', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionDeleteEstudiantes']);
    Route::delete('/tbDeleteMultipleEstudiantes', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionMultipleDeleteEstudiantes']);
    Route::delete('/tbDeleteAllEstudiantes/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionAllDeleteEstudiantes']);

    Route::get('/tbIndexSections/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionIndexSeccionesCurso']);
    Route::post('/tbStoreSections/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionStoreSeccionesCurso']);
    Route::delete('/tbDeleteSection/{id_section}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionDeleteSeccion']);
    Route::delete('/tbDeleteLesson/{id_lesson}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionDeleteLesson']);

    Route::get('/tbIndexEvaluations/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionIndexEvaluacion']);

    Route::get('/tbIndexEvaluation/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionIndexEvaluacion']);
    Route::get('/tbCreateEvaluation/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionCreateEvaluacion']);
    Route::post('/tbStoreEvaluation/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionStoreEvaluacion']);
    Route::get('/tbEditEvaluation/{id_evaluation}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionEditarEvaluacion']);
    Route::post('/tbUpdateEvaluation/{id_evaluation}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionUpdateEvaluacion']);
    Route::delete('/tbDeleteEvaluation/{id_evaluation}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionDestroyEvaluacion']);

    Route::get('/tbEvaluationQuestions/{id_evaluation}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionEvaluacionwithQuestions']);
    Route::post('/tbStoreQuestion/{id_evaluation}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionStoreQuestion']);
    Route::get('/tbEditQuestion/{id_question}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionEditarQuestion']);
    Route::get('/tbUpdateQuestion/{id_question}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionUpdateQuestion']);
    Route::post('/tbDeleteQuestion/{id_question}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionDeleteQuestion']);
    Route::delete('/tbDeleteAnswer/{id_answer}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionDeleteAnswer']);

    Route::get('/tbEditCertificadoCurso/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionEditCertificadoCurso']);
    Route::post('/tbUpdateCertificadoCurso/{id_course}', [tbApiControllerInstructorCapacitaciones::class, 'tbFunctionUpdateCertificadoCurso']);
});
