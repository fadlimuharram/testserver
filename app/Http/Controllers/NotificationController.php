<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
class NotificationController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query("search");
        if ($search) {
            $notifications = Notification::where(
                "title",
                "like",
                "%" . $search . "%"
            )
                ->orWhere("content", "like", "%" . $search . "%")
                ->orderByRaw(
                    "FIELD(type, \"very_important\",\"slightly_important\",\"normal\")"
                )
                ->get();
        } else {
            $notifications = Notification::orderByRaw(
                "FIELD(type, \"very_important\",\"slightly_important\",\"normal\")"
            )->get();
        }
        return response()->json($notifications);
    }
}
