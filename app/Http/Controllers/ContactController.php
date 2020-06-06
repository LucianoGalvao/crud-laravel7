<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
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
            'primeiro_nome'=>'required',
            'sobrenome'=>'required',
            'email'=>'required'
        ]);

        $contact = new Contact([
            'primeiro_nome' => $request->get('primeiro_nome'),
            'sobrenome' => $request->get('sobrenome'),
            'nascimento' => $request->get('nascimento'),
            'email' => $request->get('email'),
            'telefone' => $request->get('telefone'),
            'endereco' => $request->get('endereco'),
            'cidade' => $request->get('cidade'),
            'estado' => $request->get('estado'),
        ]);

        $contact->save();
        return redirect('/contacts')->with('success', 'Contato salvo!');
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
        $contact = Contact::find($id);
        return view('edit', compact('contact'));
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
            'primeiro_nome'=>'required',
            'sobrenome'=>'required',
            'email'=>'required'
        ]);

        $contact = Contact::find($id);
        $contact->primeiro_nome =  $request->get('primeiro_nome');
        $contact->sobrenome = $request->get('sobrenome');
        $contact->nascimento = $request->get('nascimento');
        $contact->email = $request->get('email');
        $contact->telefone = $request->get('telefone');
        $contact->endereco = $request->get('endereco');
        $contact->cidade = $request->get('cidade');
        $contact->estado = $request->get('estado');
        $contact->save();

        return redirect('/contacts')->with('success', 'Contato atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/contacts')->with('success', 'Contato deletado!');
    }
}
