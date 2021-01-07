<?php


namespace App\Lib;


class ResponseBase
{
    public static function success($message, $additionalResponse=array(),$code=200)
    {
        if (empty($additionalResponse)){
            return [
                "status" => $code,
                "message" => $message
            ];
        }else{
            return response()->json(array_merge([
                "status" => 200,
                "message" => $message
            ],$additionalResponse));
        }
    }

    public static function error( $message, $code=400, $additionalResponse=array())
    {
        if (empty($additionalResponse)){
            return[
                "status" => $code,
                "message" => $message
            ];
        }else{
            return response()->json(array_merge([
                "status" => $code,
                "message" => $message
            ],$additionalResponse));
        }
    }

}
