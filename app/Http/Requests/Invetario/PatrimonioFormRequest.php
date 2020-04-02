<?php

namespace App\Http\Requests\Invetario;

use Illuminate\Foundation\Http\FormRequest;

class PatrimonioFormRequest extends FormRequest
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
            'patrimoniogabinete' => 'required',
            'cod_gabinete'       => 'required|max:30',
            'patrimoniomonitor'  => 'required',
            'patrimoniomonitor2' => 'max:30',
            'cod_monitor'        => 'required|max:30',
            'cod_monitor2'       => 'max:30',
            'descricaoInfo'      => 'min:3|max:256',
            'patrimonioMesa'     => 'required|max:30',
            'cod_Mesa'           => 'required|max:30',
            'patrimonioCadeira'  => 'required|max:30',
            'cod_Cadeira'        => 'required|max:30',
            'patrimonioOutro'    => 'max:30',
            'cod_Outro'          => 'max:30',
            'descricaoMoveis'    => 'min:3|max:256',
            'sala'               => 'required',
        ];
    }

    public function messages()
    {
        return [
            'patrimoniogabinete.required' => 'O campo patrimonio gabinete é de preechimento obrigatorio;',
            'cod_gabinete.required'       => 'O campo código gabinete é de preechimento obrigatorio;',
            'patrimoniomonitor.required'  => 'O campo patrimonio monitor é de preechimento obrigatorio;',
            'cod_monitor.required'        => 'O campo código monitor é de preechimento obrigatorio;',
            'descricaoInfo.min'      => 'O campo descrição do patrimonio de informática é acima de 3 caracteres;',
            'patrimonioMesa.required'     => 'O campo patrimonio mesa é de preechimento obrigatorio;',
            'cod_Mesa.required'           => 'O campo código mesa é de preechimento obrigatorio;',
            'patrimonioCadeira.required'  => 'O campo patrimonio cadeira é de preechimento obrigatorio;',
            'cod_Cadeira.required'        => 'O campo codigo cadeira é de preechimento obrigatorio;',
            'descricaoMoveis.min'    => 'O campo descrição do patrimonio de móveis é acima de 3 caracteres;',
            'sala.required'               => 'O campo sala é de preechimento obrigatorio;',
        ];
    }
}
