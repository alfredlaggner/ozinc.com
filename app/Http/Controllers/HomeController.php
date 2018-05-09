<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($just_added = true)
    {
        $data['title'] = 'Reefside';
        if (!cookie('just_added')) {
            view('main.home_0', $data);
        } else {
            return redirect()->away('http://www.ozinc.com');
        }
    }

    public function home()
    {
        $just_added = array(
            'value' => 1,
            'expire' => time() + 86500,
        );
        //   set_cookie($just_added);
        $cookie = cookie('just_added', '1', time() + 86500);
        $url = 'http://www.ozinc.com';
        return redirect()->away($url);
    }

    public function create()
    {

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'ip' => $this->input->ip_address(),
        );

        if ($this->email_model->add_record($data)) ;
        {
            $cookie = array(
                'name' => 'signed_up',
                'value' => 1,
                'expire' => time() + 86500,
            );
            set_cookie($cookie);
        }


//		$this->home(TRUE);
        redirect('pages/home');
    }

    public function update()
    {
        $data = array(
            'name' => $this->input->get('name'),
            'email' => $this->input->get('email'),
        );

        if ($this->input->post('delete') == "Delete") {
            $this->email_model->delete_record();
        } else {
            $this->email_model->update_record($data);
        }

        $this->index();
    }


}
