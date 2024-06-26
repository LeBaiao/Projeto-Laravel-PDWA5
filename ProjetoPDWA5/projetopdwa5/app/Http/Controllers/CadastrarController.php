<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EquipamentoEsportivo;

class CadastrarController extends Controller
{
    //regra de negocio: validar e persistir dados
    public function salvar(Request $request){
        $request->validate([
            "tipo" => "required|min:3|max:50",
            "material" => "required",
            "data_fabricacao" => "required|date",
            "peso" => "required|decimal:2",
            "novo" => "required|boolean",
            "cor" => "required|min:3|max:50"
        ],
        [
            "tipo.required" => "Obrigatório inserir tipo do equipamento",
            "tipo.min" => "Necessário inserir no mínimo 3 caracteres",
            "tipo.max" => "Não é possível inserir mais de 50 caracteres neste campo",
            "material.required" => "Obrigório inserir o material do equipamento",
            "data_fabricacao.required" => "Obrigatório inserir a data de fabricação do equipamento",
            "data.date" => "A data deve ser válida (dia/mês/ano)",
            "peso.required" => "Obrigatório preencher o peso do equipamento em KG",
            "peso.decimal" => "Necessário inserir o peso em KG com duas casas decimais (0.00)",
            "novo.required" => "Obrigatório preencher se o produto é novo ou não",
            "novo.boolean" => "O valor inserido deve ser booleano",
            "cor.required" => "Obrigatório preencher a cor do equipamento",
            "cor.min" => "Necessário inserir no mínimo 3 caracteres",
            "cor.max" => "Não é possível inserir mais de 50 caracteres neste campo"
        ]);
        //dd($request);
        $data = $request->except('_token'); 
        $equipamento = new EquipamentoEsportivo();
        $equipamento->fill($request->all());
        $equipamento->save();
        return view('cadastrosalvo');
    }
}

