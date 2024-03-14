<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoAdmin\Facade\Tomato;

class MantenedorController extends Controller
{
    public string $model;

    public function __construct()
    {
        $this->model = \App\Models\Mantenedor::class;
    }

    /**
     * @param Request $request
     * @return View|JsonResponse
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            model: $this->model,
            view: 'admin.mantenedor.index',
            table: \App\Tables\MantenedorTable::class
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function api(Request $request): JsonResponse
    {
        return Tomato::json(
            request: $request,
            model: \App\Models\Mantenedor::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'admin.mantenedor.form',
            data: ['form'=>\App\Forms\MantenedorForm::class]
        );
    }

    /**
     * @param Request $request
     * @return RedirectResponse|JsonResponse
     */
    public function store(Request $request): RedirectResponse|JsonResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \App\Models\Mantenedor::class,
            validation: [
                            'tipo' => 'required|max:255|string',
            'valor' => 'required|max:255|string'
            //'misc' => 'required|max:255|string'
            ],
            message: __('Mantenedor updated successfully'),
            redirect: 'admin.mantenedor.index',
        );

        if($response instanceof JsonResponse){
            return $response;
        }

        return $response->redirect;
    }

    /**
     * @param \App\Models\Mantenedor $model
     * @return View|JsonResponse
     */
    public function show(\App\Models\Mantenedor $model): View|JsonResponse
    {
        return Tomato::get(
            model: $model,
            view: 'admin.mantenedor.show',
        );
    }

    /**
     * @param \App\Models\Mantenedor $model
     * @return View
     */
    public function edit(\App\Models\Mantenedor $model): View
    {
        \App\Forms\MantenedorForm::$model=$model;
        \App\Forms\MantenedorForm::$route="admin.mantenedor.update";

        return Tomato::get(
            model: $model,
            view: 'admin.mantenedor.form',
            data: ['form'=>\App\Forms\MantenedorForm::class]
        );
    }

    /**
     * @param Request $request
     * @param \App\Models\Mantenedor $model
     * @return RedirectResponse|JsonResponse
     */
    public function update(Request $request, \App\Models\Mantenedor $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            validation: [
                            'tipo' => 'sometimes|max:255|string',
            'valor' => 'sometimes|max:255|string'
           // 'misc' => 'sometimes|max:255|string'
            ],
            message: __('Mantenedor updated successfully'),
            redirect: 'admin.mantenedor.index',
        );

         if($response instanceof JsonResponse){
             return $response;
         }

         return $response->redirect;
    }

    /**
     * @param \App\Models\Mantenedor $model
     * @return RedirectResponse|JsonResponse
     */
    public function destroy(\App\Models\Mantenedor $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::destroy(
            model: $model,
            message: __('Mantenedor deleted successfully'),
            redirect: 'admin.mantenedor.index',
        );

        if($response instanceof JsonResponse){
            return $response;
        }

        return $response->redirect;
    }
}
