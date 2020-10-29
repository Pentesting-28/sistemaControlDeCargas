<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Carga;

class CargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargas = Carga::paginate(7);

        return view('control_pines.index', compact('cargas'));
    }

        public function busqueda(Request $request){

        $Orden = $request->Orden;
        $date  = $request->date;
        
        $cargas = Carga::where('Orden','LIKE',"%$Orden%" )
                              ->where('created_at','LIKE',"%$date%" )
                              ->paginate(10);

        if ($Orden !== null or $date !== null) {
            
            if(count($cargas) > 0){

                return view('control_pines.index',compact('cargas'));


            }
            else{

                return view('control_pines.index',compact('cargas'));

            }
        }
        else{

            return view('control_pines.index',compact('cargas'));

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

            'Orden'         => 'required|unique:cargas',
            'Ret_ID'        => 'required|unique:cargas',
            'Motivo'        => 'required|unique:cargas',
            'Valor_Facial'  => 'required',
            'Desde'         => 'required',
            'Hasta'         => 'required',
            'Fecha'         => 'required',
            'Observacion'   => 'required'

        ]);

        $cargas                = new Carga();
        $cargas->Orden         = $request->Orden;
        $cargas->Ret_ID        = $request->Ret_ID;
        $cargas->Motivo        = $request->Motivo;
        $cargas->Valor_Facial  = $request->Valor_Facial;
        $cargas->Desde         = $request->Desde;
        $cargas->Hasta         = $request->Hasta;
        $cargas->Fecha         = $request->Fecha;
        $cargas->Observacion   = $request->Observacion;
        $cargas->save();

        return redirect()->route('carga.index')->with('mensaje', 'Registro creado con éxito');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carga = Carga::findOrfail($id);
        return view('control_pines.edit', compact('carga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'Orden'         => 'required|unique:cargas,Orden,'. $id.',id',
            'Ret_ID'        => 'required|unique:cargas,Ret_ID,'. $id.',id',
            'Motivo'        => 'required|unique:cargas,Motivo,'. $id.',id',
            'Valor_Facial'  => 'required',
            'Desde'         => 'required',
            'Hasta'         => 'required',
            'Fecha'         => 'required',
            'Observacion'   => 'required'

        ]);

        $carga = Carga::findOrFail($id);

        $carga->update($request->all());

        return redirect()->route('carga.index')->with('mensaje', 'Registro editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Carga::findOrfail($id)->delete();

        return redirect()->route('carga.index')->with('mensaje', 'Regtro eliminado con éxito');
    }
}
