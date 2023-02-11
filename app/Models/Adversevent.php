<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Adversevent
 *
 * @property int $id
 * @property string $department_id
 * @property string $misto
 * @property string $datum_cas
 * @property string $cas
 * @property string $spec_druh
 * @property string|null $jinydoplnek
 * @property string $pracovnik
 * @property string|null $svedek
 * @property string|null $pacient
 * @property string|null $datumnaroz
 * @property string|null $chorobopis
 * @property string $udalost
 * @property string|null $reseni
 * @property string|null $opatreni
 * @property string|null $informovan
 * @property string|null $pricina
 * @property string|null $jina_pricina
 * @property string|null $stav_pacienta
 * @property string|null $lokalizace
 * @property string|null $druh_zraneni
 * @property string|null $preventivni_opatreni
 * @property string|null $zhodnoceni_stavu
 * @property string|null $datum
 * @property string|null $jmeno_lekare
 * @property string|null $vyvoj
 * @property string|null $upresneni
 * @property string $status
 * @property string|null $resitel
 * @property string|null $vyjadreni
 * @property string|null $resitel1
 * @property string|null $vyjadreni1
 * @property string|null $resitel2
 * @property string|null $vyjadreni2
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Department|null $department
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent query()
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereCas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereChorobopis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereDatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereDatumCas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereDatumnaroz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereDruhZraneni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereInformovan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereJinaPricina($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereJinydoplnek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereJmenoLekare($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereLokalizace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereMisto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereOpatreni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent wherePacient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent wherePracovnik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent wherePreventivniOpatreni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent wherePricina($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereReseni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereResitel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereResitel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereResitel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereSpecDruh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereStavPacienta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereSvedek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereUdalost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereUpresneni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereVyjadreni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereVyjadreni1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereVyjadreni2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereVyvoj($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereZhodnoceniStavu($value)
 * @mixin \Eloquent
 */
class Adversevent extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'misto',
        'datum_cas',
        'cas',
        'spec_druh',
        'jinydoplnek',
        'pracovnik',
        'svedek',
        'pacient',
        'datumnaroz',
        'chorobopis',
        'udalost',
        'reseni',
        'opatreni',
        'informovan',
        'pricina',
        'jina_pricina',
        'stav_pacienta',
        'lokalizace',
        'druh_zraneni',
        'preventivni_opatreni',
        'zhodnoceni_stavu',
        'datum',
        'jmeno_lekare',
        'vyvoj',
        'upresneni',
        'status',
        'resitel',
        'vyjadreni',
        'resitel1',
        'vyjadreni1',
        'resitel2',
        'vyjadreni2'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'id');
    }
}
