<?php
namespace Zems\LrWeb;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use DB;

class ZemsWeb extends Controller
{
    public $method;
    public $request;
    function __construct(Request $request)
    {
        // $this->method = $method;
        $this->method = $request->method();
        $this->request = $request;
        
    }    
    public function index($data = false)
    {
        return "demo";
    }    
    
    
}
