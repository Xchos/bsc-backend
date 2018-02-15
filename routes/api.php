<?php

use Illuminate\Http\Request, App\Note;

Route::get('notes', function() {
    return Note::all();
});

Route::get('notes/{id}', function($id) {
    return Note::find($id);
});

Route::post('notes', function(Request $request) {
    return Note::create($_GET);
});

Route::put('notes/{id}', function(Request $request, $id) {
    $note = Note::findOrFail($id);
    $note->update($request->all());
    return $note;
});

Route::delete('notes/{id}', function($id) {
    Note::find($id)->delete();
    return 204;
});