<?php

namespace Malikwebdev\Newpackeg;

trait ApiResponses
{
  protected function successResponse($data,  $code = 200)
  {
    return $this->response()->json([
      'code' => $code,
      'status' => 'Success',
      'data' => $data,
      'errors' => null
    ], $code);
  }

  protected function errorResponse($error, $code)
  {
    return $this->response()->json([
      'code' => $code,
      'status' => 'Error',
      'data' => null,
      'errors' => $error
    ], $code);
  }

  protected function PesanError($error, $code)
  {
    return [
      'code' => $code,
      'status' => 'Error',
      'data' => null,
      'errors' => $error
    ];
  }
  protected function alertError($title, $massage)
  {
    return [
      'title' => $title,
      'massage' => $massage,
    ];
  }
}
