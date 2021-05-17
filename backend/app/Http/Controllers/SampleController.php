<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    //ホームページ
    public function home(Request $request){
        
        $a = "20";
        return view('home',['old'=> $a]);
    }
    //ホームページ２
    public function pen(){
        return view('pen');
    }

    //計算機
    public function calc(Request $request){
        return view('calc');
    }
    //計算機の計算と合計
    public function total(Request $request){
        
        // 最初の値
        $num_1 = $request->box1;
        
        // ２番目の値
        $operators = $request->operator;

        // 3番目の値
        $num_2 = $request->box2;
        
        $op = "";
        if (1 == $operators) {
            $total = ($request->box1 + $request->box2);
            $op = "+";
        } else if (2 == $operators) {
            $total = ($request->box1 - $request->box2);
            $op = "-";
        } else if (3 == $operators ){
            $total = ($request->box1 / $request->box2); 
            $op = "*";
        } else if (4 == $operators ){
            $total = ($request->box1 * $request->box2);
            $op = "/";
        } else {
            $operators = "?";
            $total = "計算できません";
        }
        
        // 確認画面に表示する値を配列に格納する
        $data = [
            'box1' => $num_1,
            'operator' => $op,
            'box2' => $num_2,
            'total' => $total
        ];
        
        return view('total', $data);//格納した値をtotalに移動する際に入れる。
    }

    //サイコロを回す
    public function daice(){
        return view('daice');
    }
    //サイコロの値を渡す。
    public function daice2(){
        $daice_num = rand(1,6);
        return view('daice2',['daice_num'=> $daice_num]);
    }
    
    //カードパックを開ける
    public function card(){
        return view('card');
    }
    //カードパックを開けた中身の表示の仕分け。
    public function card_open(Request $request){

        $card_rank = ""; //カードのレア度をカードのレア度を表す値
        
        $card_num = rand(1,100);//カードの値をランダムで選ぶ

        if ($card_num <= 60 ){
             $card_rank = "ノーマルカード";
        } elseif ($card_num > 60 && $card_num <= 80){
             $card_rank = "レアカード";
        } elseif ($card_num > 80 && $card_num <= 90) {
                $card_rank = "ウルトラレアカード";
        } else {
            $card_rank = "ホログラムレアカード";
        }
        
        return view('card_open',['card_rank' => $card_rank]);
    }

    //誕生日の入力フォーラム
    public function happybithday(){

        return view('happybithday');
    }
    //誕生日を祝うページ（入力した値を持ってきて出力する）
    public function happy(Request $request){
        $bithday = $request->bithday;

        return view('happy',['bithday' => $bithday]);
    }

    //八百屋さん（果物などの数を選ぶページ）
    public function greengrocer(){

        return view("greengrocer");
    }
    //八百屋さんで買ったものを計算して合計を出力するページ
    public function greengrocer_total(Request $request){
        $daikon_num = $request->daikon;
        $tomato_num = $request->tomato;
        $bitter_gourd_num = $request->bitter_gourd;
        $apple_num = $request->apple;
        $banana_num = $request->banana;

        $daikon_total = ($daikon_num * 350);
        $tomato_total = ($tomato_num * 100);
        $bitter_gourd_total = ($bitter_gourd_num * 250);
        $apple_total = ($apple_num * 150);
        $banana_total = ($banana_num * 350);
        $total = ($daikon_total + $tomato_total + $bitter_gourd_total + $apple_total + $banana_total);
        $totals = $total + ($total*0.08);
        $data = [
            'daikon_num' => $daikon_num,
            'tomato_num' => $tomato_num,
            'bitter_gourd_num' => $bitter_gourd_num,
            'apple_num' => $apple_num,
            'banana_num' => $banana_num,
            'daikon_total' => $daikon_total,
            'tomato_total' => $tomato_total,
            'bitter_gourd_total' => $bitter_gourd_total,
            'apple_total' => $apple_total,
            'banana_total' => $banana_total,
            'total' => $total,
            'totals' => $totals
        ];

        return view("greengrocer_total",$data);
    }

    //雑学クイズのホームページを選び、idによってページをかえ、値を$dataに入れてページ間を行き来させるようにする
    public function quizu($id, Request $request){
        switch($id){
            case "1":
                return view ('quizu1');
            break;
            case "1_answer":
                $q_1_a = $request->q_1;//クイズ一問目に答えられた（プルダウン）の値を宣言している。
                $q_1_r = "";//クイズ１の結果
                switch($q_1_a){
                    case 2:
                        $q_1_r = "正解";
                        break;
                    default:
                        $q_1_r= "不正解";     
                }
                $data = [
                    'quizu1_a' =>$q_1_r
                ];
                return view ('quizu1_answer',$data);
            break;
            case "2":
                $q_1_r = $request->quizu1_a;//クイズ一問目に答えられた（プルダウン）の値を宣言している。
                $data = [
                    'quizu1_a' =>$q_1_r
                ];
                return view ('quizu2',$data);
            break;
            case "2_answer":
                $q_1_r = $request->quizu1_a;
                $q_2_a = $request->q_2;//クイズ一問目に答えられた（プルダウン）の値を宣言している。
                $q_2_r = "";//クイズ１の結果
                switch($q_2_a){
                    case 1:
                        $q_2_r = "正解";
                        break;
                    default:
                        $q_2_r= "不正解";
                }
                $data = [
                    'quizu1_a' =>$q_1_r,
                    'quizu2_a' =>$q_2_r
                ];
                return view ('quizu2_answer',$data);
            break;
            case "3":
                $q_1_r = $request->quizu1_a;
                $q_2_r = $request->quizu2_a;
                $data = [
                    'quizu1_a' =>$q_1_r,
                    'quizu2_a' =>$q_2_r
                ];
                return view ('quizu3',$data);
            break;
            case "3_answer":
                
                $q_1_r = $request->quizu1_a;
                $q_2_r = $request->quizu2_a;
                $q_3_a = $request->q_3;//クイズ三問目に答えられた（プルダウン）の値を宣言している。
                $q_3_r = "";//クイズ３の結果
                switch($q_3_a){
                    case 3:
                        $q_3_r = "正解";
                        break;
                    default:
                        $q_3_r= "不正解";
                }
                $data = [
                    'quizu1_a' =>$q_1_r,
                    'quizu2_a' =>$q_2_r,
                    'quizu3_a' =>$q_3_r
                ];
                return view ('quizu3_answer',$data);
            break;
            break;
            case "4":
                $q_1_r = $request->quizu1_a;
                $q_2_r = $request->quizu2_a;
                $q_3_r = $request->quizu3_a;
                $data = [
                    'quizu1_a' =>$q_1_r,
                    'quizu2_a' =>$q_2_r,
                    'quizu3_a' =>$q_3_r
                ];
                return view ('quizu4',$data);
            break;
            case "4_answer":
                $q_1_r = $request->quizu1_a;
                $q_2_r = $request->quizu2_a;
                $q_3_r = $request->quizu3_a;
                $q_4_a = $request->q_4;//クイズ三問目に答えられた（プルダウン）の値を宣言している。
                $q_4_r = "";//クイズ３の結果
                switch($q_4_a){
                    case 3:
                        $q_4_r = "正解";
                        break;
                    default:
                        $q_4_r= "不正解";
                        
                }
                $data = [
                    'quizu1_a' =>$q_1_r,
                    'quizu2_a' =>$q_2_r,
                    'quizu3_a' =>$q_3_r,
                    'quizu4_a' =>$q_4_r
                ];
                return view ('quizu4_answer',$data);
            break;
            case "answer":
                $q_1_r = $request->quizu1_a;
                $q_2_r = $request->quizu2_a;
                $q_3_r = $request->quizu3_a;
                $q_4_r = $request->quizu4_a;
                
                $data = [
                    'quizu1_a' =>$q_1_r,
                    'quizu2_a' =>$q_2_r,
                    'quizu3_a' =>$q_3_r,
                    'quizu4_a' =>$q_4_r
                ];
                return view('quizu_answer',$data);
            break;
            default:
        }
    }

    //カイジのEカードのホームページ、idによってページをかえ、値を$dataに入れてページ間を行き来させるようにする
    public function e_card($id, Request $request){
        switch($id){
            case "home":
                return view ('e_card_home');
            break;
            case "1_answer":
                $e_card_num_mine = $request->card_answer;//クイズ一問目に答えられた（プルダウン）の値を宣言している。
                $e_card_num_your = rand(1,3);//eカードどれか,１なら皇帝、2なら市民、３なら奴隷。
                $e_card_answer = "";//駆け引きの結果
                if ($e_card_num_mine == 1) {
                    if ($e_card_num_your == 1){

                        $e_card_answer = "引き分け";
                        $e_card_num_your = "皇帝";
                        $e_card_num_mine　= "皇帝";

                    } elseif ($e_card_num_your == 2){

                        $e_card_answer = "あなたの勝ち";
                        $e_card_num_your = "市民";
                        $e_card_num_mine　= "皇帝";

                    } elseif ($e_card_num_your == 3){

                        $e_card_answer = "あなたの負け";
                        $e_card_num_your = "奴隷";
                        $e_card_num_mine　= "皇帝";
                    }
                } elseif ($e_card_num_mine == 2) {
                    if ($e_card_num_your == 1){
                        $e_card_answer = "あなたの負け";
                        $e_card_num_your = "皇帝";
                        $e_card_num_mine = "市民";

                    } else if ($e_card_num_your == 2){

                        $e_card_answer = "引き分け";
                        $e_card_num_your = "市民";
                        $e_card_num_mine = "市民";

                    } else if ($e_card_num_your == 3){

                        $e_card_answer = "あなたの勝ち";
                        $e_card_num_your = "奴隷";
                        $e_card_num_mine = "市民";
                    }
                    
                } elseif ($e_card_num_mine == 3 ) {
                    if ($e_card_num_your == 1){

                        $e_card_answer = "あなたの勝ち";
                        $e_card_num_your = "皇帝";
                        $e_card_num_mine = "奴隷";

                    } else if ($e_card_num_your == 2){

                        $e_card_answer = "あなたの負け";
                        $e_card_num_your = "市民";
                        $e_card_num_mine = "奴隷";

                    } else if ($e_card_num_your == 3){

                        $e_card_answer = "引き分け";
                        $e_card_num_your = "奴隷";
                        $e_card_num_mine = "奴隷";
                    }
                }
                $data = [
                    'card_answer' =>$e_card_answer,
                    'card_answer_your' =>$e_card_num_your,
                    'e_card_num_mine' =>$e_card_num_mine
                ];
                return view ('e_card_answer',$data);
            break;
            default:
        }
    }

    //歌詞クイズ
    public function song_quizu($id, Request $request){
        $score = 0;//最終点数
        switch($id){
            case "1":
                return view ('song_quizu1');
            break;
            case "1_answer":
                $song1_a = $request->song1_a;//クイズ一問目に答えられた（プルダウン）の値を宣言している。
                $sq_1_r = "";//歌詞クイズ１の結果
                if (2 == $song1_a) {
                    $sq_1_r = "正解";
                } else {
                    $sq_1_r= "不正解";  
                }
                $data = [
                    'song_quizu1_a' =>$sq_1_r
                ];
                return view ('song_quizu1_answer',$data);
            break;
            case "2":
                $sq_1_r = $request->song_quizu1_a;//クイズ一問目に答えられた（プルダウン）の値を宣言している。
                $data = [
                    'song_quizu1_a' =>$sq_1_r
                ];
                return view ('song_quizu2',$data);
            break;
            case "2_answer":
                $sq_1_r = $request->song_quizu1_a;
                $song2_a = $request->song2_a;
                $sq_2_r = "";//歌詞クイズ２の結果
                if (3 == $song2_a) {
                    $sq_2_r = "正解";
                } else {
                    $sq_2_r = "不正解";  
                }
                $data = [
                    'song_quizu1_a' =>$sq_1_r,
                    'song_quizu2_a' =>$sq_2_r
                ];
                return view ('song_quizu2_answer',$data);
            break;
            case "3":
                $sq_1_r = $request->song_quizu1_a;
                $sq_2_r = $request->song_quizu2_a;
                $data = [
                    'song_quizu1_a' =>$sq_1_r,
                    'song_quizu2_a' =>$sq_2_r
                ];
                return view ('song_quizu3',$data);
            break;
            case "3_answer":
                
                $sq_1_r = $request->song_quizu1_a;
                $sq_2_r = $request->song_quizu2_a;
                $song3_a = $request->song3_a;//クイズ三問目に答えられた（プルダウン）の値を宣言している。
                $sq_3_r = "";//クイズ３の結果
                if (3 == $song3_a) {
                    $sq_3_r = "正解";
                } else {
                    $sq_3_r= "不正解";  
                }
                $data = [
                    'song_quizu1_a' =>$sq_1_r,
                    'song_quizu2_a' =>$sq_2_r,
                    'song_quizu3_a' =>$sq_3_r
                ];
                return view ('song_quizu3_answer',$data);
            break;
            case "answer":
                $sq_1_r = $request->song_quizu1_a;
                $sq_2_r = $request->song_quizu2_a;
                $sq_3_r = $request->song_quizu3_a;
                
                if ($sq_1_r == "正解") {
                    $score = $score + 1;
                }
                if ($sq_2_r == "正解") {
                    $score = $score + 1;
                }
                if ($sq_2_r == "正解") {
                    $score = $score + 1;
                }
                
                switch($score){
                    case 0:
                        $score = "初心者";
                    break;
                    case 1:
                        $score = "初心者かも";
                    break;
                    case 2:
                        $score = "中級者かも！！";
                    break;
                    case 3:
                        $score = "上級者！？";
                    break;
                }
                
                $data = [
                    'song_quizu1_a' =>$sq_1_r,
                    'song_quizu2_a' =>$sq_2_r,
                    'song_quizu3_a' =>$sq_3_r,
                    'score' => $score
                ];
                return view('song_quizu_answer',$data);
            break;
            default:
        }
    }
}