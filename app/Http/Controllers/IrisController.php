<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iris\TcAppointment;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class IrisController extends Controller
{
    public function tc_appointment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'episode' => 'required',
            'identificator_patient' => 'required',
            'identificator_specialist' => 'required',
            'organization_local_code' => 'required',
            'date' => 'required',
            'status' => 'required',
            'iris_key' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        $cita = TcAppointment::updateOrCreate(
            [
                'episode' => $request->episode,
                'identificator_patient' => $request->identificator_patient,
                'identificator_specialist' => $request->identificator_specialist,
                'organization_local_code' => $request->organization_local_code,
                'date' => $request->date,
                'duration' => $request->duration,
                'type' => $request->type,
            ],
            [
                'status' => $request->status,
            ]
        );

        return response()->json([
            'success' => true,
            'message' => 'Agenda almacenada',
            'data' => $cita
        ], Response::HTTP_OK);
    }
}
