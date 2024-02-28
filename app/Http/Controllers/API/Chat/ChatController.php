<?php

namespace App\Http\Controllers\API\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\Student;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    // =========
    // nick name
    // =========

    public function changeNName(Request $request)
    {
        if (!$request || !$request->student_id || !$request->nickName) return  response()->json(['message' => 'Some fields are required.']);
        Student::where('id', $request->student_id)->update([
            'nickName' => $request->nickName,
        ]);
        return response()->json(['success' => 'created'], 201);
    }


    // ========
    // message
    // ========
    public function getChat(Request $request)
    {
        $token = $request->header('token');
        $stu = Student::where('token', $token)->first();
        if (!$stu) return  response()->json(['message' => 'Wrong token!']);

        $silver = Chat::select('chats.*', 'students.name', 'students.nickName', 'students.profile_picture', 'students.board')
            ->leftJoin('students', 'chats.student_id', 'students.id')
            ->where('students.board', 'silver')
            ->where('chats.created_at', '>=', now()->subHours(4))
            ->get();
        $platinum = Chat::select('chats.*', 'students.name', 'students.nickName', 'students.profile_picture', 'students.board')
            ->leftJoin('students', 'chats.student_id', 'students.id')
            ->where('students.board', 'platinum')
            ->where('chats.created_at', '>=', now()->subHours(4))
            ->get();
        $gold = Chat::select('chats.*', 'students.name', 'students.nickName', 'students.profile_picture', 'students.board')
            ->leftJoin('students', 'chats.student_id', 'students.id')
            ->where('students.board', 'gold')
            ->where('chats.created_at', '>=', now()->subHours(4))
            ->get();
        $diamond = Chat::select('chats.*', 'students.name', 'students.nickName', 'students.profile_picture', 'students.board')
            ->leftJoin('students', 'chats.student_id', 'students.id')
            ->where('students.board', 'diamond')
            ->where('chats.created_at', '>=', now()->subHours(4))
            ->get();


        if ($stu->board == "silver") {
            return response()->json([
                'silver' => $silver,
            ]);
        } elseif ($stu->board == "platinum") {
            return response()->json([
                'platinum' => $platinum,
            ]);
        } elseif ($stu->board == "gold") {
            return response()->json([
                'gold' => $gold,
            ]);
        } elseif ($stu->board == "diamond") {
            return response()->json([
                'diamond' => $diamond
            ]);
        }
    }

    public function sendChat(Request $request)
    {
        if (!$request || !$request->student_id || !$request->message) return  response()->json(['message' => 'Some fields are required.']);

        $baned = $this->banedMessage($request);
        $warning = $this->warningMessage($request);

        if ($baned) {
            return response()->json([
                'message' => 'baned message! If you send messages like this, your account will be baned !!'
            ]);
        } else {
            if ($warning) {
                return response()->json([
                    'message' => 'you can not send phone number or email address !!'
                ]);
            } else {
                $chat =  Chat::create([
                    'student_id' => $request->student_id,
                    'message' => $request->message
                ]);
                return response()->json([
                    'message' => $chat
                ]);
            }
        }
    }

    private function banedMessage(Request $request)
    {
        $ban = ['fuck', 'asshole', 'fck', 'fuk', 'mf', 'motherfucker'];

        $student = Student::where('id', $request->student_id)->first();

        if (strpos($request->message, ' ')) {
            $message = strtolower(str_replace(' ', '', $request->message));
        } else {
            $message = strtolower($request->message);
        }

        if (in_array($message, $ban)) {
            if ($student->status == 0) {
                Student::where('id', $request->student_id)->update([
                    'status' => 1
                ]);
            } elseif ($student->status == 1) {
                Student::where('id', $request->student_id)->update([
                    'status' => 2
                ]);
            }
            return true;
        } else {
            return false;
        }
    }

    private function warningMessage(Request $request)
    {
        $emailPattern = '/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}/';
        $interPhNum = '/^\+\d{1,3}\s\d{1,3}-\d{1,3}-\d{1,4}$/';
        $interPhNumWithParentheses = '/^\(\d{3}\)\s\d{3}-\d{4}$/';
        $interPhNumWithoutSpace = '/^\+\d{10,15}$/';
        $myanmarPhNum = '/^(09|\+959)\d{8,9}$/';

        $input = $request->message;

        if (preg_match($emailPattern, $input)) {
            return true;
        } elseif (preg_match($interPhNum, $input)) {
            return true;
        } elseif (preg_match($interPhNumWithParentheses, $input)) {
            return true;
        } elseif (preg_match($interPhNumWithoutSpace, $input)) {
            return true;
        } elseif (preg_match($myanmarPhNum, $input)) {
            return true;
        } else {
            return false;
        }
    }
}
