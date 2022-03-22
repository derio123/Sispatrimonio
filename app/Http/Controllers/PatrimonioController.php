<?php

namespace App\Http\Controllers;

use App\Http\Requests\Invetario\PatrimonioFormRequest;
use App\Models\Categorias;
use App\Models\Inventario;
use App\Models\Patrimonio;
use Illuminate\Http\Request;

class PatrimonioController extends Controller
{
    private $patrimonio;
    private $categoria;

    public function __construct(Inventario $patrimonio, Categorias $categoria)
    {
        $this->patrimonio = $patrimonio;
        $this->$categoria = $categoria;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Listagem de patrimonios';
        $categorias = Categorias::all();
        $patrimonios = Inventario::paginate(8);
        $search = $request->get('search');
        return view('patrimonio', compact('patrimonios', 'title', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Adicionar Inventários';
        $gabinete = ["Gabinete-HP", "Gabinete-Lenovo", "Gabinete-Positivo",];
        $monitor = ["Monitor-Dell", "Monitor-HP", "Monitor-LG", "Monitor-Samsung", "Monitor-Lenovo", "Monitor-Positivo"];
        $inventariomovel = ['Mesa'];
        $inventariomovel1 = ['Cadeira'];
        $inventariomovel2 = ['Apoio', 'Gaveteiro'];
        $salas = ['SALA DE REUNIÃO–TA 01', 'COPA–TA 02', 'SALA DE REUNIÃO–TA 13 “A”',
            'COORDENAÇÃO DE TRANSPARÊNCIA-TA 14 “A”', 'NÚCLEO DE TECNOLOGIA–TA 13',
            'NÚCLEO DE APOIO ADMINISTRATIVO–TA 13', 'SERVIÇO DE INFORMAÇÃO AO CIDADÃO (SIC)-TA 14',
            'SALA DE ATENDIMENTO–TA 17', 'ARQUIVO–TA 18 “A”', 'PREPOSTA–TA 18',
            'DEPÓSITO–142 “A”', 'REFEITÓRIO-142', 'TREINAMENTO-148', 'GABINETE – N° 179', 'COORDENAÇÃO DE OUVIDORIA–N° 156 "A"',
            'COORDENAÇÃO DE OUVIDORIA–N° 156', 'SALA DE REUNIÃO–N° 172', 'DIVISÃO DE OUVIDORIA–N° 161',
            'ASSESSORIA–N° 177 “A”', 'ASSESSORIA–N° 177', 
        ];
        return view('forms.cadastro-edit', compact(
            'title',
            'gabinete',
            'monitor',
            'inventariomovel',
            'inventariomovel1',
            'inventariomovel2',
            'salas'
        ));
        /* return view('forms.cadastro')->with('categotias', Categorias::all()); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatrimonioFormRequest $request) //Request personalizado
    {
        $patrimonioData = $request->all();
        //$data['active'] = ( !isset($data['active']) ) ? 0 : 1;     

        /*  $this->validate($request, $this->patrimonio->rules, $messages);*/
        $patrimonio = $this->patrimonio->create($patrimonioData); //Parei aqui
        if ($patrimonio)
            return redirect()->route('patrimonio.index')->withSuccess('Patrimonio salvo!');
        else
            return redirect()->route('patrimonio.create')->withErrors('Erro ao salvar!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patrimonio = Inventario::findOrfail($id);
        $categoria = Categorias::findOrfail($id);
        debug($patrimonio);
        return view('forms.show', compact('patrimonio', 'categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Recupera por id
        $title = "Editar inventários";
        $gabinete = ["Gabinete-HP", "Gabinete-Lenovo", "Gabinete-Positivo",];
        $monitor = ["Monitor-Dell", "Monitor-HP", "Monitor-LG", "Monitor-Samsung", "Monitor-Lenovo", "Monitor-Positivo"];
        $inventariomovel = ['Mesa'];
        $inventariomovel1 = ['Cadeira'];
        $inventariomovel2 = ['Apoio', 'Gaveteiro'];
        $salas = [
            'SALA DE REUNIÃO–TA 01', 'COPA–TA 02', 'SALA DE REUNIÃO–TA 13 “A”',
            'COORDENAÇÃO DE TRANSPARÊNCIA-TA 14 “A”', 'NÚCLEO DE TECNOLOGIA–TA 13',
            'NÚCLEO DE APOIO ADMINISTRATIVO–TA 13', 'SERVIÇO DE INFORMAÇÃO AO CIDADÃO (SIC)-TA 14',
            'SALA DE ATENDIMENTO–TA 17', 'ARQUIVO–TA 18 “A”', 'PREPOSTA–TA 18',
            'DEPÓSITO–142 “A”', 'REFEITÓRIO-142', 'TREINAMENTO-148','GABINETE–N° 179', 'COORDENAÇÃO DE OUVIDORIA–N° 156 "A"',
            'COORDENAÇÃO DE OUVIDORIA–N° 156', 'SALA DE REUNIÃO–N° 172', 'DIVISÃO DE OUVIDORIA–N° 161',
            'ASSESSORIA–N° 177 “A”', 'ASSESSORIA–N° 177', 
        ];
        $patrimonio = $this->patrimonio->find($id);
        return view(
            'forms.editar',
            compact(
                'patrimonio',
                'title',
                'gabinete',
                'monitor',
                'inventariomovel',
                'inventariomovel1',
                'inventariomovel2',
                'salas'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatrimonioFormRequest $request)
    {
        $id = $request->id;
        
        $patrimonio = $this->patrimonio->findOrFail($id);
        
        $data = $request->all();
        
        $update = $patrimonio->update($data);
        
        if ($update)
            return redirect()->route('patrimonio.index');
        else
            return redirect()->route('patrimonio.edit', $id)->withErrors('Falha ao editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patrimonios = Inventario::findOrfail($id);
        $patrimonios->delete();
        return redirect()->route('patrimonio.index')->withSuccess('Patrimonio excluido!');
    }

    public function test()
    {
        $insert = Inventario::create([
            'patrimoniogabinete' => 'gabinete-hp'
        ]);

        if ($insert)
            return 'Sucesso';
        else
            return 'Falha';
    }
}
