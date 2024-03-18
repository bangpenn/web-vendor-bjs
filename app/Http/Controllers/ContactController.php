<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Contact::create($request->all());

        return redirect()->back()
                        ->with(['success' => 'Terimakasi telah menghubungi kami. Kami akan membalas secepatnya']);

        // $subject = "Contact dari " . $request->input('name');
        // $name = $request->input('name');
        // $email = $request->input('email');
        // $message = $request->input('message');

        // $mail = new PHPMailer(true);
        // try {
        //     $mail->isSMTP();
        //     $mail->SMTPAuth = true;
        //     $mail->Username = 'fendikrama56@gmail.com';
        //     $mail->Password = 'Wowok123';
        //     $mail->SMTPSecure = 'ssl';
        //     $mail->Port = 465;

        //     $mail->setFrom("fendikrama56@gmail.com", "Rizal Efendi");

        //     $mail->addAddress('pengkaredanitc@gmail.com', 'BJSTUKUKLIK');

        //     $mail->addReplyTo($email, $name);

        //     $mail->isHTML(true);                                  // Set email format to HTML
        //     $mail->Subject = $subject;
        //     $mail->Body    = $message;
        //     $mail->AltBody = $message;

        //     $mail->send();

        //     $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
        //     return view('home');

        // } catch (Exception $e) {
        //     echo 'Message could not be sent.';
        //     echo 'Mailer Error: ' . $mail->ErrorInfo;

        // }
    }
}
