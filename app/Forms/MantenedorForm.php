<?php

namespace App\Forms;
use ProtoneMedia\Splade\FormBuilder\Submit;
use Illuminate\Database\Eloquent\Model;
use ProtoneMedia\Splade\SpladeForm;
use ProtoneMedia\Splade\AbstractForm;


class MantenedorForm extends AbstractForm
{
      public static Model|array $model=[];
      public static string $route="admin.mantenedor.store";

      public function configure(SpladeForm $form)
      {

              $form
              ->action(route(self::$route,self::$model))
              ->method('POST')
              ->class('space-y-4')
              ->fill(self::$model);

      }

      public function fields(): array
      {
          return [
              
              \ProtoneMedia\Splade\FormBuilder\Text::make('tipo')->label(__('Tipo')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('valor')->label(__('Valor')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('misc')->label(__('Misc')),

              Submit::make()
                  ->label(__('Save')),
          ];
      }

}
