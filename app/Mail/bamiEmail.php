<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class bamiEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if(isset($this->data['type']) && $this->data['type'] == 'new message'){ 
            return $this->markdown('emails.contact')
            ->subject($this->data['subject']);
        }
        if(isset($this->data['type']) && $this->data['type'] == 'message recieved'){ 
            return $this->markdown('emails.contact')
            ->subject($this->data['subject']);
        }

        if(isset($this->data['type']) && $this->data['type'] == 'new applicant'){ 
            $this->verifyAttachments($this->data);
        }
        
        if(isset($this->data['type']) && $this->data['type'] == 'application recieved'){ 
            $this->verifyAttachments($this->data);            
        }
        // if(isset($this->data['type']) && $this->data['type'] == 'application recieved'){ 
        //     if($this->data['pickup_picture_1'] == 'N/A' or $this->data['pickup_picture_2'] == 'N/A' ){
        //         return $this->markdown('emails.enroll')
        //             ->subject($this->data['subject']);
        //     }else{
        //         return $this->markdown('emails.enroll')
        //             ->attach($this->data['pickup_picture_1'])
        //             ->attach($this->data['pickup_picture_2'])
        //             ->subject($this->data['subject']);
        //     }
        // }
    }

    private function verifyAttachments($data){
        //default mail
        if(is_null($this->data['pickup_picture_1']) && is_null($this->data['pickup_picture_2'])){
            return $this->markdown('emails.enroll')
                ->subject($this->data['subject']);
        }
        //check for pic 2
        if(is_null($this->data['pickup_picture_1']) && !is_null($this->data['pickup_picture_2'])){
            return $this->markdown('emails.enroll')
                ->subject($this->data['subject'])
                ->attach($this->data['pickup_picture_2'], [
                    'as' => 'Picture 2',
                ]);
              
        }
        //check for pic 2
        if(!is_null($this->data['pickup_picture_1']) && is_null($this->data['pickup_picture_2'])){
            return $this->markdown('emails.enroll')
                ->subject($this->data['subject'])
                ->attach($this->data['pickup_picture_1'], [
                    'as' => 'Picture 1',
                ]);
        }
         //otherwise send pic 1 and 2
        if(!is_null($this->data['pickup_picture_1']) && !is_null($this->data['pickup_picture_2'])){
            return $this->markdown('emails.enroll')
                ->subject($this->data['subject'])
                ->attach($this->data['pickup_picture_1'], [
                    'as' => 'Picture 1',
                ])
                ->attach($this->data['pickup_picture_2'], [
                    'as' => 'Picture 2',
                ]); 
            
        }
    }
}
