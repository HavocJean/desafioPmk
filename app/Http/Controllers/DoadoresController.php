<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doadores;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class DoadoresController extends Controller
{
    public function listDoadores() {
        $doadores = Doadores::latest()->paginate(10);

        return view('doadores.index', ['doadores' => $doadores]);
    }

    public function addDoador() {

        return view('doadores.add');
    }

    public function addNewDoador(Request $r) {
        $validatedData = $r->validate([
            'descricao' => ['nome', 'string', 'max:255']
        ]);
        
        $doador = Doadores::create([
            'nome' => $r['nome'],
            'email' => $r['email'],
            'cpf' => $r['cpf'],
            'telefone' => $r['telefone'],
            'dt_nascimento' => $r['dt_nascimento'],
            'intervalo_doacao' => $r['intervalo_doacao'],
            'vl_doacao' => $r['vl_doacao'],
            'forma_pag' => $r['forma_pag'],
            'endereco' => $r['endereco'],
            'created_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success', 'Doador cadastro com sucesso.');
    }

    public function editDoador($id) {
        $doador = Doadores::find($id);

        return view('doadores.edit', ['doador' => $doador]);
    }

    public function updateDoador(Request $r, $id) {
        $doador = Doadores::find($id)->update([
            'nome' => $r['nome'],
            'email' => $r['email'],
            'cpf' => $r['cpf'],
            'telefone' => $r['telefone'],
            'dt_nascimento' => $r['dt_nascimento'],
            'intervalo_doacao' => $r['intervalo_doacao'],
            'vl_doacao' => $r['vl_doacao'],
            'forma_pag' => $r['forma_pag'],
            'endereco' => $r['endereco'],
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('doadores')->with('success', 'Doador atualizado com sucesso!');
    }

    public function deleteDoador($id) {
        $doador = Doadores::find($id)->delete();

        return redirect()->back()->with('success', 'Doador deletado com sucesso!');
    }
}