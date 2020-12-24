<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Models\ViewerMst;
use App\Http\Models\FacilityManagerMst;
use App\Http\Models\FacilityMst;
use App\Http\Models\PatientMst;
use Illuminate\Support\Facades\Log;

class ViewerController extends Controller
{
    public function index (Request $request) 
    {
//        $user_id = $request->session()->get('id');
        Log::debug('hoge');
        $facility = FacilityManagerMst::select('facility_mst.id','facility_mst.facility_id','facility_mst.facility_name')
        ->leftjoin('facility_mst','facility_mst.id','=','facility_manager_mst.facility_id')
        ->where('facility_manager_id', $request->session()->get('id'))->get();
        Log::debug($facility);
        $viewer = ViewerMst::where('facility_id',$facility[0]['id'])->get();
        Log::debug($facility);
        return view('viewer', compact('viewer','facility'));
    }
    public function regist (Request $request) 
    {
        if($request['viewer_name'] != ""){
            DB::beginTransaction();
            try {
                $sql_result = 0;
                if($request['regist_type'] == "new"){
                    Log::debug("1111");
                    Log::debug($request);
                    $viewer_mst = new ViewerMst();
                    $sql_result = $viewer_mst->insert([
                        'facility_id' => $request['facility_id'],
                        'viewer_name' => $request['viewer_name'],
                        'viewer_id' => $request['viewer_id'],
                        'mail_address' => $request['mail_address'],
                        'password' => $request['password'],
                        'create_date' => now(),
                    ]);
                    $res = ['result'=>'OK'];
                }
                if($request['regist_type'] == "update"){
                    Log::debug("2222");
                    Log::debug($request);
                    $viewer_mst = new ViewerMst();
                    $sql_result = $viewer_mst
                    ->where('id', $request['target_id'])
                    ->update([
                        'facility_id' => $request['facility_id'],
                        'viewer_name' => $request['viewer_name'],
                        'viewer_id' => $request['viewer_id'],
                        'password' => $request['password'],
                        'mail_address' => $request['mail_address'],
                        'update_date' => now(),
                    ]);
                    $res = ['result'=>'OK'];
                }
                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
                $res = ['result'=>'NG'];
                $result = json_encode($res);
                return $result;
            }
            if($sql_result != 0){
                $result = json_encode($res);
                return $result;
            }else{
                $res = ['result'=>'NG'];
                $result = json_encode($res);
                return $result;
            }
        }else{

        }
    }
}
