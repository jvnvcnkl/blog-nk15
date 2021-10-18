<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommentRecieved extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $comment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $comment)
    {
        $this->user = $user;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.comment-recieved')
            ->with([
                'comment' => $this->comment,
                'user' => $this->user,
                'post' =>  $this->comment->post,
                'author' => $this->comment->post->user
            ])
            ->subject('Comment recieved')
            ->from($this->user);
    }
}