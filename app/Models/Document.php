<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $UrlPdf
 * @property string $UrlXml
 * @property string $UrlJson
 * @property string $BarCodeText
 * @property string $GlobalDocumentId
 * @property string $CountryDocumentId
 * @property string $ExternalId
 * @property string $CountryId
 * @property string $Date
 * @property integer $DocumentTypeId
 * @property string $DocumentTypeName
 * @property float $NetAmount
 * @property float $FreeAmount
 * @property float $TaxAmount
 * @property float $TotalAmount
 * @property string $CurrencyType
 * @property string $SeriesNumber
 * @property string $Series
 * @property integer $Number
 * @property string $NumberStr
 * @property string $DocumentSenderCode
 * @property string $DocumentSenderName
 * @property string $DocumentReceiverCode
 * @property string $DocumentReceiverName
 * @property string $DocumentFinancialOwnerCode
 * @property string $DocumentFinancialOwnerName
 * @property string $FinancialDate
 * @property string $EstimatedPaymentDate
 * @property string $DocumentTimeStamp
 * @property string $AuthorityTimeStamp
 * @property string $SyncPoint
 * @property mixed $DocumentTags
 * @property string $TwoCheck
 * @property mixed $Notes
 * @property string $Offers
 * @property mixed $Fields
 * @property string $Author
 * @property string $path_pdf
* @property string $path_xml
 * @property string $created_at
 * @property string $updated_at
 */
class Document extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['UrlPdf', 'UrlXml', 'UrlJson', 'BarCodeText', 'GlobalDocumentId', 'CountryDocumentId', 'ExternalId', 'CountryId', 'Date', 'DocumentTypeId', 'DocumentTypeName', 'NetAmount', 'FreeAmount', 'TaxAmount', 'TotalAmount', 'CurrencyType', 'SeriesNumber', 'Series', 'Number', 'NumberStr', 'DocumentSenderCode', 'DocumentSenderName', 'DocumentReceiverCode', 'DocumentReceiverName', 'DocumentFinancialOwnerCode', 'DocumentFinancialOwnerName', 'FinancialDate', 'EstimatedPaymentDate', 'DocumentTimeStamp', 'AuthorityTimeStamp', 'SyncPoint', 'DocumentTags', 'TwoCheck', 'Notes', 'Offers', 'Fields', 'Author','path_pdf','path_xml', 'copy_to_sftp', 'created_at', 'updated_at'];

    protected $casts = [
            'DocumentTags' => 'json',
        'Notes' => 'json',
        'Fields' => 'json'
    ];

    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }

}
