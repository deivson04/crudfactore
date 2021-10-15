<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use Illuminate\Support\Facades\Hash;
use Session;

class UsuarioController extends Controller
{
    public function index(){
    

        if(!Session::has('login')){
            
            return $this->Login();  
        }else{
            return view('home'); 
           
        }
    }
    
    public function Login(){
        return view('/frm_login');
    }
  
   
    
    public function executarLogin(Request $request){
      
        //validacao do formulario  
        $this->validate($request,[
            'text_usuario' => 'required',
            'text_senha' => 'required'
              ]);
    
       $usuario = usuarios::where('usuario', $request->text_usuario)->first();
       //dd($usuario);      
      if(count((array)$usuario)==0) {
        
      $erros_bd = ['Essa conta de usuario nao existir.'];
      //dd($erros_bd); 
      return view('frm_login', compact('erros_bd'));
        
    }
    
      if(!Hash::check($request->text_senha, $usuario->senha)){
        $erros_bd = ['A senha esta incorreta.'];
        return view('frm_login', compact('erros_bd')); 
      }
    
      Session::put('login', 'sim');
      Session::put('usuario', '$usuario');
      
      
      return redirect('/');
       
    } 
    
    public function Logout(){
        //logout da sessão (destruir a sessão e redirecionar para o quadro de login)  
     
       // destruir a sessão
       Session::flush();
       return redirect('/');
     }
     
    // inserindo dados no BD
    public function frmlogin(){
        return view('/cadastrar');
    }    
    
    
    public function adicionar(Request $request)
    {
       // validando o formulario
       $this->validate($request,[
            'text_usuario' => 'required|between:3,30',
            'text_email' => 'required|email',  
            'text_senha' => 'required|between:6,15',
            'text_senha_repetida' => 'required|same:text_senha'
        
        ]);
        
        //verificando se existir um usuario e email ja cadastrado
        $dados = usuarios::where('usuario', "=", $request->text_usuario)
        ->orwhere('email', "=", $request->text_email)->get();
        if($dados->count() !=0){
            $erros_bd = ['Já existir um usuario com o mesmo nome e o mesmo email cadastrado'];

            return view('cadastrar', compact('erros_bd'));
        } 
        
        //Inserindo dados no banco de dados
        $nome = new usuario;
       
        $nome->usuario = $request->text_usuario;
        $nome->email = $request->text_email;
        $nome->senha = Hash::make($request->text_senha);                
        $nome->save();
            
        //inserindo manualmente no banco
            /*$nome = usuario::create([
            'usuario' => 'deivson',
            'email'=>'araujodeivson@gmail.com',
            'senha'=>'12345678'
            
        ]);*/       
        
        return redirect('/');    
    
    }
    
    
  }









