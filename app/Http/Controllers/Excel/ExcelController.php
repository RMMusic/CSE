<?php

namespace App\Http\Controllers\Excel;

use App\Logs;
use App\TypeExam;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helper\File as file;
use App\Helper\Excel_;
use App\Model\Excel\Excel as Model_Excel;


class ExcelController extends Controller
{

    private $url;

    private $data;

    public function __construct()
    {
        $this->middleware('role:Admin');
        view()->share('type', 'work');
    }


    /**
     * parce xls
     */
    public function importXLS(Request $request){

        if ($file = $request->file('xls')) {

            if (array_keys([
                'application/vnd.ms-office',
                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'],$file->getMimeType())) {

                $this->otherData['path'] = $file->move('xls/'.file::_get_path(), $file->getClientOriginalName());
                $this->otherData['urlOriginalName'] = $file->getClientOriginalName();
                $this->otherData['type_exam'] = $request->get('type_exam');
                $this->data = Excel_::_loadXls($this->otherData['path']);

                $Model_Excel = new Model_Excel($this->data,$this->otherData);
                $Model_Excel->SaveData();

                return view('admin.excel.viewDataFromXls',['data'=>$this->data]);
            } else {
                return view('admin.excel.import')->with(['error'=>'No type file']);
            }
        }else{
            return view('admin.excel.import',['type_exam'=>TypeExam::all()]);
        }

    }

}