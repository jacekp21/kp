use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at'; 

    protected $fillable = [
        'name',
        'address',
        'head_of_warehouse',
        'telpon'
    ];
}
