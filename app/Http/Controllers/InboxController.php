<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inbox;
class InboxController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query("search");
        if ($search) {
            $inboxes = Inbox::where("title", "like", "%" . $search . "%")
                ->orWhere("content", "like", "%" . $search . "%")
                ->orderBy('created_at', 'ASC')
                ->get();
        } else {
            $inboxes = Inbox::orderBy('created_at', 'ASC')->get();
        }
        return response()->json($inboxes);
    }
}
