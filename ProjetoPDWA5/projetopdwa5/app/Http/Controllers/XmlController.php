<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EquipamentoEsportivo;
use Illuminate\Support\Facades\Response;

class XmlController extends Controller
{
    //pegar todos os dados e gerare um XML
    public function gerarXML(){
        $dados = EquipamentoEsportivo::all();

        // renderizar a view e pegar o conteúdo
        $content = view('data-xml', ['registro' => $dados])->render();

        // retornar a resposta com o conteúdo e cabeçalho apropriado
        return Response::make($content, 200, [
            'Content-Type' => 'application/xml'

        ]);
    }
}
