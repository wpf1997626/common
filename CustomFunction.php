<?php


trait CustomFunction
{
    function returnSuccess(int $code = 10000, string $msg = '请求成功', $needObject = false, array $data = [])
    {
        return [
            'code' => $code,
            'message' => $msg,
            'data' => $data ? $data : ($needObject ? (object)array() : [])
        ];
    }

    function returnFail(int $code, string $msg, $needObject = false, array $data = [])
    {
        return [
            'code' => $code,
            'message' => $msg,
            'data' => $data ? $data : ($needObject ? (object)array() : [])
        ];
    }

    function logAssemble(Exception $e)
    {
        return [
            'params' => func_get_args(),
            'code' => $e->getCode(),
            'msg' => $e->getMessage(),
            'trace_as_string' => $e->getTraceAsString(),
            'line' => $e->getLine(),
            'file' => $e->getFile(),
            'previous' => $e->getPrevious()
        ];
    }
}