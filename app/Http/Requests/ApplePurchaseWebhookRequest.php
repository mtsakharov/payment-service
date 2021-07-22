<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplePurchaseWebhookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'unified_receipt' => ['array', 'required'],
            'unified_receipt.latest_receipt' => ['required'],
            'unified_receipt.latest_receipt_info' => ['required', 'array'],
            'notification_type' => ['required'],
        ];
    }
}
