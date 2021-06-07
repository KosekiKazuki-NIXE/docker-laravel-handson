<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;//他のページからこのコントローラを通じて値を処理したりする際のRequestに必要
use App\Models\Communication;//モデルを指定し、使用する際に必要
use App\Models\Test;//モデルを指定し、使用する際に必要
use Illuminate\Support\Facades\DB;//データベースの値を探したりする際に必要

class ComminucationController extends Controller{

    //0840チャンネル及び掲示板の値の
    public function communication_top(Request $request){
            
        $communication_talk_log = Communication::all();
        $data = [
            "communication_talk_log"=>$communication_talk_log
        ];
    return view('communication_top', $data);
    }

    //0840チャンネルの掲示板に書き込む際に、空白だったりした場合に値を入れるなどを判断して値を送る場所
    public function communication_create(Request $request){

        //確認ページ用の要素の受け渡し
        $name = $request->name;
        $message = $request->message;
        $passwold = $request->passwold;

        if (isset($name)) {//もし、nameの欄に値が入っていた場合

        } else {//もし、nameの欄に値が入っていなかった場合
            $name = "名無し";
        }
        if (isset($message)) {//もし、messageの欄に値が入っていた場合

        } else {//もし、messageの欄に値が入っていなかった場合
            $message = "メッセージ無し";
        }
        if (isset($passwold)) {//もし、passwoldの欄に値が入っていた場合

        } else {//もし、passwoldの欄に値が入っていなかった場合
            $passwold = 0;
        }

        /*
        $request->validate([
	        'image' => 'required|file|image|mimes:png,jpeg'
        ]);
        */
    
        dd($_FILES, 1);
        dd($request->file());
        $upload_image = $request->file('image');
    
        if ($upload_image) {
			//アップロードされた画像を保存する
			$path = $upload_image->store('uploads',"public");
			//画像の保存に成功したらDBに記録する
			if ($path){
				Communication::create([
					"file_name" => $upload_image->getClientOriginalName(),
                    "file_path" => $path,
                    "name" => $name,
                    "passwold" =>$passwold,
                    "message" =>$message
				]);
			}
        }
        


        //$file_name = $upload_image->getClientOriginalName();

        $data = [
            'name'=>$name,
            'passwold'=>$passwold,
            'message'=>$message
        ];

        return view('communication_create', $data);
        
    }

    //0840チャンネルの掲示板に書き込んだ内容をモデルを使ってDBに保存し、元のホームページに移動させる場所（各修正などあり）
    public function communication_create_terminate(Request $request){
        
        /*
        //Topページで書いた内容をモデルを用いてDBに保存している。
        $CommunicationModel = new Communication;
        $saveData = $request->all();
        $CommunicationModel->fill($saveData)->save();*/

        //おみくじの結果の値を代入する変数
        $omikuzi = "";
        //ランダムで出てくるおみくじの処理
        $random = mt_rand(1,100);
        if ($random <= 50){
            $omikuzi = "小吉";
        } elseif ($random >= 60 && $random <= 80) {
            $omikuzi = "中吉";
        } elseif ($random >= 80&&$random <= 95) {
            $omikuzi = "大吉";
        }else {
            $omikuzi = "大凶";
        }

        //ログ（DBのデータ）の数をカウントする変数。
        $communication_log_num = Communication::count();
        //ログの数が一定の値になったらおめでとうメッセージを代入する変数
        $happy_message = "";
        //ログの数が一定の値になったらおめでとうメッセージを出す処理
        if (($communication_log_num % 7) == 0) {
            $happy_message = "7の倍数の書き込みです、ラッキーですね！！ご褒美に、おみくじの超絶大吉を差し上げます！";
            $omikuzi = "超絶大吉";
        } elseif ( $communication_log_num == 20) {
            $happy_message = "おめでとうございます、あなたが20回目の書き込みをされた方です！！";
            $omikuzi = "大吉";

        } elseif ( $communication_log_num == 50) {
            $happy_message = "おめでとうございます、あなたが50回目の書き込みをされた方です！！";
            $omikuzi = "大吉";

        } elseif ($communication_log_num == 100){
            $happy_message = "おめでとうございます!? す、すごい・・・・あなたが100回目の書き込みをされた方です！！";
            $omikuzi = "UR大吉";
        } elseif ($communication_log_num == 500){
            $happy_message = "おめでとうございます!? す、すごい..あなたが500回目の書き込みをされた方...ですか！！ご褒美にホログラム大吉を差し上げましょう";
            $omikuzi = "ホログラム大吉";
        } elseif ($communication_log_num == 1000){
            $happy_message = "おめでとうございます!? 1000回目の書き込みされた方にあなたは選ばれました！！ご褒美に、おみくじの特賞天叢雲吉を差し上げます！";
            $omikuzi = "特賞天叢雲吉";
        }

        $data = [
            "omikuzi"=>$omikuzi,
            "happy_message"=>$happy_message
        ];
        
        return view("communication_create_terminate", $data);

    }

}