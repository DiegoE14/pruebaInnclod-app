<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'doc_documento';
    protected $primaryKey = 'DOC_ID';

    protected $fillable = ['DOC_NOMBRE', 'DOC_CODIGO', 'DOC_CONTENIDO', 'DOC_ID_TIPO', 'DOC_ID_PROCESO'];

    public function tipoDocumento()
    {
        return $this->belongsTo(TipoDocumento::class, 'DOC_ID_TIPO');
    }

    public function proceso()
    {
        return $this->belongsTo(Proceso::class, 'DOC_ID_PROCESO');
    }
}
