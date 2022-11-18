<?php

namespace App\Http\Controllers;

use App\Models\Pase;
use Illuminate\Http\Request;

/**
 * Class PaseController
 * @package App\Http\Controllers
 */
class PaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->fecha)
        {
            $dt=\DateTime::createFromFormat('Y-m-d', $request->fecha);
            if ($dt !== false) {
                $pases = Pase::whereDate('creado','>',$dt->format('Y-m-d H:i:s'))->paginate();
                return view('pase.index', compact('pases'))
                ->with('i', (request()->input('page', 1) - 1) * $pases->perPage());
            }
            else
            {
                $pases = Pase::paginate();
                return view('pase.index', compact('pases'))
                ->with('i', (request()->input('page', 1) - 1) * $pases->perPage());
            }
        }
        else
        {
            $pases = Pase::paginate();
            return view('pase.index', compact('pases'))
            ->with('i', (request()->input('page', 1) - 1) * $pases->perPage());
        }
        

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pase = new Pase();
        return view('pase.create', compact('pase'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pase::$rules);

        $pase = Pase::create($request->all());

        return redirect()->route('pases.index')
            ->with('success', 'Categoría created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pase = Pase::find($id);

        return view('pase.show', compact('pase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pase = Pase::find($id);

        return view('pase.edit', compact('pase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pase $pase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pase $pase)
    {
        request()->validate(Pase::$rules);

        $pase->update($request->all());

        return redirect()->route('pases.index')
            ->with('success', 'Categoría updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pase = Pase::find($id)->delete();

        return redirect()->route('pases.index')
            ->with('success', 'Categoría deleted successfully');
    }
}
