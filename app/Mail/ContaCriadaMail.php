<?php



namespace App\Mail;



use Illuminate\Mail\Mailable;





class ContaCriadaMail extends Mailable{





   public $user;



   public function __construct($user){

       $this->user = $user;

   }



   public function build()

   {

       return $this

           ->subject('Conta criada com sucesso!')

           ->html(

               view('emails.conta\_criada\_html', [

                   'user' => $this->user

               ])->render()

           );

   }

}
