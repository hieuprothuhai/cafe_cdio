<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatNhanVienRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id'            => "required|exists:nhan_viens,id",
            'ho_va_ten'     => "required|min:4",
            'email'         => "required|email|unique:nhan_viens,email,". $this->id. 'id,',
            'so_dien_thoai' => "required|digits:10",
            'password'      => "required|min:6|max:30",
            'dia_chi'       => "required",
            'tinh_trang'    => "required|boolean",
        ];
    }
}
