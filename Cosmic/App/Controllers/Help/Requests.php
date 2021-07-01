<?php
namespace App\Controllers\Help;

use App\Config;
use App\Helper;

use App\Models\Help;
use App\Models\Player;

use Core\Locale;
use Core\View;

use Library\Json;

use stdClass;

class Requests
{ 
    private $data;

    public function __construct()
    {
        $this->data = new stdClass();
    }

    public function ticket($ticket)
    {
        $ticket = Help::getRequestById($ticket, request()->player->id);
        if ($ticket == null) {
            (redirect('/help'));
        }

        $ticket->author = Player::getDataById($ticket->player_id, array('username','look'));
        $ticket->ctickets = Help::countTicketsByUserId($ticket->player_id);
        $ticket->latest = Help::latestHelpTicketReaction($ticket->id);
        $ticket->message = Helper::bbCode($ticket->message);

        $reactions = Help::getTicketReactions($ticket->id);

        foreach ($reactions as $reaction) {
            $reaction->author = Player::getDataById($reaction->practitioner_id, array('username','look'));
            $reaction->message = Helper::bbCode($reaction->message);
        }

        $this->data->requests = $ticket;
        $this->data->requests->reactions = $reactions;

        $this->index();
    }

    public function createpost()
    {
        $validate = request()->validator->validate([
            'message'   =>   'required|max:2000',
            'ticketid'  =>   'required|numeric'
        ]);

        if(!$validate->isSuccess()) {
            return;
        }

        $ticket = Help::getRequestById(input('ticketid'), request()->player->id);
        if ($ticket == null || $ticket->player_id != request()->player->id) {
            response()->json(["status" => "error", "message" => Locale::get('core/notification/something_wrong')]);
        }

        Help::addTicketReaction($ticket->id, request()->player->id, Helper::filterString(input('message')));
        Help::updateTicketStatus($ticket->id, 'wait_reply');

        response()->json(["status" => "success", "message" => Locale::get('core/notification/message_placed'), "replacepage" => "help/requests/" . $ticket->id . "/view"]);
    }

    public function create()
    {
        $validate = request()->validator->validate([
            'subject'   =>   'required|min:1|max:100',
            'message'   =>   'required|min:1|max:2000'
        ]);

        if(!$validate->isSuccess()) {
            return;
        }

        if (in_array('open', array_column(Help::getTicketsByUserId(request()->player->id), 'status'))) {
            response()->json(["status" => "error", "message" => Locale::get('help/already_open')]);
        }

        $this->data->subject = input('subject');
        $this->data->message = Helper::filterString(input('message'));

        Help::createTicket($this->data, request()->player->id, getIpAddress());
        response()->json(["status" => "success", "message" => Locale::get('help/ticket_created'), "replacepage" => "help/requests/view"]);
    }

    public function index()
    {
        if(request()->player) {
            $tickets = Help::getTicketsByUserId(request()->player->id);
            $this->data->tickets = $tickets;
        }

        View::renderTemplate('Help/requests.html', [
            'title' => Locale::get('core/title/help/requests'),
            'page'  => 'help',
            'data'  => $this->data
        ]);
    }
}
