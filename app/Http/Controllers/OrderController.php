<?php

namespace App\Http\Controllers;
use App\Order;
use App\userInformation;
use Illuminate\Http\Request;
use App\Package;
use DB;
use DateTime;
use Session;
use Auth;
class OrderController extends Controller
{

  public function creatOrder(Request $request){
    // dd($request);

    //creacion de imagenes
      $exploded = explode(',', $request->img);

      $decoded = base64_decode($exploded[1]);

      if(str_contains($exploded[0],'jpeg'))

      $extension = 'jpg';

      else

      $extension = 'png';

      $filename = str_random().'.'.$extension;

      $path = public_path().'/images/'.$filename;

      file_put_contents($path, $decoded);


    Order::create([
      'receptor-name' => $request['receptor-name'],
      'receptor-adress' => $request['receptor-address'],
      'receptor-email' => $request['receptor-email'],
      'sender-adress' => $request['sender-adress'],
      'sender-name' => $request['sender-name'],
      'recepcion-date' => $request['recepcion-date'],
      'scale' => $request['scale'],
      'payType' => $request['payType'],
      'zone' => $request['zone'],
      'observations' => $request['observations'],
      'price' => $request['price'],
      'quantity' => $request['quantity'],
      'code' => $randoCode = rand(1000000,9999999),
      'emition-data' => $ldate = new DateTime('today'),
    ]);


    $result = DB::table('orders')->orderBy('id', 'des')->first();



    Package::create([
      'Order_id' => $result->id,
      'name' => $request['product-name'],
      'material' => $request['material-description'],
      'picture' => $filename,
      'dimensions' => $request['dimensions'],
      'weight' => $request['weight'],
    ]);

    return($randoCode);
  }

  public function searchOrder(Request $request){
    // dd($request);
    $OrderInfo =  Order::where('code',$request->code)->first();
    // dd($OrderInfo);
    $PackageInfo = Package::where('Order_id', $OrderInfo->id)->first();
    // dd($PackageInfo);
    // dd($PackageInfo);
    $json = ([
      'OrderInfo' => $OrderInfo,
      'PackageInfo' => $PackageInfo
      ]);
    // dd($json);
    return($json);
  }
    //
  public function goToAdministratioView(){
    $session_id = \Auth::user()->id;
    $adminInfo =  userInformation::where('user_id', $session_id)->first();
    if($adminInfo['role'] > 1){
      return view('packages.Administration');
    }
    return redirect()->back()->with('alert', 'No posees los permisos para entrar a esta vista!');
  }
}
