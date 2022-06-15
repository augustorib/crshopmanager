<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = 'veiculo';

    protected $fillable = [
        'pessoa',
        'modelo',
        'marca',
        'cor',
        'ano_fab',
        'ano_mod',
        'combustivel',
        'placa',
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa', 'id');
    }

    use HasFactory;
}
