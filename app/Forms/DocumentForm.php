<?php

namespace App\Forms;
use ProtoneMedia\Splade\FormBuilder\Submit;
use Illuminate\Database\Eloquent\Model;
use ProtoneMedia\Splade\SpladeForm;
use ProtoneMedia\Splade\AbstractForm;


class DocumentForm extends AbstractForm
{
      public static Model|array $model=[];
      public static string $route="admin.documents.store";

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
              
              \ProtoneMedia\Splade\FormBuilder\Text::make('UrlPdf')->label(__('UrlPdf')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('UrlXml')->label(__('UrlXml')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('UrlJson')->label(__('UrlJson')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('BarCodeText')->label(__('BarCodeText')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('GlobalDocumentId')->label(__('GlobalDocumentId')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('CountryDocumentId')->label(__('CountryDocumentId')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('ExternalId')->label(__('ExternalId')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('CountryId')->label(__('CountryId')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('Date')->label(__('Date')),

              \ProtoneMedia\Splade\FormBuilder\Number::make('DocumentTypeId')->label(__('DocumentTypeId')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('DocumentTypeName')->label(__('DocumentTypeName')),

              \ProtoneMedia\Splade\FormBuilder\Number::make('NetAmount')->label(__('NetAmount')),

              \ProtoneMedia\Splade\FormBuilder\Number::make('FreeAmount')->label(__('FreeAmount')),

              \ProtoneMedia\Splade\FormBuilder\Number::make('TaxAmount')->label(__('TaxAmount')),

              \ProtoneMedia\Splade\FormBuilder\Number::make('TotalAmount')->label(__('TotalAmount')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('CurrencyType')->label(__('CurrencyType')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('SeriesNumber')->label(__('SeriesNumber')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('Series')->label(__('Series')),

              \ProtoneMedia\Splade\FormBuilder\Number::make('Number')->label(__('Number')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('NumberStr')->label(__('NumberStr')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('DocumentSenderCode')->label(__('DocumentSenderCode')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('DocumentSenderName')->label(__('DocumentSenderName')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('DocumentReceiverCode')->label(__('DocumentReceiverCode')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('DocumentReceiverName')->label(__('DocumentReceiverName')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('DocumentFinancialOwnerCode')->label(__('DocumentFinancialOwnerCode')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('DocumentFinancialOwnerName')->label(__('DocumentFinancialOwnerName')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('FinancialDate')->label(__('FinancialDate')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('EstimatedPaymentDate')->label(__('EstimatedPaymentDate')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('DocumentTimeStamp')->label(__('DocumentTimeStamp')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('AuthorityTimeStamp')->label(__('AuthorityTimeStamp')),

              \ProtoneMedia\Splade\FormBuilder\Text::make('SyncPoint')->label(__('SyncPoint')),


              \ProtoneMedia\Splade\FormBuilder\Text::make('TwoCheck')->label(__('TwoCheck')),


              \ProtoneMedia\Splade\FormBuilder\Text::make('Offers')->label(__('Offers')),


              \ProtoneMedia\Splade\FormBuilder\Text::make('Author')->label(__('Author')),

              Submit::make()
                  ->label(__('Save')),
          ];
      }

}
