<?php 
namespace App\Modules\Auth\Controllers; 
use App\Http\Controllers\Controller;

class QrCodeController extends Controller
{
    protected  $size, $format, $generate, $merge, $mergeSize;
    public function __construct(){
        parent::__construct();
        $this->size = 200;
        $this->format = 'png';
        $this->generate = "FullName: Pham Minh Cuong\n".
            "BirthDay: 17-04-90\n".
            "Address: Tan Chi - Tien Du- Bac Ninh\n".
            "Phone: 01659003851\n".
            "Company: iCheck\n".
            "Not lover";
        //$this->merge = '/public/images/fight.png';
        //$this->mergeSize = 0.2;
    }

    public function getIndex(){
        return view('auth.qr_code.index');
    }
    public function getScan(){
        return view('auth.qr_code.scan');
    }
    public function getRender(){
        $qrCode = base64_encode(
            QrCode::format('png')
                ->size($this->size)
                ->color(0,0,0)
                ->backgroundColor(255,255,255)
                //->merge($this->merge, $this->mergeSize
                ->errorCorrection('H')
                ->encoding('UTF-8')
                ->generate($this->generate));
        return view('auth.qr_code.render')->with(['qrCode' => $qrCode, 'size' =>$this->size, 'format' =>$this->format, 'generate' =>$this->generate]);
    }
    public function getUser(){
        return view('auth.qr_code.user');
    }
    function postAjaxChangeQrCode(){
        $input = Input::all();
        $qrCode = base64_encode(QrCode::format($input['format'])
            ->size($input['size'])
            ->color($input['r'], $input['g'], $input['b'])
            ->backgroundColor($input['bgr'],$input['bgg'],$input['bgb'])
            //->merge($this->merge, $this->mergeSize)
            ->errorCorrection('H')
            ->encoding('UTF-8')
            ->generate($input['generate']));
        return Response::json($qrCode);
    }
}
