<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $table = 'tb_colaborador';
    public $timestamps = false;

    protected $fillable = array('nome', 'funcao_id', 'email', 'funcao', 'descricao');

    protected $guarded = ['id'];

    public function funcao(){
        return $this->belongsTo('App\Funcao');
    }
}
