<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MasjidRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Secara default, biarkan menjadi true. Anda bisa menyesuaikannya sesuai kebutuhan aksesibilitas.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'foto_masjid' => 'required|mimes:jpeg,png,jpg,gif|max:2048', // sesuaikan dengan jenis file yang diinginkan dan batas ukuran file
            // tambahkan aturan validasi lainnya sesuai kebutuhan
        ];
    }
}
