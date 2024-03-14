<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocumentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            
            'UrlPdf' => $this->UrlPdf,
            'UrlXml' => $this->UrlXml,
            'UrlJson' => $this->UrlJson,
            'BarCodeText' => $this->BarCodeText,
            'GlobalDocumentId' => $this->GlobalDocumentId,
            'CountryDocumentId' => $this->CountryDocumentId,
            'ExternalId' => $this->ExternalId,
            'CountryId' => $this->CountryId,
            'Date' => $this->Date,
            'DocumentTypeId' => $this->DocumentTypeId,
            'DocumentTypeName' => $this->DocumentTypeName,
            'NetAmount' => $this->NetAmount,
            'FreeAmount' => $this->FreeAmount,
            'TaxAmount' => $this->TaxAmount,
            'TotalAmount' => $this->TotalAmount,
            'CurrencyType' => $this->CurrencyType,
            'SeriesNumber' => $this->SeriesNumber,
            'Series' => $this->Series,
            'Number' => $this->Number,
            'NumberStr' => $this->NumberStr,
            'DocumentSenderCode' => $this->DocumentSenderCode,
            'DocumentSenderName' => $this->DocumentSenderName,
            'DocumentReceiverCode' => $this->DocumentReceiverCode,
            'DocumentReceiverName' => $this->DocumentReceiverName,
            'DocumentFinancialOwnerCode' => $this->DocumentFinancialOwnerCode,
            'DocumentFinancialOwnerName' => $this->DocumentFinancialOwnerName,
            'FinancialDate' => $this->FinancialDate,
            'EstimatedPaymentDate' => $this->EstimatedPaymentDate,
            'DocumentTimeStamp' => $this->DocumentTimeStamp,
            'AuthorityTimeStamp' => $this->AuthorityTimeStamp,
            'SyncPoint' => $this->SyncPoint,
            'DocumentTags' => $this->DocumentTags,
            'TwoCheck' => $this->TwoCheck,
            'Notes' => $this->Notes,
            'Offers' => $this->Offers,
            'Fields' => $this->Fields,
            'Author' => $this->Author,

        ];
    }
}
