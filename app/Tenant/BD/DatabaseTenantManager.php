<?PHP


namespace App\Tenant\BD;

use App\Models\Tenant;
use Illuminate\Support\Facades\DB;

class DatabaseTenantManager{

    public function criarBancoDados(Tenant $tenant)
    {
        DB::statement("
           CREATE DATABASE {$tenant->db_database} CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
        ");
    }
}
