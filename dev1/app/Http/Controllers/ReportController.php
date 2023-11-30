<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Supplier;
use App\Models\Agent;
use App\Models\Type;
use App\Models\Order;
use Illuminate\Support\Facades\Auth; // Add this line
use DateTime;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index(){
        $user = Auth::id();
        $suppliers = Supplier::where([['is_delete',0],['is_active',1],['user',$user]])->get();
        $agents = Agent::where([['is_delete',0],['is_active',1],['user',$user]])->get();
        $types = Type::where([['is_delete',0],['is_active',1],['user',$user]])->get();
        $orders = Order::where([['is_delete',0],['is_active',1],['user', $user]])->get();
        // dd($suppliers);
        return view('report.index', compact('suppliers', 'agents', 'types'));
    }

    public function generate(Request $request)
    {
        // dd($request->all());
        $type = $request->input('type') ?? null;
        $agent = $request->input('agent') ?? null;
        $supplier = $request->input('supplier') ?? null;
        $start_date = $request->input('start_date') ?? null;
        $end_date = $request->input('end_date') ?? null;


        if($start_date){
            $start_date = (new DateTime($start_date))->format('Y-m-d');
        }
        if($end_date){
            $end_date = (new DateTime($end_date))->format('Y-m-d');
        }
        $user = Auth::id();

        $query = DB::table('order')
            ->where([
                ['is_active', 1],
                ['is_delete', 0],
                ['user', $user],
            ]);
            if ($type !== null) {
                $query->where('type', $type);
            }

            if ($agent !== null) {
                $query->where('agent', $agent);
            }

            // if ($supplier !== null) {
            //     $query->where('supplier', $supplier);
            // }

            if ($start_date !== null && $end_date !== null) {
                $query->whereBetween('date', [$start_date, $end_date]);
            }
            $alldata = $query->get();

        dd($alldata, $supplier);

        return $response;
    }
}
?>