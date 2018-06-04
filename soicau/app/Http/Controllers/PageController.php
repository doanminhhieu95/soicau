<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;
use App\daycity;
use App\ketqua;
use App\city;
use App\kqxs;
use App\giaikqxs;

class PageController extends Controller
{
    //
    public function gettrangchu(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        include('ketquaxoso/simple_html_dom.php');
        $r = array();
        $day = date("d-m-Y");
        $plus = 1;
        $day = date("d-m-Y",strtotime("$day -$plus day"));
        $html = file_get_html("http://vesophuongtrang.com/ket-qua-xo-so/".$day.".html");
        $input = array(
            'rs_0_0' => '<img class="a1" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_1_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_2_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_2_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_3' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_4' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_5' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_3' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_3' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_4' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_5' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_6_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_6_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_6_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_7_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_7_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_7_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_7_3' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />'
        );
        $ketqua = $html->find("table.kqxsmienbac div.dayso");
        if( date( 'H' ) > 19 || ( isset( $day ) && $day !== date( 'd-m-Y' ) ) ) {
            $i=0;
            foreach( $input as $key => $value ){
                $r[$key] = $ketqua[$i]->innertext;
                $i++;
            }
        }
        else {
            $r = $input;
        }
        return view('page.index',[
            'r'=>$r
        ]);
    }
    public function getmienbac(){
        return view('page.mienbac');
    }
    public function getdangky(){
        return view('page.dangky');
    }
    public function postdangky(Request $req){
        $this->validate($req,
            [
                'email'=>'email|unique:users,email',
                'name'=>'unique:users,name',
                'password'=>'min:6|max:20',
                'repassword'=>'same:password',
                'phone'=>'unique:users,phone|min:10|max:12'
            ],
            [
                'email.email' => 'Không đúng định dạng email',
                'email.unique' => 'Email đã có người sử dụng',
                'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
                'password.max' => 'Mật khẩu tối đa 20 ký tự',
                'repassword.same' => 'Mật khẩu không giống nhau',
                'phone.min' => 'Nhập chưa đúng số điện thoại.',
                'phone.max' => 'Nhập chưa đúng số điện thoại.',
                'name.unique' => 'Nickname đã có người sử dụng',
                'phone.unique' => 'Số điện thoại đã có người sử dụng',
            ]);
            
            $user = new User();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            $user->phone = $req->phone;
            $user->diem = 0;
            $user->level = 0;
            $user->vip = 0;
            $user->image = "";
            $user->save();
            return redirect()->route('dangky')->with('dangky','Tạo tài khoản thành công!');
    }
    public function getdangnhap(){
        return view('page.dangnhap');
    }
    public function postdangnhap(Request $req){
        session_start();
        $credentials = array('phone'=>$req->phone,'password'=>$req->password);
        if(Auth::attempt($credentials)){
            //return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công!']);
            $_SESSION["member_id"] = Auth::user()->id;
            if(!empty($req->remember)) {
                setcookie("member_login",$req->phone,time()+ (10 * 365 * 24 * 60 * 60));
                setcookie("member_password",$req->password,time()+ (10 * 365 * 24 * 60 * 60));
            } else {
                if(isset($_COOKIE["member_login"])) {
                    setcookie("member_login","");
                }
                if(isset($_COOKIE["member_password"])) {
                    setcookie("member_password","");
                }
            }
            return view('page.index');
        }
        else return redirect()->back()->with('dangnhap','Số điện thoại hoặc mật khẩu không chính xác!'); 
    }
    public function getDangXuat(){
        Auth::logout();
        return view('page.index');
    }
    public function getkqxs(){
        return view('admin.page.kqxs.ketqua');
    }
    public function getketqua(){
        return view('admin.page.kqxs.index');
        
    }
    public function postketqua(Request $req){
        if(strlen($req->giai_1)!=5 && strlen($req->giai_1)!=6){
            return redirect()->back()->with([
                'flag'=>'danger',
                'update'=>'Chưa có kết quả để cập nhật'
            ]);
        }
        $d = substr($req->date,0,2);
        $m = substr($req->date,3,2);
        $y = substr($req->date,6,4);
        $date = $y."-".$m."-".$d;
        $thu = date('l', strtotime($date));
        if($thu=="Sunday") $thu = 1;
        if($thu=="Monday") $thu = 2;
        if($thu=="Tuesday") $thu = 3;
        if($thu=="Wednesday") $thu = 4;
        if($thu=="Thursday") $thu = 5;
        if($thu=="Friday") $thu = 6;
        if($thu=="Saturday") $thu = 7;
        $daycity = daycity::where([
            ['idcity',$req->city],
            ['idday',$thu]
        ])->first();
        $kqxs = kqxs::where([
            ['ngayxoso',$date],
            ['iddaycity',$daycity->id]
        ])->get();
        if(count($kqxs)!=0){
            return redirect()->back()->with([
                'flag'=>'danger',
                'update'=>'Đài này đã cập nhật rồi!'
            ]);
        }
        $kqxs = new kqxs();
        $kqxs->ngayxoso = $date;
        $kqxs->iddaycity = $daycity->id;
        $kqxs->save();
        if($req->city == 1){
            $n = 9;
        }else $n = 10;
        for($i=1; $i<$n; $i++){
            $giaikqxs = new giaikqxs();
            $giaikqxs->idkqxs = $kqxs->id;
            $giaikqxs->idgiai = $i;
            $giaikqxs->save();
            
            $kq = "giai_".$i;
            $giai = $req->$kq;
            $array = explode(" - ",$giai);
            if(count($array)==1){
                $array[0] = $req->$kq;
            }
            foreach($array as $key=>$value){
                $ketqua = new ketqua();
                $ketqua->ketqua = $value;
                $ketqua->idgiaikqxs = $giaikqxs->id;
                $ketqua->save();
            }
        }
        return redirect()->back()->with([
            'flag'=>'success',
            'update'=>'Cập nhật thành công!'
        ]);
    }
}
